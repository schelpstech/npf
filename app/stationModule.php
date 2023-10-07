<?php
include './query.php';

//Check Module
if (isset($_SESSION['module']) && ($_SESSION['module']) == 'NPF Station Manager') {

    //Create State Command
    if (isset($_POST['create_command']) && $utility->inputDecode($_POST['create_command']) == "command_creator_form") {

        $tblName = 'tbl_command';

        //check if command data exist
        $conditions = [
            'where' => [
                'command_state' => htmlspecialchars($_POST['commandAddressState']),
            ],
            'return_type' => 'count',
        ];
        $ifExist = $model->getRows($tblName, $conditions);

        //check if command code exist
        $conditions = [
            'where' => [
                'command_code' => htmlspecialchars($_POST['commandcode']),
            ],
            'return_type' => 'count',
        ];
        $ifExisted = $model->getRows($tblName, $conditions);
        if ($ifExist == 0 && $ifExisted == 0) {
            $commandData = [
                'command_code' => htmlspecialchars($_POST['commandcode']),
                'command_name' => htmlspecialchars($_POST['commandname']),
                'command_addr' => htmlspecialchars($_POST['commandAddress']),
                'command_state' => htmlspecialchars($_POST['commandAddressState']),
                'year_formed' => htmlspecialchars($_POST['commandEstablished']),
            ];
            if ($model->insert_data($tblName, $commandData) == true) {
                $user->recordLog($_SESSION['active'], 'State Command Created', 'A new state command for state with reference number ' . $_POST['commandcode'] . ' has been created by : ' . $_SESSION['active']);
                $utility->notifier('success', 'A new Nigerian Police Force State Command has been created in the selected state');
                $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_state_hqtrs_manager'));
            } else {
                $utility->notifier('danger', 'We are unable to create a State Command using the parameters provided');
                $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_state_hqtrs_manager'));
            }
        } else {
            $utility->notifier('danger', 'A Nigerian Police Force State Command Headquarters exist in the selected state or with the Command Code');
            $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_state_hqtrs_manager'));
        }
    }
    //Edit State Command Details
    elseif (isset($_POST['edit_command_details']) && $utility->inputDecode($_POST['edit_command_details']) == "command_editor_form") {

        $tblName = 'tbl_command';

        //check if command data exist
        $conditions = [
            'where' => [
                'command_code' => htmlspecialchars($_POST['commandcode']),
            ],
            'return_type' => 'count',
        ];
        $ifExist = $model->getRows($tblName, $conditions);

        if ($ifExist == 0) {
            $utility->notifier('danger', 'No Nigerian Police Force State Command Headquarters exist with this state command');
            $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_state_hqtrs_manager'));
        } else {
            $commandData = [
                'command_name' => htmlspecialchars($_POST['commandname']),
                'command_addr' => htmlspecialchars($_POST['commandAddress']),
                'command_state' => htmlspecialchars($_POST['commandAddressState']),
                'year_formed' => htmlspecialchars($_POST['commandEstablished']),
            ];
            $condition = [
                'command_code' => htmlspecialchars($_POST['commandcode']),
            ];
            if ($model->upDate($tblName, $commandData, $condition) == true) {
                $user->recordLog($_SESSION['active'], 'State Command Details Edited', 'A state command  with reference number ' . $_POST['commandcode'] . ' has been edited by : ' . $_SESSION['active']);
                $utility->notifier('success', 'Selected State Command Headquarters Details has been edited');
                $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_state_hqtrs_manager'));
            } else {
                $utility->notifier('danger', 'We are unable to edit the details of the selected State Command headquarters using the parameters provided');
                $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_state_hqtrs_manager'));
            }
        }
    }
    //Create Area Command
    elseif (isset($_POST['create_area_command']) && $utility->inputDecode($_POST['create_area_command']) == "area_command_creator_form") {

        $tblName = 'tbl_area_command';

        //check if command data exist
        $conditions = [
            'where' => [
                'area_command_lga' => htmlspecialchars($_POST['LGACommand']),
            ],
            'return_type' => 'count',
        ];
        $ifExist = $model->getRows($tblName, $conditions);

        $condition = [
            'where' => [
                'area_command_code' => htmlspecialchars($_POST['areaCommandCode']),
            ],
            'return_type' => 'count',
        ];
        $ifExistcode = $model->getRows($tblName, $condition);

        if ($ifExist == 0 && $ifExistcode == 0) {
            $commandData = [
                'area_command_code' => htmlspecialchars($_POST['areaCommandCode']),
                'state_command' => htmlspecialchars($_POST['stateCommand']),
                'area_command_name' => htmlspecialchars($_POST['AreaCommandName']),
                'area_command_addr' => htmlspecialchars($_POST['AreaCommandAddress']),
                'area_command_lga' => htmlspecialchars($_POST['LGACommand']),
                'area_year_formed' => htmlspecialchars($_POST['AreaCommandEstablished']),
            ];
            if ($model->insert_data($tblName, $commandData) == true) {
                $user->recordLog($_SESSION['active'], 'Area Command Created', 'A new area command with reference number ' . $_POST['areaCommandCode'] . ' has been created by : ' . $_SESSION['active']);
                $utility->notifier('success', 'A new Nigerian Police Force Area Command has been created in the Local Government Area');
                $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_area_command_manager'));
            } else {
                $utility->notifier('danger', 'We are unable to create an Area Command using the parameters provided');
                $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_area_command_manager'));
            }
        } else {
            $utility->notifier('danger', 'A Nigerian Police Force Area Command exist in the selected LGA / The Area command code exist already');
            $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_area_command_manager'));
        }
    }
    //Edit Area Command Details
    elseif (isset($_POST['edit_area_command']) && $utility->inputDecode($_POST['edit_area_command']) == "area_command_editor_form") {

        $tblName = 'tbl_area_command';

        //check if command data exist
        $conditions = [
            'where' => [
                'area_command_lga' => htmlspecialchars($_POST['LGACommand']),
            ],
            'return_type' => 'count',
        ];
        $ifExist = $model->getRows($tblName, $conditions);

        $condition = [
            'where' => [
                'area_command_code' => htmlspecialchars($_POST['areaCommandCode']),
            ],
            'return_type' => 'count',
        ];
        $ifExistcode = $model->getRows($tblName, $condition);

        if ($ifExist == 0 && $ifExistcode == 1) {
            $commandData = [
                'state_command' => htmlspecialchars($_POST['stateCommand']),
                'area_command_name' => htmlspecialchars($_POST['AreaCommandName']),
                'area_command_addr' => htmlspecialchars($_POST['AreaCommandAddress']),
                'area_command_lga' => htmlspecialchars($_POST['LGACommand']),
                'area_year_formed' => htmlspecialchars($_POST['AreaCommandEstablished']),
            ];
            $condition = [
                'area_command_code' => htmlspecialchars($_POST['areaCommandCode']),
            ];
            if ($model->upDate($tblName, $commandData, $condition) == true) {
                $user->recordLog($_SESSION['active'], 'Area Command Details Edited', 'An Area command  with reference number ' . $_POST['areaCommandCode'] . ' has been edited by : ' . $_SESSION['active']);
                $utility->notifier('success', 'Selected Area Command Details has been edited successfully');
                $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_area_command_manager'));
            } else {
                $utility->notifier('danger', 'We are unable to edit the details of the selected Area Command using the parameters provided');
                $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_area_command_manager'));
            }
        } else {
            $utility->notifier('danger', 'No Nigerian Police Force Area Command Headquarters exist with this command code / Another Command exist in the new selected LGA');
            $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_area_command_manager'));
        }
    }

    //Create Divisional Police Headquarters

     elseif (isset($_POST['create_divisional_command']) && $utility->inputDecode($_POST['create_divisional_command']) == "divisional_command_creator_form") {

        $tblName = 'tbl_divisional_command';

        //check if command data exist

        $condition = [
            'where' => [
                'division_command_code' => htmlspecialchars($_POST['DivCommandCode']),
            ],
            'return_type' => 'count',
        ];
        $ifExistcode = $model->getRows($tblName, $condition);

        if ($ifExistcode == 0) {
            $commandData = [
                'division_command_code' => htmlspecialchars($_POST['DivCommandCode']),
                'division_command_name' => htmlspecialchars($_POST['DivCommandName']),
                'division_command_addr' => htmlspecialchars($_POST['DivCommandAddress']),
                'area_command' => htmlspecialchars($_POST['areaCommandCode']),
                'division_year_formed' => htmlspecialchars($_POST['DivCommandEstablished']),
            ];
            if ($model->insert_data($tblName, $commandData) == true) {
                $user->recordLog($_SESSION['active'], 'Divisional Police Headquarters Created', 'A new Divisional Police Headquarters with reference number ' . $_POST['areaCommandCode'] . ' has been created by : ' . $_SESSION['active']);
                $utility->notifier('success', 'A new Nigerian Police Force Divisional Police Headquarters has been created in the Local Government Area');
                $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_division_command_manager'));
            } else {
                $utility->notifier('danger', 'We are unable to create a Divisional Police Headquarters  using the parameters provided');
                $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_division_command_manager'));
            }
        } else {
            $utility->notifier('danger', 'A Nigerian Police Force Divisional Police Headquarters exist in the selected LGA / The Divisional Police Headquarters Base code exist already');
            $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_division_command_manager'));
        }
    }

    //Edit
    //Edit Area Command Details
    elseif (isset($_POST['edit_divisional_command']) && $utility->inputDecode($_POST['edit_divisional_command']) == "divisional_command_edittor_form") {

        $tblName = 'tbl_divisional_command';

        //check if command data exist
        $conditions = [
            'where' => [
                'division_command_code' => htmlspecialchars($_POST['DivCommandCode']),
            ],
            'return_type' => 'count',
        ];
        $ifExist = $model->getRows($tblName, $conditions);

        if ($ifExist == 1) {
            $commandData = [
                'division_command_name' => htmlspecialchars($_POST['DivCommandName']),
                'division_command_addr' => htmlspecialchars($_POST['DivCommandAddress']),
                'area_command' => htmlspecialchars($_POST['areaCommandCode']),
                'division_year_formed' => htmlspecialchars($_POST['DivCommandEstablished']),
            ];
            $condition = [
                'division_command_code' => htmlspecialchars($_POST['DivCommandCode']),
            ];
            if ($model->upDate($tblName, $commandData, $condition) == true) {
                $user->recordLog($_SESSION['active'], 'Divisional Police Headquarters Details Edited', 'A Divisional Police Headquarters with reference number ' . $_POST['DivCommandCode'] . ' has been edited by : ' . $_SESSION['active']);
                $utility->notifier('success', 'Selected Divisional Police Headquarters Details has been edited successfully');
                $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_division_command_manager'));
            } else {
                $utility->notifier('danger', 'We are unable to edit the details of the selected Divisional Police Headquarters using the parameters provided');
                $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_division_command_manager'));
            }
        } else {
            $utility->notifier('danger', 'No Nigerian Police Force Area Command Headquarters exist with this command code ');
            $model->redirect('./router.php?pageid=' . $utility->inputEncode('npf_division_command_manager'));
        }
    }

} else {
    $utility->notifier('dark', 'Sorry we can not understand your request');
    $model->redirect('./router.php?pageid=' . $utility->inputEncode('school_dashboard'));
}
