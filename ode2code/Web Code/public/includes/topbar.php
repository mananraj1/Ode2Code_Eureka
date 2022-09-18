<div class="top-header">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-auto d-xl-block d-none">
                        <ul class="border-list">
                            <li>A project by Team Eureka</li>
                            <li><a href="shop.php"><span class="fw-bold">Shop <i class="fa fa-angle-right"></i></span></a></li>
                            <?php if($store_row['name']!=''){?><li><span class="fw-bold"><?php echo $store_row['name'];?></span></a></li><?php } ?>
                        </ul>
                    </div>
                    <div class="col-auto d-sm-block d-none">
                        <p class="font-dark-30 mb-0"></p>
                    </div>
                    <div class="col-auto">
                        <ul class="border-list">
                            <li>
                                
                            </li>
                            <?php
                            if($cid!='')
                            {?>
                                <li>
                                <a href="dashboard.php">Welcome, <?php echo $row_cus['name'];?> ! <i class="fa fa-angle-right"></i></a>
                            </li>

                            <li>
                                <a href="logout.php">Logout <i class="fa fa-angle-right"></i></a>
                            </li>
                            <?php
                            }
                            else
                            {?>
                            <li>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#signInModal" class="align-items-center btn btn-theme">Login</a>
                            </li>

                            <li>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#signUpModal" class="align-items-center btn btn-theme">Register</a>
                            </li>
                            <?php 
                            }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        