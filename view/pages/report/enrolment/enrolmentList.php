<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> List of Members as at today
                            <?php echo date("d-m-Y") ?>
                        </h3>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Form Number</th>
                                    <th>Rank</th>
                                    <th>Surname</th>
                                    <th>Othernames</th>
                                    <th>Gender</th>
                                    <th>Duty Post</th>
                                    <th>Station</th>
                                    <th>Modify Data</th>
                                    <th>View ID</th>
                                    <th>Validation Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                if (!empty($allEnrolledOfficers)) {
                                    foreach ($allEnrolledOfficers as $data) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $count++; ?>
                                            </td>
                                            <td style="text-align: center;">

                                                <?php echo '<b>' . $data['form_number'] . '</b>'; ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?php echo $data['rank_prefix'] . " - " . $data['rank_def'] . "<hr>" . $data['level']; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['lastname']; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['firstname']. " " .$data['othername'] ?? "" ?>
                                            </td>
                                            <td>
                                                <?php echo $data['gender']; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['duty_prefix']." - ".$data['duty_def']; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['division_command_code']." - ".$data['division_command_name']; ?>
                                            </td>
                                            <td>
                                                <?php
                                                if (($data['validationStatus']) === 0) {
                                                    echo '
                                                        <a href="../../app/router.php?pageid=' . $utility->inputEncode("modifyEnrolledData") . '&enrolmentReference='. $utility->inputEncode($data['form_number']) . '" class="btn btn-app btn-outline-info btn-block">
                                                            <i class="fas fa-edit"></i> Modify </a>';
                                                } else {
                                                    echo '
                                                        <a href="#" class="btn btn-app btn-outline-danger btn-block">
                                                            <i class="fas fa-exclamation-circle"></i> Restricted  </a>';
                                                    echo '';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo '
                                                        <a href="../../app/router.php?pageid=' . $utility->inputEncode("viewIDcard") . '&enrolmentReference='. $utility->inputEncode($data['form_number']) . '" class="btn btn-app btn-outline-info btn-block">
                                                            <i class="fas fa-id-card"></i> View ID </a>';
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if (($data['validationStatus']) === 1) {
                                                    echo '
                                                        <a href="../../app/router.php?pageid=' . $utility->inputEncode("view_member") . '&enrolmentReference=' . $utility->inputEncode($data['form_number']) . '" class="btn btn-app btn-outline-success btn-block">
                                                            <i class="fas fa-id-card-alt"></i> Validated </a>';
                                                } else {
                                                    echo '
                                                        <a href="../../app/router.php?pageid=' . $utility->inputEncode("view_member") . '&enrolmentReference=' . $utility->inputEncode($data['form_number']) . '" class="btn btn-app btn-outline-secondary btn-block">
                                                            <i class="fas fa-exclamation-circle"></i> Pending  </a>';
                                                    echo '';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo 'No Officer Registered Yet';
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