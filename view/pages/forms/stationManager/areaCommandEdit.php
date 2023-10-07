<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title"><strong> Area Command Information Modification Form </strong></h3>
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
                                <label>Area Command Base Code :</label>
                                <div class="input-group date" id="commandcode" data-target-input="nearest">
                                    <input type="text" disabled class="form-control"  required="yes" value="<?php if (!empty($AreaCommandDetails['area_command_code'])) {
                                                                                                echo $AreaCommandDetails['area_command_code'];
                                                                                            } else {
                                                                                                echo "";
                                                                                            } ?>" />
                                    <input type="text" hidden class="form-control" name="areaCommandCode" required="yes" value="<?php if (!empty($AreaCommandDetails['area_command_code'])) {
                                                                                                echo $AreaCommandDetails['area_command_code'];
                                                                                            } else {
                                                                                                echo "";
                                                                                            } ?>"  />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-synagogue"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Edit State Headquarters Command :</label>
                                <div class="input-group date" id="stateCommand" data-target-input="nearest">
                                    <select type="text" class="form-control" name="stateCommand" required="yes">
                                    <option value="<?php if (!empty($AreaCommandDetails['command_id'])) {
                                                            echo $AreaCommandDetails['command_id'];
                                                        } else {
                                                            echo "";
                                                        } ?>"><?php if (!empty($AreaCommandDetails['command_code'])) {
                                                                    echo $AreaCommandDetails['command_code'] . " - " . $AreaCommandDetails['command_name'];;
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
                                <label>Edit Area Command Name :</label>
                                <div class="input-group date" id="commandAddress" data-target-input="nearest">
                                    <input type="text" class="form-control" name="AreaCommandName" required="yes" value="<?php if (!empty($AreaCommandDetails['area_command_name'])) {
                                                                                                echo $AreaCommandDetails['area_command_name'];
                                                                                            } else {
                                                                                                echo "";
                                                                                            } ?>"/>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-synagogue"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Edit Area Command Address - Full Address:</label>
                                <div class="input-group date" id="commandAddress" data-target-input="nearest">
                                    <input type="text" class="form-control" name="AreaCommandAddress" required="yes" value="<?php if (!empty($AreaCommandDetails['area_command_addr'])) {
                                                                                                echo $AreaCommandDetails['area_command_addr'];
                                                                                            } else {
                                                                                                echo "";
                                                                                            } ?>"/>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-map-signs"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Edit Local Government Area of Area Command :</label>
                                <div class="input-group date" id="LGACommand" data-target-input="nearest">
                                    <select type="text" class="form-control" name="LGACommand" required="yes">
                                    <option value="<?php if (!empty($AreaCommandDetails['lga_id'])) {
                                                            echo $AreaCommandDetails['lga_id'];
                                                        } else {
                                                            echo "";
                                                        } ?>"><?php if (!empty($AreaCommandDetails['state'])) {
                                                                    echo $AreaCommandDetails['state']. " - " . $AreaCommandDetails['lga'];
                                                                } else {
                                                                    echo "";
                                                                } ?></option>
                                        <option value="">select LGA</option>
                                        <?php
                                        if (!empty($all_LGA_in_Nigeria)) {
                                            foreach ($all_LGA_in_Nigeria as $data) {
                                                ?>
                                                <option value="<?php echo $data['lga_id']; ?>">
                                                    <?php echo $data['state'] . " - " . $data['lga']; ?>
                                                </option>
                                                <?php
                                            }
                                        } else {
                                            echo '<option>Select LGA</option>';
                                        }
                                        ?>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-synagogue"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Edit Area Command  - Year Established:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="number" name="AreaCommandEstablished"  maxlength="4" minlength="4" min="1960" max="<?php echo date("Y"); ?>" class="form-control float-right"
                                        required="yes" value="<?php if (!empty($AreaCommandDetails['area_year_formed'])) {
                                                                                                echo $AreaCommandDetails['area_year_formed'];
                                                                                            } else {
                                                                                                echo "";
                                                                                            } ?>"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <button type="submit" name="edit_area_command"
                                        value="<?php echo $utility->inputEncode("area_command_editor_form"); ?>"
                                        class="btn btn-info btn-block">Edit Area Command Information</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-footer">
                        This form is used to Edit Area Command Information 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
