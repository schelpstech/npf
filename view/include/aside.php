<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="../../app/router.php?pageid=<?php echo base64_encode('npf_portal_dashboard');?>" class="brand-link">
        <img src="../../storage/app/npflogo.jpg" alt="Church Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">NPF</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../storage/app/npflogo.jpg" class="img-box elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION['active']; ?></a>
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item menu-open">
                    <a href="../../app/router.php?pageid=<?php echo $utility->inputEncode('npf_portal_dashboard');?>" class="nav-link">
                        <i class="nav-icon fas fa-stream"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-church"></i>
                        <p>
                            Station Manager
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php echo $utility->inputEncode('npf_state_hqtrs_manager');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage State hqtrs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php echo $utility->inputEncode('npf_area_command_manager');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Area Commands</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php echo $utility->inputEncode('npf_division_command_manager');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Divisional Police Headquarters</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-address-card"></i>
                        <p>
                            Enolment Module
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php echo $utility->inputEncode('npf_£nrolment_module');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fresh Enolment </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php echo $utility->inputEncode('npf_£nrolment_list');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Enrolled Officers</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sitemap"></i>
                        <p>
                            Configuration 
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php  echo bin2hex(base64_encode('dutyPost_manager')) ;?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Duty Post Manager</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php  echo bin2hex(base64_encode('rank_manager')) ;?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Official Rank Manager</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php  echo bin2hex(base64_encode('rank_manager')) ;?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Grade Level Manager</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </nav>

    </div>

</aside>