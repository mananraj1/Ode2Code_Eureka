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
                            <div>
                                <a href=""><b><span class="lnr lnr-cart" style="font-weight: 100 !important;"></span></b></a>
                            </div>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="notification-box">
                                <span class="lnr lnr-alarm"></span>
                                <span class="badge rounded-pill badge-theme">4</span>
                            </div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li>
                                    <span class="lnr lnr-alarm"></span>
                                    <h6 class="f-18 mb-0">Notitications</h6>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle-o me-3 font-primary"></i>Delivery processing <span
                                            class="pull-right">10
                                            min.</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span
                                            class="pull-right">1 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span
                                            class="pull-right">3 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span
                                            class="pull-right">6 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <a class="btn btn-primary" href="javascript:void(0)">Check all notification</a>
                                </li>
                            </ul>
                        </li>

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
                                    <span><?php echo $row_store['manager'];?></span>
                                    <p class="mb-0 font-roboto">(menu) <i class="middle fa fa-angle-down"></i></p>
                                </div>
                            </div>
                             <ul class="profile-dropdown onhover-show-div">
                                <li>
                                    <a href="customers.php">
                                        <i data-feather="users"></i>
                                        <span>Customers</span>
                                    </a>
                                </li>
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
        