<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="ol-lg-6 offset-3 col-sm-6 offset-3">
                <div class="card card-secondary card-outline">
                    
                    <div class="card-body box-profile">
                        <div class="row">
                            <div class="col-lg-2">
                                <img src="../../storage/app/npflogo.jpg" width="100" />
                            </div>
                            <div class="col-lg-10">
                                <span>
                                    <br>
                                    <h3 class="text-center">
                                        <strong>
                                            <?php echo $referencedEnrolledOfficer['command_name'] ?> Identity
                                            Verification
                                            Platform
                                        </strong>
                                    </h3>
                                </span>
                            </div>
                        </div>
                        <hr style="background-color: blue; height: 5px; margin: 0px 0;">
                    <hr style="background-color: yellow; height: 5px; margin: 0px 0; ">
                    <hr style="background-color: green; height: 5px;margin: 0px 0;">
                        <br>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text-center">
                                   <br> <img src="../../storage/passport/<?php echo $referencedEnrolledOfficer['passport'] ?> "
                                        width="300"
                                        alt="<?php echo $referencedEnrolledOfficer['lastname'] . " " . $referencedEnrolledOfficer['firstname']; ?>">
                                </div><br>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-center">
                                    <img src=" <?php
                                    echo $generator->generateQRCode('http://localhost/npf/app/router.php?pageid=' . $utility->inputEncode("validateIdentity") . '&enrolmentReference=' . $utility->inputEncode($referencedEnrolledOfficer['form_number']));
                                    ?>">
                                </div>
                            </div>
                        </div>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item" style="margin: 0px 0;">
                                <b>Ap_No/F_No:</b>
                                <a class="float-right" style="color: black;">
                                    <?php echo $referencedEnrolledOfficer['npf_file_number']; ?>
                                </a>
                            </li>
                            <li class="list-group-item" style="margin: 0px 0;">
                                <b>Rank:</b>
                                <a class="float-right" style="color: black;">
                                    <?php echo $referencedEnrolledOfficer['rank_prefix'] . " - " . $referencedEnrolledOfficer['rank_def']; ?>
                                </a>
                            </li>
                            <li class="list-group-item" style="margin: 0px 0;">
                                <b>Fullname</b>
                                <p class="float-right" style="color: black;">
                                    <?php echo $referencedEnrolledOfficer['lastname'] . " " . $referencedEnrolledOfficer['firstname'] . " " . $referencedEnrolledOfficer['othername'] ?? ""; ?>
</p>
                            </li>
                            <li class="list-group-item" style="margin: 0px 0;">
                                <b>Gender</b>
                                <a class="float-right" style="color: black;">
                                    <?php echo $referencedEnrolledOfficer['gender']; ?>
                                </a>
                            </li>
                            <li class="list-group-item" style="margin: 0px 0;">
                                <b>Date of Birth</b>
                                <a class="float-right" style="color: black;">
                                    <?php echo $referencedEnrolledOfficer['dateofbirth']; ?>
                                </a>
                            </li>
                            <li class="list-group-item" style="margin: 0px 0;">
                                <b>Duty Post</b>
                                <a class="float-right" style="color: black;">
                                    <?php echo $referencedEnrolledOfficer['duty_prefix'] . " - " . $referencedEnrolledOfficer['duty_def'];
                                    ; ?>
                                </a>
                            </li>
                            <li class="list-group-item" style="margin: 0px 0;">
                                <b>Division</b>
                                <a class="float-right" style="color: black;">
                                    <?php echo $referencedEnrolledOfficer['division_command_code'] . " - " . $referencedEnrolledOfficer['division_command_name'] ?>
                                </a>
                            </li>
                            <li class="list-group-item" style="margin: 0px 0;">
                                <b>Area Command</b>
                                <a class="float-right" style="color: black;">
                                    <?php echo $referencedEnrolledOfficer['area_command_code'] . " - " . $referencedEnrolledOfficer['area_command_name'] ?>
                                </a>
                            </li>
                            <li class="list-group-item" style="margin: 0px 0;">
                                <b>ID Crad Status</b>
                                <a class="float-right" style="color: black;">
                                    <?php echo $referencedEnrolledOfficer['area_command_code'] . " - " . $referencedEnrolledOfficer['area_command_name'] ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>