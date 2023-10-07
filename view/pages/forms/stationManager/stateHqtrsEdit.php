<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title"><strong> State Command Headquarters Creation Form </strong></h3>
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
                                <label>State Headquarters Base Code :</label>
                                <div class="input-group date" id="commandcode" data-target-input="nearest">
                                    <input type="text" disabled class="form-control" value="<?php if (!empty($stateCommandDetails['command_code'])) {
                                                                                                echo $stateCommandDetails['command_code'];
                                                                                            } else {
                                                                                                echo "";
                                                                                            } ?>" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-synagogue"></i></div>
                                    </div>
                                </div>
                                <div class="input-group date" id="commandcode" data-target-input="nearest">
                                    <input type="text" hidden class="form-control" name="commandcode" required="yes" value="<?php if (!empty($stateCommandDetails['command_code'])) {
                                                                                                                                echo $stateCommandDetails['command_code'];
                                                                                                                            } else {
                                                                                                                                echo "";
                                                                                                                            } ?>" />

                                </div>
                            </div>
                            <div class="form-group">
                                <label>State Headquarters Name :</label>
                                <div class="input-group date" id="commandAddress" data-target-input="nearest">
                                    <input type="text" class="form-control" name="commandname" required="yes" value="<?php if (!empty($stateCommandDetails['command_name'])) {
                                                                                                                            echo $stateCommandDetails['command_name'];
                                                                                                                        } else {
                                                                                                                            echo "";
                                                                                                                        } ?>" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-synagogue"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>State Headquarters Address - Full Address:</label>
                                <div class="input-group date" id="commandAddress" data-target-input="nearest">
                                    <input type="text" class="form-control" name="commandAddress" required="yes" value="<?php if (!empty($stateCommandDetails['command_addr'])) {
                                                                                                                            echo $stateCommandDetails['command_addr'];
                                                                                                                        } else {
                                                                                                                            echo "";
                                                                                                                        } ?>" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-map-signs"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>State Command Headquarters Address - State :</label>
                                <div class="input-group date" data-target-input="nearest">
                                    <select type="text" class="form-control" id="commandAddressState" name="commandAddressState" required="yes" onchange="switch_location();">
                                        <option value="<?php if (!empty($stateCommandDetails['command_state'])) {
                                                            echo $stateCommandDetails['command_state'];
                                                        } else {
                                                            echo "";
                                                        } ?>"><?php if (!empty($stateCommandDetails['state'])) {
                                                                    echo $stateCommandDetails['state'];
                                                                } else {
                                                                    echo "";
                                                                } ?></option>
                                        <option value="">select state</option>
                                        <?php
                                        if (!empty($all_states_in_Nigeria)) {
                                            foreach ($all_states_in_Nigeria as $data) {
                                        ?>
                                                <option value="<?php echo $data['state_id']; ?>">
                                                    <?php echo $data['state']; ?>
                                                </option>
                                        <?php
                                            }
                                        } else {
                                            echo '<option>Select State</option>';
                                        }
                                        ?>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-map-marker-alt"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Type in State and LGA-->



                            <div class="form-group">
                                <label>State Command Headquarters - Year Established:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="number" name="commandEstablished" class="form-control float-right" maxlength="4" minlength="4" min="1960" max="<?php echo date("Y"); ?>" required="yes" value="<?php if (!empty($stateCommandDetails['year_formed'])) {
                                                                                                                                                                                                                    echo $stateCommandDetails['year_formed'];
                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                    echo "";
                                                                                                                                                                                                                } ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <button type="submit" name="edit_command_details" value="<?php echo $utility->inputEncode("command_editor_form"); ?>" class="btn btn-info btn-block">Edit State Command Headquarters Details</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-footer">
                        This form is used to add Edit State Command Headquarters Details
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>