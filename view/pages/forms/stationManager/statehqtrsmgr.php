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
                                    <input type="text" class="form-control" name="commandcode" required="yes" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-synagogue"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>State Headquarters Name :</label>
                                <div class="input-group date" id="commandAddress" data-target-input="nearest">
                                    <input type="text" class="form-control" name="commandname" required="yes" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-synagogue"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>State Headquarters Address - Full Address:</label>
                                <div class="input-group date" id="commandAddress" data-target-input="nearest">
                                    <input type="text" class="form-control" name="commandAddress" required="yes" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-map-signs"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>State Command Headquarters Address - State :</label>
                                <div class="input-group date" data-target-input="nearest">
                                    <select type="text" class="form-control" id="commandAddressState"
                                        name="commandAddressState" required="yes" onchange="switch_location();">
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
                                    <input type="number" name="commandEstablished"  maxlength="4" minlength="4" min="1960" max="<?php echo date("Y"); ?>" class="form-control float-right"
                                        required="yes">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <button type="submit" name="create_command"
                                        value="<?php echo $utility->inputEncode("command_creator_form"); ?>"
                                        class="btn btn-info btn-block">Create State Command Headquarters</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-footer">
                        This form is used to add new State Command Headquarters
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> <strong>NPF State Commands as at today
                            <?php echo date("d-m-Y") ?></strong>
                        </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Command</th>
                                    <th>Command Name</th>
                                    <th>Address</th>
                                    <th>Year Established</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                if (!empty($stateCommandList)) {
                                    foreach ($stateCommandList as $data) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $count++; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['command_code'] . " - " . $data['state']; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['command_name']; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['command_addr']; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['year_formed']; ?>
                                            </td>
                                            <td>
                                                <a href="../../app/router.php?pageid=<?php echo  $utility->inputEncode("modifyStateCommand"); ?>&variable=<?php echo $utility->inputEncode($data['command_code']); ?>"
                                                    class="btn btn-app">
                                                    <i class="fas fa-edit"></i> Modify
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo 'No State Command Profiled Yet';
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>