<div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper logo-wrapper-center">
                        <a href="dashboard.php" data-bs-original-title="" title="">
                            <img class="img-fluid for-dark" src="../logo.png" style="height:50px;width:95px" alt="">
                        </a>
                        
                    </div>
                    <div class="logo-icon-wrapper">
                        <a href="dashboard.php">
                            <img class="img-fluid main-logo" src="../logo.png" style="height:50px;width:95px" alt="logo">
                        </a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow">
                            <i data-feather="arrow-left"></i>
                        </div>

                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"></li>
                                <li class="sidebar-main-title sidebar-main-title-3">
                                    <div>
                                        <h6 class="lan-1"><?php echo $row_store['name'];?></h6>
                                        <p class="lan-2"><?php echo $row_store['district'].', '.$row_store['state'];?></p>
                                    </div>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="dashboard.php">
                                        <i data-feather="home"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="products.php">
                                        <i data-feather="box"></i>
                                        <span>Products</span>
                                    </a>
                                </li>
                                
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="orders.php">
                                        <i data-feather="archive"></i>
                                        <span>Orders</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="customers.php">
                                        <i data-feather="users"></i>
                                        <span>Customers</span>
                                    </a>
                                </li>
                                
                    
                                
                                <li class="sidebar-main-title sidebar-main-title-2">
                                    <div>
                                        <p class="lan-2">Store Information</p>
                                    </div>
                                </li>

                                

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="profile.php">
                                        <i data-feather="settings"></i>
                                        <span>Profile Settings</span>
                                    </a>
                            
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="logout.php">
                                        <i data-feather="log-in"></i>
                                        <span>Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow">
                            <i data-feather="arrow-right"></i>
                        </div>
                    </nav>
                </div>
            </div>
            