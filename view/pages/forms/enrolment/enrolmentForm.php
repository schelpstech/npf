<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title"></h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="bs-stepper">
                    <div class="bs-stepper-header" role="tablist">
                        <div class="step" data-target="#passport-part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="passport-part" id="passport-part-trigger">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label">Passport Capture</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#biodata-part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="biodata-part" id="biodata-part-trigger">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">Bio-data</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#contact-part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="contact-part" id="contact-part-trigger">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label">Contact Details</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#church-part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="church-part" id="church-part-trigger">
                                <span class="bs-stepper-circle">4</span>
                                <span class="bs-stepper-label">Employment Data</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#preview-part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="preview-part" id="preview-part-trigger">
                                <span class="bs-stepper-circle">5</span>
                                <span class="bs-stepper-label">Preview Form</span>
                            </button>
                        </div>
                    </div>
                    <form action="../../app/enrolmentModule.php" method="post" enctype='multipart/form-data'>
                        <div class="bs-stepper-content">

                            <div id="passport-part" class="content" role="tabpanel" aria-labelledby="passport-part-trigger">
                                <div class="row">
                                    <div class="col-md-12" style="align-items: centre;">
                                        <p><img id="output" width="200" /></p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Passport:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="file" class="form-control" id="file" name="passport" required="yes" tabindex="0" required="yes" onchange="loadFile(event)" max-size="1000" accept="image/png, image/jpg, image/jpeg" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-camera"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" style="float: right;" hidden class="btn btn-lg  btn-warning" onclick="stepper.next()" id="next_biodata_button"><strong>Next :: Biodata Information </strong></button>
                            </div>
                            <div id="biodata-part" class="content" role="tabpanel" aria-labelledby="biodata-part-trigger">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Surname:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="text" class="form-control" id="surname" name="surname" required="yes" tabindex="1" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-users"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> First Name:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="text" class="form-control" id="firstname" name="firstname" required="yes" tabindex="2" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-user-circle"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Other Name:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="text" class="form-control" id="othername" name="othername" required="yes" tabindex="3" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-user-plus"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Gender:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" class="form-control" id="gender" name="gender" required="yes" tabindex="4">
                                                    <option value="">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fas fa-restroom"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Date of Birth:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="date" class="form-control" id="dateofbirth" name="dateofbirth" required="yes" tabindex="5" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Marital Status:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" class="form-control" id="marital_status" name="marital_status" required="yes" tabindex="6">
                                                    <option value="">Select Marital Status</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Widow">Widow</option>
                                                    <option value="Widower">Widower</option>
                                                    <option value="Separated">Separated</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-handshake"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Language Preferences:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" name="language[]" id="language" required="yes" class="select2" multiple="multiple" style="width: 100%;" tabindex="7">
                                                    <option value="">Select Language</option>
                                                    <?php
                                                    if (!empty($language_list)) {
                                                        foreach ($language_list as $data) {
                                                            ?>
                                                                                    <option value="<?php echo $data['language'] ?>"><?php echo $data['language'] ?></option>
                                                                            <?php
                                                        }
                                                    } else {
                                                        echo '<option>select language</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Geo Political Zone - Origin:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" class="form-control" id="geo_region" name="geo_region" required="yes" onchange="fetch_state_by_region();" tabindex="8">
                                                    <option value="">select zone</option>
                                                    <?php
                                                    if (!empty($country_region_list)) {
                                                        foreach ($country_region_list as $data) {
                                                            ?>
                                                                                    <option value="<?php echo $data['region_id'] ?>"><?php echo $data['region'] ?></option>
                                                                            <?php
                                                        }
                                                    } else {
                                                        echo '<option>select Geo-political Region</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-map-marker-alt"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group" id="select-state_of_origin">
                                            <label><small><strong> Select State of Origin :</strong></small></label>
                                            <div class="input-group date">
                                                <select type="text" class="form-control" id="state_by_region" name="state_by_region" tabindex="9">
                                                    <option value="">select state</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fas fa-route"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <button style="float: left;" class="btn btn-warning btn-lg" onclick="stepper.previous()"><strong> Previous </strong></button>
                                <a style="float: right;" class="btn btn-app btn-warning" onclick="validate_biodata()" id="validator_button"><i class="far fa-question-circle"></i> Validate</a>
                                <button type="button" style="float: right;" class="btn btn-lg  btn-warning" hidden onclick="stepper.next()" id="next_button"><strong>Next :: Contact Information </strong></button>
                            </div>
                            <div id="contact-part" class="content" role="tabpanel" aria-labelledby="contact-part-trigger">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Phone number:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="tel" class="form-control" id="phonenumber" name="phonenumber" required="yes" tabindex="10" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-mobile"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Alternate Phonenumber:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="tel" class="form-control" id="alt_phonenumber" name="alt_phonenumber" tabindex="11" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-phone"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Email Address:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="email" class="form-control" id="emailaddress" name="emailaddress" tabindex="12" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong> Nearest Bus Stop:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="text" class="form-control" id="nearest_busstop" name="nearest_busstop" required="yes" tabindex="13" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-bus-alt"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><small><strong> Address:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="text" class="form-control" id="full_address" name="full_address" required="yes" tabindex="14" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-compass"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong> Town / Area</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="text" class="form-control" id="town" name="town" tabindex="15" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-map-marked"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Country of Residence:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" class="form-control" id="residence_country" name="residence_country" required="yes" tabindex="16">
                                                    <option value="">select country</option>
                                                    <?php
                                                    if (!empty($country_list)) {
                                                        foreach ($country_list as $data) {
                                                            ?>
                                                                                    <option value="<?php echo $data['country'] ?>"><?php echo $data['country'] ?></option>
                                                                            <?php
                                                        }
                                                    } else {
                                                        echo '<option>select country</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-map-marker-alt"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group" id="select-residence_state">
                                            <label><small><strong> Select State of Residence :</strong></small></label>
                                            <div class="input-group date">
                                                <select type="text" class="form-control" id="selected_state" onchange="fetch__lga()" tabindex="17">
                                                    <option value="">select state</option>
                                                    <?php
                                                    if (!empty($all_states_in_Nigeria)) {
                                                        foreach ($all_states_in_Nigeria as $data) {
                                                            ?>
                                                                                    <option value="<?php echo $data['state_id'] ?>"><?php echo $data['state'] ?></option>
                                                                            <?php
                                                        }
                                                    } else {
                                                        echo '<option>select state</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fas fa-route"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group" id="select-residence_lga">
                                            <label>Select LGA of Residence :</label>
                                            <div class="input-group date">
                                                <select type="text" class="form-control" name="lga_options"  id="lga_options" tabindex="18">
                                                    <option value="">Select</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fas fa-thumbtack"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br><br>

                                <button style="float: left;" class="btn btn-warning btn-lg" onclick="stepper.previous()"><strong>Previous</strong></button>
                                <a style="float: right;" class="btn btn-app btn-warning" onclick="validate_contact()" id="validator_contact_button"><i class="far fa-question-circle"></i> Validate</a>
                                <button type="button" style="float: right;" class="btn btn-lg  btn-warning" hidden onclick="stepper.next()" id="next_contact_button"><strong>Next :: Employment Data </strong></button>
                            </div>
                            <div id="church-part" class="content" role="tabpanel" aria-labelledby="church-part-trigger">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong> Date of First Appointment:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="date" class="form-control" id="year_joined" name="dateAppointed" required="yes" tabindex="19">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong> Force / AP Number</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="text" class="form-control" id="npf_file_number" name="npf_file_number" tabindex="20" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-map-marked"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong> Tax Identification Number</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="text" class="form-control" id="tax_number" name="tax_number" tabindex="21" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-map-marked"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong> IPPIS Number</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="text" class="form-control" id="ippis_number" name="ippis_number" required="yes" tabindex="22">
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-chalkboard-teacher"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong>Current Rank:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" class="form-control" id="current_rank" name="current_rank" required="yes" tabindex="23">
                                                    <option value="">Select Current Rank</option>
                                                    <?php
                                                    if (!empty($police_rank_list)) {
                                                        foreach ($police_rank_list as $data) {
                                                            ?>
                                                                                    <option value="<?php echo $data['rank_id'] ?>"><?php echo $data['rank_prefix'] . " - " . $data['rank_def'] ?></option>
                                                                            <?php
                                                        }
                                                    } else {
                                                        echo '<option>select state</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-compass"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong> Rank Effective Date</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="date" class="form-control" id="rankEffectiveDate" name="rankEffectiveDate" required="yes" tabindex="24">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong> Current Grade Level</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" class="form-control" id="grade_level" name="grade_level" tabindex="25" onchange="fetch_sow()">
                                                    <option value="">Select Grade Level</option>
                                                    <?php
                                                    if (!empty($sys_level_list)) {
                                                        foreach ($sys_level_list as $data) {
                                                            ?>
                                                                                    <option value="<?php echo $data['level_id'] ?>"><?php echo $data['level'] ?></option>
                                                                            <?php
                                                        }
                                                    } else {
                                                        echo '<option>No Grade to Select</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-map-marked"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong> Rank Effective Date</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="date" class="form-control" id="gradeEffectiveDate" name="gradeEffectiveDate" required="yes" tabindex="26">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong>Select State Command:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" class="form-control" id="stateCommandSelector" required="yes" tabindex="27" onchange="fetch_area_command();">
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
                                                        echo '<option>No State Command</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fas fa-synagogue"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong>Current Area Command:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" class="form-control" id="areaCommandSelector" name="areaCommandCode" required="yes" tabindex="28" onchange="fetch_Div_command();">
                                                    <option value="">Select</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fas fa-tools"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong>Current Divisional Police Station:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" class="form-control" id="DivCommandSelector" name="DivCommandCode" required="yes" tabindex="29">
                                                    <option value="">Select</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fas fa-tools"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong> Station Placement  Effective Date</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="date" class="form-control" id="stationPostEffectiveDate" name="stationPostEffectiveDate" required="yes" tabindex="30">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong>Current Duty Post:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" class="form-control" id="duty_post" name="duty_post" required="yes" tabindex="31">
                                                    <option value="">Select Status</option>
                                                    <?php
                                                    if (!empty($sys_duty_post_list)) {
                                                        foreach ($sys_duty_post_list as $data) {
                                                            ?>
                                                                                    <option value="<?php echo $data['duty_id'] ?>"><?php echo $data['duty_prefix'] . " - " . $data['duty_def'] ?></option>
                                                                            <?php
                                                        }
                                                    } else {
                                                        echo '<option>No Duty Post</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fas fa-tools"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong> Duty Post Effective Date</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="date" class="form-control" id="dutyPostEffectiveDate" name="dutyPostEffectiveDate" required="yes" tabindex="32">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><small><strong> Select Educational Qualification::</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" name="qualification[]" id="qualification" required="yes" class="select2" multiple="multiple" style="width: 100%;" tabindex="33">
                                                    <option value="">Select Qualification</option>
                                                    <?php
                                                    if (!empty($sys_qualification_list)) {
                                                        foreach ($sys_qualification_list as $data) {
                                                            ?>
                                                                                    <option value="<?php echo $data['qualification_id'] ?>"><?php echo $data['qualification'] ?></option>
                                                                            <?php
                                                        }
                                                    } else {
                                                        echo '<option>No Qualification to Select</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <button style="float: left;" class="btn btn-warning btn-lg" onclick="stepper.previous()"><strong> Previous </strong></button>
                                <a style="float: right;" class="btn btn-app btn-warning" onclick="validate_church()" id="validator_church_button"><i class="far fa-question-circle"></i> Validate</a>
                                <button type="button" style="float: right;" class="btn btn-lg  btn-info" hidden onclick="stepper.next()" id="next_preview_button"><strong>Next :: Preview Form </strong></button>
                            </div>

                            <div id="preview-part" class="content" role="tabpanel" aria-labelledby="preview-part-trigger">
                                <div class="row">
                                    <div class="col-md-12" style="align-items: centre;">
                                        <p><img id="passport" width="100" /></p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_surname" class="col-sm-4 col-form-label"><small>Surname</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_surname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_firstname" class="col-sm-4 col-form-label"><small>Firstname</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_firstname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_othername" class="col-sm-4 col-form-label"><small>Othername</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_othername">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_gender" class="col-sm-4 col-form-label"><small>Gender</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_gender">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_dob" class="col-sm-4 col-form-label"><small>Date of Birth</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_dob">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_marital" class="col-sm-4 col-form-label"><small>Marital Status</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_marital">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group row">
                                            <label for="preview_language" class="col-sm-3 col-form-label"><small>Language</small></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" disabled id="preview_language">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <label for="preview_nation" class="col-sm-4 col-form-label"><small>Geo-political Region</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_geo_region">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_origin" class="col-sm-4 col-form-label"><small>State of Origin</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_state_by_region">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_phone" class="col-sm-4 col-form-label"><small>Phone number</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_alt_phone" class="col-sm-4 col-form-label"><small>Alt - Phone</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_alt_phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_email" class="col-sm-4 col-form-label"><small>Email Address</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label for="preview_address" class="col-sm-2 col-form-label"><small>Address</small></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" disabled id="preview_address">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_bstop" class="col-sm-4 col-form-label"><small>Nearest B/Stop</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_bstop">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_year_joined" class="col-sm-4 col-form-label"><small>Year Joined</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_year_joined">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_current_rank" class="col-sm-4 col-form-label"><small>Current Rank</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_current_rank">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_grade_level" class="col-sm-4 col-form-label"><small>Current Grade Level</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_grade_level">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_npf_file_number" class="col-sm-4 col-form-label"><small>NPF File Number</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_npf_file_number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_tax_number" class="col-sm-4 col-form-label"><small>Tax Number</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_tax_number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_ippis_number" class="col-sm-4 col-form-label"><small>IPPIS Number</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_ippis_number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_duty_post" class="col-sm-4 col-form-label"><small>Duty Post</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_duty_post">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_DivCommandSelector" class="col-sm-4 col-form-label"><small>Divisional Police </small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_DivCommandSelector">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_qualification" class="col-sm-4 col-form-label"><small>Academic Qualifications</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_qualification">
                                            </div>
                                        </div>
                                    </div>

                                    <button style="float: left;" class="btn btn-warning btn-lg" onclick="stepper.previous()"><strong> Previous </strong></button>

                                    <button style="float: right;" type="submit" name="submitEnrolmentForm" value="<?php echo $utility->inputEncode('create_new_officer_form'); ?>" style="float: right;" class="btn btn-lg  btn-success" onclick="stepper.next()" id="next_button"><strong>Submit Enrolment Form </strong></button>

                                </div>

                            </div>
                    </form>
                </div>
            </div>

            <div class="card-footer" style="text-align: center;">
                This form enrols officers into the database of the Lagos State Police Command
            </div>
        </div>

    </div>
</div>