<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (file_exists('../../controller/start.inc.php')) {
    include '../../controller/start.inc.php';
} elseif (file_exists('../controller/start.inc.php')) {
    include '../controller/start.inc.php';
} else {
    include './controller/start.inc.php';
}
;

//Select All Country
$tblName = 'country_tbl';
$conditions = array(
    'order_by' => 'country ASC',
);
$country_list = $model->getRows($tblName, $conditions);

//Select All Geopolitical Zones
$tblName = 'tbl_region';
$conditions = array(
    'order_by' => 'region ASC',
);
$country_region_list = $model->getRows($tblName, $conditions);

//Select All States
$tblName = 'tbl_states';
$conditions = [
    'order_by' => 'state ASC',
];
$all_states_in_Nigeria = $model->getRows($tblName, $conditions);


//Select All LGA
$tblName = 'lga_tbl';
$conditions = [
    'joinl' => [
        'tbl_states' => ' on tbl_states.state_id = lga_tbl.state_id',
    ],
    'order_by' => 'state ASC',
];
$all_LGA_in_Nigeria = $model->getRows($tblName, $conditions);

//Select All Languages
$tblName = 'languages';
$conditions = [
    'order_by' => 'language ASC',
];
$language_list = $model->getRows($tblName, $conditions);

//Select All Police Ranks
$tblName = 'tbl_rank';
$conditions = [
    'order_by' => 'rank_id ASC',
];
$police_rank_list = $model->getRows($tblName, $conditions);


//Select All State Commands
$tblName = 'tbl_command';
$conditions = [
    'joinl' => [
        'tbl_states' => ' on tbl_states.state_id = tbl_command.command_state',
    ],
    'order_by' => 'tbl_command.command_code ASC',
];
$stateCommandList = $model->getRows($tblName, $conditions);

//Select referenced State Headquarter Command
if (isset($_SESSION['stateCommandCode'])) {

    $conditions = [
        'return_type' => 'single',
        'where' => [
            'command_code' => $utility->inputDecode($_SESSION['stateCommandCode']),
        ],
        'joinl' => [
            'tbl_states' => ' on tbl_states.state_id = tbl_command.command_state',
        ]
    ];
    $stateCommandDetails = $model->getRows($tblName, $conditions);
}


//Select All Area Commands
$tblName = 'tbl_area_command';
$conditions = [
    'joinl' => [
        'tbl_command' => ' on tbl_command.command_id = tbl_area_command.state_command',
        'lga_tbl' => ' on tbl_area_command.area_command_lga = lga_tbl.lga_id',
        'tbl_states' => ' on tbl_states.state_id = lga_tbl.state_id',
    ],
    'order_by' => 'tbl_area_command.area_command_rectime ASC',
];
$AreaCommandList = $model->getRows($tblName, $conditions);

//Select referenced Area Command
if (isset($_SESSION['AreaCommandCode'])) {

    $conditions = [
        'return_type' => 'single',
        'where' => [
            'area_command_code' => $utility->inputDecode($_SESSION['areaCommandCode']),
        ],
        'joinl' => [
            'tbl_command' => ' on tbl_command.command_id = tbl_area_command.state_command',
            'lga_tbl' => ' on tbl_area_command.area_command_lga = lga_tbl.lga_id',
            'tbl_states' => ' on tbl_states.state_id = lga_tbl.state_id',
        ],
    ];
    $AreaCommandDetails = $model->getRows($tblName, $conditions);
}



//Select All Divisional Police Headquarters
$tblName = 'tbl_divisional_command';
$conditions = [
    'joinl' => [
        'tbl_area_command' => ' on tbl_divisional_command.area_command = tbl_area_command.area_command_id',
        'lga_tbl' => ' on tbl_area_command.area_command_lga = lga_tbl.lga_id',
    ],
    'order_by' => 'tbl_divisional_command.division_command_rectime ASC',
];
$DivisionalCommandList = $model->getRows($tblName, $conditions);

//Select referenced Divisional Police Headquarters
if (isset($_SESSION['DivCommandCode'])) {

    $conditions = [
        'return_type' => 'single',
        'where' => [
            'division_command_code' => $utility->inputDecode($_SESSION['DivCommandCode']),
        ],
        'joinl' => [
            'tbl_area_command' => ' on tbl_divisional_command.area_command = tbl_area_command.area_command_id',
            'lga_tbl' => ' on tbl_area_command.area_command_lga = lga_tbl.lga_id',
            'tbl_command' => ' on tbl_command.command_id = tbl_area_command.state_command',
        ],
    ];
    $DivCommandDetails = $model->getRows($tblName, $conditions);
}



//All Enrolled Officers

//Select All Enrolled 
$tblName = '_tbl_enrolmentRepository';
$conditions = [
    'joinl' => [
        '_tbl_officer_dutyPost' => ' on _tbl_enrolmentRepository.form_number = _tbl_officer_dutyPost.dutyOfficerId',
        '_tbl_officer_level' => ' on _tbl_enrolmentRepository.form_number = _tbl_officer_level.LevelOfficerId',
        '_tbl_officer_rankings' => ' on _tbl_enrolmentRepository.form_number = _tbl_officer_rankings.officerRankId',
        '_tbl_officer_station' => ' on _tbl_enrolmentRepository.form_number = _tbl_officer_station.stationOficerId',

        'tbl_duty_post' => ' on tbl_duty_post.duty_id = _tbl_officer_dutyPost.dutyPostId',
        'tbl_level' => ' on tbl_level.level_id = _tbl_officer_level.levelId',
        'tbl_rank' => ' on tbl_rank.rank_id = _tbl_officer_rankings.rankId',
        'tbl_divisional_command' => ' on tbl_divisional_command.division_command_id = _tbl_officer_station.stationBaseCode',

    ],
    'order_by' => '_tbl_enrolmentRepository.enrolmentRecordTime ASC',
];
$allEnrolledOfficers = $model->getRows($tblName, $conditions);

//Select Reference Enrolment  Record

if (!empty($_SESSION['enrolmentReference']) && isset($_SESSION['enrolmentReference'])) {
    $tblName = '_tbl_enrolmentRepository';
    $conditions = [
        'joinl' => [
            '_tbl_officer_dutyPost' => ' on _tbl_enrolmentRepository.form_number = _tbl_officer_dutyPost.dutyOfficerId',
            '_tbl_officer_level' => ' on _tbl_enrolmentRepository.form_number = _tbl_officer_level.LevelOfficerId',
            '_tbl_officer_rankings' => ' on _tbl_enrolmentRepository.form_number = _tbl_officer_rankings.officerRankId',
            '_tbl_officer_station' => ' on _tbl_enrolmentRepository.form_number = _tbl_officer_station.stationOficerId',

            'tbl_duty_post' => ' on tbl_duty_post.duty_id = _tbl_officer_dutyPost.dutyPostId',
            'tbl_level' => ' on tbl_level.level_id = _tbl_officer_level.levelId',
            'tbl_rank' => ' on tbl_rank.rank_id = _tbl_officer_rankings.rankId',
            'tbl_divisional_command' => ' on tbl_divisional_command.division_command_id = _tbl_officer_station.stationBaseCode',
            'tbl_area_command' => ' on tbl_divisional_command.area_command = tbl_area_command.area_command_id',
            'tbl_command' => ' on tbl_command.command_id = tbl_area_command.state_command',

        ],
        'order_by' => '_tbl_enrolmentRepository.enrolmentRecordTime ASC',
        'return_type' => 'single',
        'where' => [
            '_tbl_enrolmentRepository.form_number' => $utility->inputDecode($_SESSION['enrolmentReference']),
        ],
    ];
    $referencedEnrolledOfficer = $model->getRows($tblName, $conditions);
}


//Select All Grade Level
$tblName = 'tbl_level';
$conditions = array(
    'order_by' => 'level ASC',
);
$sys_level_list = $model->getRows($tblName, $conditions);

//Select All Duty Post
$tblName = 'tbl_duty_post';
$conditions = [
    'order_by' => 'duty_def ASC',
];
$sys_duty_post_list = $model->getRows($tblName, $conditions);

//Select All Duty Post
$tblName = 'qualification_tbl';
$conditions = [
    'order_by' => 'level ASC',
];
$sys_qualification_list = $model->getRows($tblName, $conditions);


//Select Referenced Member
if (isset($_SESSION['mem_reference'])) {
    $tblName = 'member_list';
    $conditions = array(
        'return_type' => 'single',
        'joinl' => array(
            'assembly_tbl' => ' on member_list.assemblyid = assembly_tbl.assembly_id',
            'occupation_tbl' => ' on member_list.occupation_id = occupation_tbl.occup_id',
            'sunday_school_tbl' => ' on member_list.classid = sunday_school_tbl.classid',
            'department' => ' on member_list.department_id = department.dept_id ',
            'title_records' => ' on member_list.form_number = title_records.reference_id',
            'title_tbl' => ' on title_tbl.titleid  = title_records.title_id',
        ),
        'where' => array(
            'form_number' => $_SESSION['mem_reference'],
        ),
    );
    $member_data = $model->getRows($tblName, $conditions);
}


//Dashboard Panel

if (isset($_SESSION['module']) && $_SESSION['module'] == 'Dashboard') {


    $tblName = 'tbl_command';
    $condition = array(
        'return_type' => 'count',
    );
    $count_state_command = $model->getRows($tblName, $condition);

    $tblName = 'tbl_area_command';
    $condition = array(
        'return_type' => 'count',
    );
    $count_area_command = $model->getRows($tblName, $condition);

    $tblName = 'tbl_divisional_command';
    $condition = array(
        'return_type' => 'count',
    );
    $count_division = $model->getRows($tblName, $condition);

    $tblName = '_tbl_enrolment_data';
    $condition = array(
        'return_type' => 'count',
    );
    $count_enrolled = $model->getRows($tblName, $condition);
}