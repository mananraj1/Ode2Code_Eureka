<div class="page-header">
            <div class="header-wrapper row m-0">
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper">
                        <a href="index.html">
                            <img class="img-fluid main-logo" src="../logo.png" style="height:50px;width:95px" alt="logo">
                            <img class="img-fluid white-logo" src="../logo.png" style="height:50px;width:95px" alt="logo">
                        </a>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                    </div>
                </div>

                <form class="form-inline search-full col" action="javascript:void(0)" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="nav-right col-4 pull-right right-header p-0">
                    <ul class="nav-menus">
                        
                        <li>
                            <div class="mode">
                                <span class="lnr lnr-moon"></span>
                            </div>
                        </li>

                        
                        <li class="maximize">
                            <a class="text-dark" href="javascript:void(0)!" onclick="javascript:toggleFullScreen()">
                                <span class="lnr lnr-frame-expand"></span>
                            </a>
                        </li>
                        <li class="profile-nav onhover-dropdown pe-0 me-0">
                            <div class="media profile-media">
                                <img class="user-profile rounded-circle" src="<?php echo $url.'icon.png';?>" alt="">
                                <div class="user-name-hide media-body">
                                    <span><?php echo $row_cus['name'];?></span>
                                    <p class="mb-0 font-roboto">(MiID : <?php echo $row_cus['username'];?>) <i class="middle fa fa-angle-down"></i></p>
                                </div> 
                            </div>
                             <ul class="profile-dropdown onhover-show-div">
                                
                                <li>
                                    <a href="orders.php">
                                        <i data-feather="archive"></i>
                                        <span>Orders</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="profile.php">
                                        <i data-feather="settings"></i>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a 
                                        href="logout.php">
                                        <i data-feather="log-out"></i>
                                        <span>Log out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        