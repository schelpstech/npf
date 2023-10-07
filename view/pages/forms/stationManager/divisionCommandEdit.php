<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title"><strong> Divisional Police Headquarters Details Modification Form </strong></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="../../app/stationModule.php" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Divisional Police Headquarters Base Code :</label>
                                <div class="input-group date" id="commandcode" data-target-input="nearest">
                                    <input type="text" hidden class="form-control" name="DivCommandCode" required="yes" value="<?php if (!empty($DivCommandDetails['division_command_code'])) {
                                                                                                                                    echo $DivCommandDetails['division_command_code'];
                                                                                                                                } else {
                                                                                                                                    echo "";
                                                                                                                                } ?>" />
                                    <input type="text" disabled class="form-control" required="yes" value="<?php if (!empty($DivCommandDetails['division_command_code'])) {
                                                                                                                echo $DivCommandDetails['division_command_code'];
                                                                                                            } else {
                                                                                                                echo "";
                                                                                                            } ?>" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-synagogue"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Edit State Headquarters Command :</label>
                                <div class="input-group date" id="stateCommand" data-target-input="nearest">
                                    <select type="text" class="form-control" id="stateCommandSelector" name="stateCommandCode" required="yes" onchange="fetch_area_command();">
                                        <option value="<?php if (!empty($DivCommandDetails['command_id'])) {
                                                            echo $DivCommandDetails['command_id'];
                                                        } else {
                                                            echo "";
                                                        } ?>"><?php if (!empty($DivCommandDetails['command_code'])) {
                                                                    echo $DivCommandDetails['command_code'] . " - " . $DivCommandDetails['command_name'];;
                                                                } else {
                                                                    echo "";
                                                                } ?></option>
                                        <option value="">select State Command</option>
                                        <?php
                                        if (!empty($stateCommandList)) {
                                            foreach ($stateCommandList as $data) {
                                        ?>
                                                <option value="<?php echo $data['command_id']; ?>">
                                                    <?php echo $data['command_code'] . " - " . $data['command_name']; ?>
                                                </option>
                                        <?php
                                            }
                                        } else {
                                            echo '<option>Select State Command</option>';
                                        }
                                        ?>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-synagogue"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Edit Area Command :</label>
                                <div class="input-group date" data-target-input="nearest">
                                    <select type="text" class="form-control" id="areaCommandSelector" name="areaCommandCode" required="yes">
                                        <option value="<?php if (!empty($DivCommandDetails['area_command_id'])) {
                                                            echo $DivCommandDetails['area_command_id'];
                                                        } else {
                                                            echo "";
                                                        } ?>"><?php if (!empty($DivCommandDetails['area_command_code'])) {
                                                                    echo $DivCommandDetails['area_command_code'] . " - " . $DivCommandDetails['lga'];;
                                                                } else {
                                                                    echo "";
                                                                } ?></option>
                                        <option value="">select Area Command</option>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-synagogue"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Divisional Police Headquarters Name :</label>
                                <div class="input-group date" id="commandAddress" data-target-input="nearest">
                                    <input type="text" class="form-control" name="DivCommandName" required="yes" value="<?php if (!empty($DivCommandDetails['division_command_name'])) {
                                                                                                                            echo $DivCommandDetails['division_command_name'];
                                                                                                                        } else {
                                                                                                                            echo "";
                                                                                                                        } ?>" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-synagogue"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Divisional Police Headquarters - Full Address:</label>
                                <div class="input-group date" id="commandAddress" data-target-input="nearest">
                                    <input type="text" class="form-control" name="DivCommandAddress" required="yes" value="<?php if (!empty($DivCommandDetails['division_command_addr'])) {
                                                                                                                                echo $DivCommandDetails['division_command_addr'];
                                                                                                                            } else {
                                                                                                                                echo "";
                                                                                                                            } ?>" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-map-signs"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Divisional Police Headquarters - Year Established:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="number" name="DivCommandEstablished" maxlength="4" minlength="4" min="1960" max="<?php echo date("Y"); ?>" class="form-control float-right" required="yes" value="<?php if (!empty($DivCommandDetails['division_year_formed'])) {
                                                                                                                                                                                                                        echo $DivCommandDetails['division_year_formed'];
                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                        echo "";
                                                                                                                                                                                                                    } ?>" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <button type="submit" name="edit_divisional_command" value="<?php echo $utility->inputEncode("divisional_command_edittor_form"); ?>" class="btn btn-info btn-block">Edit Divisional Police Headquarters </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-footer">
                        This form is used to edit information of Divisional Police Headquarters
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>