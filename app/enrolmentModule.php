<?php
include './query.php';

//Check Module
if (isset($_SESSION['module']) && ($_SESSION['module']) == 'NPF Enrolment Manager') {

    //Create State Command
    if (isset($_POST['submitEnrolmentForm']) && $utility->inputDecode($_POST['submitEnrolmentForm']) == "create_new_officer_form") {

        $tblName = '_tbl_enrolmentRepository';

        //check if NPF Number exist
        $conditions = [
            'where' => [
                'npf_file_number' => htmlspecialchars($_POST['npf_file_number']),
            ],
            'return_type' => 'count',
        ];
        $fileNumberExist = $model->getRows($tblName, $conditions);

        //check if iPPIS Number exist
        $conditions = [
            'where' => [
                'ippis_number' => htmlspecialchars($_POST['ippis_number']),
            ],
            'return_type' => 'count',
        ];
        $ippisExist = $model->getRows($tblName, $conditions);

        //check if Tax Number exist
        $conditions = [
            'where' => [
                'taxNumber' => htmlspecialchars($_POST['tax_number']),
            ],
            'return_type' => 'count',
        ];
        $taxExist = $model->getRows($tblName, $conditions);

        if ($fileNumberExist == 0 && $ippisExist == 0 && $taxExist == 0) {

            //Handle Passport Upload 
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            $maxFileSize = 524288; // 500kb
            $passportUploadPath = '../storage/passport';
            $result = $utility->handleUploadedFile('passport', $allowedTypes, $maxFileSize, $passportUploadPath);
            if (isset($_SESSION['fileName']) && $result == 'success') {
                $formNumber = $_POST['npf_file_number'] . $_POST['ippis_number'];
                $commandData = [
                    'lastname' => htmlspecialchars($_POST['surname']),
                    'firstname' => htmlspecialchars($_POST['firstname']),
                    'othername' => htmlspecialchars($_POST['othername']),
                    'gender' => htmlspecialchars($_POST['gender']),
                    'dateofbirth' => htmlspecialchars($_POST['dateofbirth']),
                    'marital_status' => htmlspecialchars($_POST['marital_status']),
                    'language' => implode($_POST['language']),
                    'state_of_origin' => htmlspecialchars($_POST['state_by_region']),
                    'passport' => $_SESSION['fileName'],
                    //Contact data
                    'phone' => htmlspecialchars($_POST['phonenumber']),
                    'email_address' => htmlspecialchars($_POST['emailaddress']),
                    'phone_alt' => htmlspecialchars($_POST['alt_phonenumber']),
                    'landmark' => htmlspecialchars($_POST['nearest_busstop']),
                    'address' => htmlspecialchars($_POST['full_address']),
                    'area' => htmlspecialchars($_POST['town']),
                    'residence_lga' => htmlspecialchars($_POST['lga_options']),
                    //employment Data
                    'dateAppointed' => htmlspecialchars($_POST['dateAppointed']),
                    'npf_file_number' => htmlspecialchars($_POST['npf_file_number']),
                    'taxNumber' => htmlspecialchars($_POST['tax_number']),
                    'ippis_number' => htmlspecialchars($_POST['ippis_number']),
                    'qualification' => implode($_POST['qualification']),
                    'form_number' => $formNumber,
                    'enroll_date' => date("Y-m-d"),
                    'enrolled_by' => $_SESSION['active']
                ];

                $rankTbl = '_tbl_officer_rankings';
                $rankData = [
                    'officerRankId' => $formNumber,
                    'rankId' => htmlspecialchars($_POST['current_rank']),
                    'rankEffectiveDate' => htmlspecialchars($_POST['rankEffectiveDate'])
                ];
                $gradeTbl = '_tbl_officer_level';
                $gradelevelData = [
                    'LevelOfficerId' => $formNumber,
                    'levelId' => htmlspecialchars($_POST['grade_level']),
                    'levelEffectiveDate' => htmlspecialchars($_POST['gradeEffectiveDate'])
                ];

                $dutyTbl = '_tbl_officer_dutyPost';
                $dutypostData = [
                    'dutyOfficerId' => $formNumber,
                    'dutyPostId' => htmlspecialchars($_POST['duty_post']),
                    'dutyEffectiveDate' => htmlspecialchars($_POST['dutyPostEffectiveDate']),
                ];

                $stationTbl = '_tbl_officer_station';
                $stationData = [
                    'stationOficerId' => $formNumber,
                    'stationBaseCode' => htmlspecialchars($_POST['DivCommandCode']),
                    'stationEffectiveDate' => htmlspecialchars($_POST['stationPostEffectiveDate']),
                ];

                if (
                    $model->insert_data($tblName, $commandData) == true
                    && $model->insert_data($rankTbl, $rankData) == true
                    && $model->insert_data($gradeTbl, $gradelevelData) == true
                    && $model->insert_data($dutyTbl, $dutypostData) == true
                    && $model->insert_data($stationTbl, $stationData) == true
                ) {

                    $user->recordLog($_SESSION['active'], 'New Officer Enrolled', 'A new officer has been added with Enrolment Form number ' . $formNumber . '. Enrolment was been done by : ' . $_SESSION['active']);
                    $utility->notifier('success', 'The data of ' . $_POST['firstname'] . " " . $_POST['othername'] . " " . $_POST['surname'] . ' has been enrolled');
                    $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_£nrolment_module'));
                } else {
                    $utility->notifier('danger', 'We are unable to create a new officer profile using the parameters provided');
                    $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_£nrolment_module'));
                }
            } else {
                $utility->notifier('danger', $result);
                $model->redirect('./router.php?pageid=' .$utility->inputEncode('npf_£nrolment_module'));
            }


        } else {
            $utility->notifier('danger', 'A Nigerian Police Force officer exist with the IPPIS / Tax / Force Number');
            $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_£nrolment_module'));
        }
    } else {
        $utility->notifier('danger', 'invalid Form response');
        $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_£nrolment_module'));
    }
} else {
    $utility->notifier('danger', 'Security Breach');
    $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_£nrolment_module'));
}
?>