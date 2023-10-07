<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title"><strong> Area Command Creation Form </strong></h3>
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
                                <label>Select State Headquarters Command :</label>
                                <div class="input-group date" id="stateCommand" data-target-input="nearest">
                                    <select type="text" class="form-control" name="stateCommand" required="yes">
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
                                <label>Area Command Base Code :</label>
                                <div class="input-group date" id="commandcode" data-target-input="nearest">
                                    <input type="text" class="form-control" name="areaCommandCode" required="yes" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-synagogue"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Area Command Name :</label>
                                <div class="input-group date" id="commandAddress" data-target-input="nearest">
                                    <input type="text" class="form-control" name="AreaCommandName" required="yes" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-synagogue"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Area Command Address - Full Address:</label>
                                <div class="input-group date" id="commandAddress" data-target-input="nearest">
                                    <input type="text" class="form-control" name="AreaCommandAddress" required="yes" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-map-signs"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Select Local Government Area of Area Command :</label>
                                <div class="input-group date" id="LGACommand" data-target-input="nearest">
                                    <select type="text" class="form-control" name="LGACommand" required="yes">
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
                                <label>Area Command  - Year Established:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="number" name="AreaCommandEstablished"  maxlength="4" minlength="4" min="1960" max="<?php echo date("Y"); ?>" class="form-control float-right"
                                        required="yes">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <button type="submit" name="create_area_command"
                                        value="<?php echo $utility->inputEncode("area_command_creator_form"); ?>"
                                        class="btn btn-info btn-block">Create Area Command </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-footer">
                        This form is used to add new Area Command 
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
                        <h3 class="card-title"> <strong>NPF Area Commands as at today
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
                                    <th>State Command</th>
                                    <th>Area Command</th>
                                    <th>Area Command Name</th>
                                    <th>Address</th>
                                    <th>Year Established</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                if (!empty($AreaCommandList)) {
                                    foreach ($AreaCommandList as $data) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $count++; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['command_code'] . " - " . $data['state']; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['area_command_code'] . " - " . $data['lga']; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['area_command_name']; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['area_command_addr']; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['area_year_formed']; ?>
                                            </td>
                                            <td>
                                                <a href="../../app/router.php?pageid=<?php echo  $utility->inputEncode("modifyAreaCommand"); ?>&variable=<?php echo $utility->inputEncode($data['area_command_code']); ?>"
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