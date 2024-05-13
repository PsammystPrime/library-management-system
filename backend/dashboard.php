<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/admin_dashboard.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Admin Dashboard</title>
    </head>
    <?php include 'connection.php'?>
    <body>
        <div class="sidebar">
            <div class="logo-details">
                <i class='bx bxs-store'></i>
                <span class="logo_name">Admin Dashboard Template</span>
            </div>
            <ul class="nav-links">
                <li>
                    <a href="">
                        <i class="bx bx-grid-alt"></i>
                        <span class="link-name"> Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bx bx-box"></i><span class="link-name"> Books Available</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class='bx bx-list-ul'></i>
                        <span class="link-name"> Books Returned</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class='bx bxs-pie-chart-alt-2'></i>
                        <span class="link-name"> Users</span>
                    </a>
                </li>
                <li>
                    <a href="upload.php">
                        <i class='bx bxs-coin-stack'></i>
                        <span class="link-name"> Upload A Book</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class='bx bxs-book'></i>
                        <span class="link-name"> Total</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="">
                        <i class='bx bxs-user-badge'></i>
                        <span class="link-name"> Team</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class='bx bxs-chat'></i>
                        <span class="link-name"> Messages</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class='bx bx-cog'></i>
                        <span class="link-name"> Settings</span>
                    </a>
                </li> -->
                <li>
                    <a href="">
                        <i class='bx bxs-exit'></i>
                        <span class="link-name"> Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Home section -->
        <div class="home-section">
            <nav>
                <div class="sidebar-button">
                    <i class='bx bx-menu sidebarBtn' id="sidebarBtn"></i>
                    <span class="dashboard"> Dashboard</span>
                </div>
                <div class="search-box">
                    <input type="text" name="" id="" placeholder="Search...">
                    <i class='bx bx-search-alt'></i>
                </div>
                <div class="profile-details">
                    <!-- <img src="" alt=""> -->
                    <span class="admin-name">Frankie D'coder</span>
                    <i class='bx bx-chevron-down'></i>
                </div>
            </nav>
            <!-- HOME CONTENT -->
            <div class="home-content">
                <div class="overview-boxes">
                    <div class="box">
                        <div class="left-side">
                            <div class="box-topic">Total Books</div>
                            <div class="number">40,876</div>
                            <div class="indicator">
                                <i class="bx bx-up-arrow-alt"></i>
                                <span class="text">Up from yesterday</span>
                            </div>
                        </div>
                        <i class="bx bxs-cart-alt cart"></i>
                    </div>
                    <div class="box">
                        <div class="left-side">
                            <div class="box-topic">Total Burrowed</div>
                            <div class="number">38,876</div>
                            <div class="indicator">
                                <i class="bx bx-up-arrow-alt"></i>
                                <span class="text">Up from yesterday</span>
                            </div>
                        </div>
                        <i class="bx bxs-cart-add cart two"></i>
                    </div>
                    <div class="box">
                        <div class="left-side">
                            <div class="box-topic">Total Returned</div>
                            <div class="number">12,876</div>
                            <div class="indicator">
                                <i class="bx bx-up-arrow-alt"></i>
                                <span class="text">Up from yesterday</span>
                            </div>
                        </div>
                        <i class="bx bxs-cart-cart cart three"></i>
                    </div>
                    <div class="box">
                        <div class="left-side">
                            <div class="box-topic">Total Profit</div>
                            <div class="number">12,876</div>
                            <div class="indicator">
                                <i class="bx bx-down-arrow-alt down"></i>
                                <span class="text">Up from yesterday</span>
                            </div>
                        </div>
                        <i class="bx bxs-cart-download cart four"></i>
                    </div>
                </div>

                <!-- sales content -->
                <div class="sales-boxes">
                    <!-- Left Side -->
                    <div class="recent-sale box">
                        <div class="title">Recently Burrowed</div>
                        <div class="sales-details">
                            <ul class="details">
                                <li class="title">
                                    Date
                                </li>
                                <li>
                                    <a href="#">02 Jan 2022</a>
                                </li>
                                <li>
                                    <a href="#">02 Jan 2022</a>
                                </li>
                                <li>
                                    <a href="#">11 Sept 2022</a>
                                </li>
                                <li>
                                    <a href="#">11 Nov 2022</a>
                                </li>
                                <li>
                                    <a href="#">11 Nov 2022</a>
                                </li>
                            </ul>
                            <ul class="details">
                                <li class="title">
                                    Customer
                                </li>
                                <li>
                                    <a href="#">Alex Doe</a>
                                </li>
                                <li>
                                    <a href="#">Alex Doe</a>
                                </li>
                                <li>
                                    <a href="#">Alex Doe</a>
                                </li>
                                <li>
                                    <a href="#">Alex Doe</a>
                                </li>
                                <li>
                                    <a href="#">Alex Doe</a>
                                </li>
                            </ul>
                            <ul class="details">
                                <li class="title">
                                    Status
                                </li>
                                <li>
                                    <a href="#">Delivered</a>
                                </li>
                                <li>
                                    <a href="#">Returned</a>
                                </li>
                                <li>
                                    <a href="#">Delivered</a>
                                </li>
                                <li>
                                    <a href="#">Delivered</a>
                                </li>
                                <li>
                                    <a href="#">Pending</a>
                                </li>
                            </ul>
                            <!-- <ul class="details">
                                <li class="title">
                                    Total
                                </li>
                                <li>
                                    <a href="#">$100</a>
                                </li>
                                <li>
                                    <a href="#">$100</a>
                                </li>
                                <li>
                                    <a href="#">$100</a>
                                </li>
                                <li>
                                    <a href="#">$100</a>
                                </li>
                                <li>
                                    <a href="#">$100</a>
                                </li>
                            </ul> -->
                        </div>
                        <div class="button">
                            <a href="#">See All...</a></div>
                    </div>
                    <div class="top-sales box">
                        <!-- Right Side -->
                        <div class="title">Top Selling Product</div>
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="" alt="" srcset="">
                                    <span class="product_name">Gucci Women's Bag</span>
                                </a>
                                <span class="price">$200</span>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="" alt="" srcset="">
                                    <span class="product_name">Fendi Shorts</span>

                                </a>
                                <span class="price">$200</span>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="" alt="" srcset="">
                                    <span class="product_name">Vans</span>
                                </a>
                                <span class="price">$200</span>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="" alt="" srcset="">
                                    <span class="product_name">Big Steppers</span>
                                </a>
                                <span class="price">$200</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <script src="../assets/js/handlers/admin_dashboard.js"></script>
    </body>

    </html>


?>