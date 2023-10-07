<?php
include 'query.php';


//Dashboard Navigator
if (isset($_GET['pageid']) && $utility->inputDecode($_GET['pageid']) == 'npf_portal_dashboard') {
    $_SESSION['pageid'] = 'npf_portal_dashboard';
    $_SESSION['page_name'] = 'Dashboard';
    $_SESSION['module'] = 'Dashboard';
    $model->redirect('../view/pages/viewer.php?pageid='.$_GET['pageid']);
}
//NPF Station Module
if (isset($_GET['pageid']) && $utility->inputDecode($_GET['pageid']) == 'npf_state_hqtrs_manager') {
    $_SESSION['pageid'] = 'npf_state_hqtrs_manager';
    $_SESSION['page_name'] = 'State Headquarters Manager';
    $_SESSION['module'] = 'NPF Station Manager';
    $model->redirect('../view/pages/viewer.php?pageid='.$_GET['pageid']);
}
if (isset($_GET['pageid']) && $utility->inputDecode($_GET['pageid']) == 'modifyStateCommand') {
    $_SESSION['pageid'] = 'modifyStateCommand';
    $_SESSION['stateCommandCode'] = $_GET['variable'];
    $_SESSION['page_name'] = 'State Headquarters Manager';
    $_SESSION['module'] = 'NPF Station Manager';
    $model->redirect('../view/pages/viewer.php?pageid='.$_GET['pageid']);
}
//Area Command
if (isset($_GET['pageid']) && $utility->inputDecode($_GET['pageid']) == 'npf_area_command_manager') {
    $_SESSION['pageid'] = 'npf_area_command_manager';
    $_SESSION['page_name'] = 'Area Commands Manager';
    $_SESSION['module'] = 'NPF Station Manager';
    $model->redirect('../view/pages/viewer.php?pageid='.$_GET['pageid']);
}

if (isset($_GET['pageid']) && $utility->inputDecode($_GET['pageid']) == 'modifyAreaCommand') {
    $_SESSION['pageid'] = 'modifyAreaCommand';
    $_SESSION['AreaCommandCode'] = $_GET['variable'];
    $_SESSION['page_name'] = 'Area Command Manager';
    $_SESSION['module'] = 'NPF Station Manager';
    $model->redirect('../view/pages/viewer.php?pageid='.$_GET['pageid']);
}


// Divisional Command
if (isset($_GET['pageid']) && $utility->inputDecode($_GET['pageid']) == 'npf_division_command_manager') {
    $_SESSION['pageid'] = 'npf_division_command_manager';
    $_SESSION['page_name'] = 'Divisional Police Headquarters Manager';
    $_SESSION['module'] = 'NPF Station Manager';
    $model->redirect('../view/pages/viewer.php?pageid='.$_GET['pageid']);
}
if (isset($_GET['pageid']) && $utility->inputDecode($_GET['pageid']) == 'modifyDivCommand') {
    $_SESSION['pageid'] = 'modifyDivCommand';
    $_SESSION['DivCommandCode'] = $_GET['variable'];
    $_SESSION['page_name'] = 'Divisional Police Headquarters Manager';
    $_SESSION['module'] = 'NPF Station Manager';
    $model->redirect('../view/pages/viewer.php?pageid='.$_GET['pageid']);
}


//NPF Enrolment Module
if (isset($_GET['pageid']) && $utility->inputDecode($_GET['pageid']) == 'npf_£nrolment_module') {
    $_SESSION['pageid'] = 'npf_£nrolment_module';
    $_SESSION['page_name'] = 'New Enrolment ';
    $_SESSION['module'] = 'NPF Enrolment Manager';
    $model->redirect('../view/pages/viewer.php?pageid='.$_GET['pageid']);
}
if (isset($_GET['pageid']) && $utility->inputDecode($_GET['pageid']) == 'npf_£nrolment_list') {
    $_SESSION['pageid'] = 'npf_£nrolment_list';
    $_SESSION['page_name'] = 'New Enrolment ';
    $_SESSION['module'] = 'NPF Enrolment Manager';
    $model->redirect('../view/pages/viewer.php?pageid='.$_GET['pageid']);
}

if (isset($_GET['pageid']) && $utility->inputDecode($_GET['pageid']) == 'modifyEnrolledData') {
    $_SESSION['pageid'] = 'modifyEnrolledData';
    $_SESSION['enrolmentReference'] = $_GET['enrolmentReference'];
    $_SESSION['page_name'] = 'Modify Enrolment ';
    $_SESSION['module'] = 'NPF Enrolment Manager';
    $model->redirect('../view/pages/viewer.php?pageid='.$_GET['pageid']);
}
if (isset($_GET['pageid']) && $utility->inputDecode($_GET['pageid']) == 'viewIDcard') {
    $_SESSION['pageid'] = 'viewIDcard';
    $_SESSION['enrolmentReference'] = $_GET['enrolmentReference'];
    $_SESSION['page_name'] = 'Identification Card ';
    $_SESSION['module'] = 'NPF Enrolment Manager';
    $model->redirect('../view/pages/viewer.php?pageid='.$_GET['pageid']);
}

//NPF Configuration Module

//Duty Post COnfig
if (isset($_GET['pageid']) && base64_decode(hex2bin($_GET['pageid'])) == 'dutyPost_manager') {
    $_SESSION['pageid'] = 'dutyPost_manager';
    $_SESSION['page_name'] = 'Duty Post Configuration';
    $_SESSION['module'] = 'NPF COnfiguration Manager';
    $model->redirect('../view/pages/viewer.php?pageid='.$_GET['pageid']);
}

?>