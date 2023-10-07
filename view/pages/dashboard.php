<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?php echo $count_state_command; ?></h3>
                <p>State Commands</p>
            </div>
            <div class="icon">
                <i class="fa fa-synagogue"></i>
            </div>
            <a href="../../app/router.php?pageid=<?php echo $utility->inputEncode('npf_state_hqtrs_manager'); ?>" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3><?php echo $count_area_command; ?></h3>
                <p>Area Commands</p>
            </div>
            <div class="icon">
                <i class="far fa-id-card"></i>
            </div>
            <a href="../../app/router.php?pageid=<?php echo $utility->inputEncode('npf_area_command_manager'); ?>" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?php echo intval($count_division); ?></h3>
                <p>Divisional Headquarters</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-check"></i>
            </div>
            <a href="../../app/router.php?pageid=<?php echo $utility->inputEncode('npf_division_command_manager'); ?>" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?php echo $count_enrolled; ?></h3>
                <p>Police Officers Enrolled</p>
            </div>
            <div class="icon">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <a href="../../app/router.php?pageid=<?php echo $utility->inputEncode('npf_£nrolment_module'); ?>" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
</div>