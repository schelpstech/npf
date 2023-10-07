<?php
include 'query.php';

if (isset($_POST['selected_item']) && $_POST['action'] == 'fetch_state_by_region') {
    //All LGA in selected state
    $tblName = 'tbl_states';
    $conditions = [
        'where' => [
            'region_id' => $_POST['selected_item'],
        ],
        'order_by' => 'state ASC',
    ];
    $state_by_region_list = $model->getRows($tblName, $conditions);
?>
    <option value="">Select State in Selected Region</option>
    <?php
    if (!empty($state_by_region_list)) {
        foreach ($state_by_region_list as $data) {
    ?>

    <option value="<?php echo $data['state_id'] ?>"><?php echo $data['state'] ?></option>
<?php
        }
    } else {
        echo '<option value="">No State in selected Region</option>';
    }
}
if (isset($_POST['selected_item']) && $_POST['action'] == 'fetchlga') {
    //All LGA in selected state
    $tblName = 'lga_tbl';
    $conditions = [
        'where' => [
            'state_id' => $_POST['selected_item'],
        ],
        'order_by' => 'lga ASC',
    ];
    $lga_from_selected_list = $model->getRows($tblName, $conditions);
?>
    <option value="">Select LGA in Selected State</option>
    <?php
    if (!empty($lga_from_selected_list)) {
        foreach ($lga_from_selected_list as $data) {
    ?>

    <option value="<?php echo $data['lga_id'] ?>"><?php echo $data['lga'] ?></option>
<?php
        }
    } else {
        echo '<option value="">No LGA in Selected State</option>';
    }
}

if (isset($_POST['selected_item']) && $_POST['action'] == 'area_command_lookup') {
    //All Area Command in selected state Command
    $tblName = 'tbl_area_command';
    $conditions = [
        'where' => [
            'state_command' => $_POST['selected_item'],
        ],
        'joinl' => [
            'lga_tbl' => ' on tbl_area_command.area_command_lga = lga_tbl.lga_id',
        ]
    ];
    $area_commands_selected_list = $model->getRows($tblName, $conditions);
?>
    <option value="">Select Area Command within Selected State Command</option>
    <?php
    if (!empty($area_commands_selected_list)) {
        foreach ($area_commands_selected_list as $data) {
    ?>

    <option value="<?php echo $data['area_command_id'] ?>"><?php echo $data['area_command_code'] . " - " . $data['lga']; ?></option>
<?php
        }
    } else {
        echo '<option value="">No Area Command in Selected State Command</option>';
    }
}

if (isset($_POST['selected_item']) && $_POST['action'] == 'div_command_lookup') {
    //All Divisional Police Headquarters in selected Area Command
    $tblName = 'tbl_divisional_command';
    $conditions = [
        'where' => [
            'area_command' => $_POST['selected_item'],
        ]
    ];
    $Div_commands_selected_list = $model->getRows($tblName, $conditions);
?>
    <option value="">Select Divisional Police Headquarters within Selected Area Command</option>
    <?php
    if (!empty($Div_commands_selected_list)) {
        foreach ($Div_commands_selected_list as $data) {
    ?>

    <option value="<?php echo $data['division_command_id'] ?>"><?php echo $data['division_command_code'] . " - " . $data['division_command_name']; ?></option>
<?php
        }
    } else {
        echo '<option value="">No Divisional Police Headquarters within Selected Area Command</option>';
    }
}


?>