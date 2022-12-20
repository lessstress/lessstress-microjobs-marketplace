<!-- Dashboard Sidebar
    ================================================== -->
<div class="dashboard-sidebar">
    <div class="dashboard-sidebar-inner" data-simplebar>
        <div class="dashboard-nav-container">

            <!-- Responsive Navigation Trigger -->
            <a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
                <span class="trigger-title"><?php _e("Dashboard Navigation") ?></span>
            </a>
            <!-- Navigation -->
            <div class="dashboard-nav">
                <div class="dashboard-nav-inner">

                    <ul data-submenu-title="<?php _e("My Account") ?>">
                        <li class="active"><a href="<?php url("DASHBOARD") ?>"><i class="icon-material-outline-dashboard"></i> <?php _e("Dashboard") ?></a></li>
                        <?php if($config['quickchat_socket_on_off'] == 'on' || $config['quickchat_ajax_on_off'] == 'on'){ ?>
                        <li><a href="<?php url("MESSAGE") ?>"><i class="icon-material-outline-question-answer"></i> <?php _e("Message") ?></a></li>
                        <?php } ?>
                        <?php
                        if($usertype == "employer"){
                            echo '<li><a href="'.url("POST-PROJECT",false).'"><i class="icon-material-outline-add-circle-outline"></i> '.__("Post Project").'</a></li>';
                            if($config['company_enable']) {
                            }
                        }
                        ?>
                    </ul>

                    <ul data-submenu-title="<?php _e("Profile") ?>">
                        <li><a href="<?php url("PROFILE") ?>/<?php _esc($username)?>"><i
                                    class="icon-feather-user"></i> <?php _e("Profile Public View") ?></a></li>
                        <li><a href="<?php url("EDITPROFILE") ?>"><i
                                    class="icon-feather-user"></i> <?php _e("Edit Profile") ?></a></li>

                        <?php
                        if($usertype == "user"){
                            echo '<li><a href="'.url("EXPERIENCES",false).'"><i class="icon-feather-award"></i> '.__("My Experiences").'</a></li>';
                        }
                        ?>
                    </ul>

                    <ul data-submenu-title="<?php _e("Organize and Manage") ?>" >
                        <li><a href="#"><i class="icon-material-outline-assignment"></i> <?php _e("Projects") ?></a>
                            <ul>
                                <li><a href="<?php url("MYPROJECTS") ?>"><?php _e("My Projects") ?></a></li>
                            </ul>
                        </li>
                        
                    </ul>

                    <ul data-submenu-title="Account">
                        <li><a href="<?php url("DEPOSIT") ?>"><i class="icon-feather-file-text"></i> <?php _e("Deposit") ?></a></li>
                        <li class="hidden"><a href="<?php url("TRANSFER") ?>"><i class="icon-feather-file-text"></i> <?php _e("Transfer") ?></a></li>
                        <li><a href="<?php url("WITHDRAW") ?>"><i class="icon-feather-file-text"></i> <?php _e("Withdraw") ?></a></li>
                        <li><a href="<?php url("TRANSACTION") ?>"><i class="icon-feather-file-text"></i> <?php _e("Transactions") ?></a></li>
                        <li><a href="<?php url("ACCOUNT_SETTING") ?>"><i class="icon-material-outline-settings"></i> <?php _e("Account Setting") ?></a></li>
                        <li><a href="<?php url("LOGOUT") ?>"><i class="icon-material-outline-power-settings-new"></i> <?php _e("Logout") ?></a></li>
                    </ul>

                </div>
            </div>
            <!-- Navigation / End -->
        </div>
    </div>
</div>
<!-- Dashboard Sidebar / End -->