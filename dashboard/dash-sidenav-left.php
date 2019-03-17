<!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo $user_img?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $username?></div>
                    <div class="email"><?php echo $user_email?></div>
                    
                </div>
            </div>

            <!-- Menu -->
            <div class="menu">
                 
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li
                    <?php if ($pagename == "Dashboard"): ?>
                        class="active"
                    <?php else: ?>
                        
                    <?php endif ?>
                    
                    >
                        <a href="index">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li
                    <?php if ($pagename == "Account Management"): ?>
                        class="active"
                    <?php else: ?>
                        
                    <?php endif ?>
                    >
                        <a href="account">
                            <i class="material-icons">account_box</i>
                            <span>Account</span>
                        </a>
                    </li>
                    <li
                    <?php if ($pagename == "Research"): ?>
                        class="active"
                    <?php else: ?>
                        
                    <?php endif ?>
                    >
                        <a href="research">
                            <i class="material-icons">search</i>
                            <span>Research</span>
                        </a>
                    </li>
                      <li
                    <?php if ($pagename == "Reports"): ?>
                        class="active"
                    <?php else: ?>
                        
                    <?php endif ?>
                     >
                         <a href="mapper">
                            <i class="material-icons">map</i>
                            <span>Biogas Mapper</span>
                        </a>
                    </li>
                     <li
                    <?php if ($pagename == "Reports"): ?>
                        class="active"
                    <?php else: ?>
                        
                    <?php endif ?>
                     >
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">collections_bookmark</i>
                            <span>Reports</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../assets/" class=" waves-effect waves-block" target="_BLANK">List of student</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                     &copy; <?php auto_copyright("2019"); ?> <a href="javascript:void(0);">E-learning</a>
                </div>
                <!-- <div class="version">
                    <b>Version: </b> 1.0.5
                </div> -->
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->