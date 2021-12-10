<?php 
require_once ("../../Controller/eventC.php");
require_once ("../../Controller/subC.php");
require_once ("../../Controller/configg.php");
$event=getsingleevent();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>CoSpace - Coworking Space Website Template</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="CoSpace - Coworking Space Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery.countdown.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="css/coloring.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="wrapper">
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
        <!-- header begin -->
        <header class="header-light scroll-light border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="index.html">
                                            <img alt="" class="logo" src="images/logo-light.png" />
                                            <img alt="" class="logo-2" src="images/logo.png" />
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                                <div class="de-flex-col">
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainmenu begin -->
                                <ul id="mainmenu">
                                    <li>
                                        <a href="index.html">Home<span></span></a>
                                        <ul>
                                            <li><a href="index.html">Homepage 1</a></li>
                                            <li><a href="index-2.html">Homepage 2</a></li>
                                            <li><a href="index-3.html">Homepage 3</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="locations.html">Locations<span></span></a>
                                        <ul>
                                            <li><a href="locations.html">All Locations</a></li>
                                            <li><a href="search-result.html">Search Location</a></li>
                                            <li><a href="location-details.html">Location Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Company<span></span></a>
                                        <ul>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="news.html">News</a></li>
                                            <li><a href="jobs.html">Jobs</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="events.php">Events<span></span></a>
                                        <ul>
                                            <li><a href="events.php">Events</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Elements<span></span></a>
                                        <ul>
                                            <li><a href="icons-elegant.html">Elegant Icons</a></li>
                                            <li><a href="icons-etline.html">Etline Icons</a></li>
                                            <li><a href="icons-font-awesome.html">Font Awesome Icons</a></li>
                                            <li><a href="accordion.html">Accordion</a></li> 
                                            <li><a href="alerts.html">Alerts</a></li>
                                            <li><a href="counters.html">Counters</a></li>
                                            <li><a href="modal.html">Modal</a></li>
                                            <li><a href="popover.html">Popover</a></li>
                                            <li><a href="pricing-table.html">Pricing Table</a></li>
                                            <li><a href="progress-bar.html">Progress Bar</a></li>
                                            <li><a href="tabs.html">Tabs</a></li>
                                            <li><a href="tooltips.html">Tooltips</a></li>
                                        </ul>
                                    </li>
                                </ul>                                
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="login.html" class="btn-main"><i class="fa fa-sign-in"></i><span>Log In</span></a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="s2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
    						<h2><?=$event['name']?></h2>
                        </div>
                        <div class="col-md-4">
                            <div class="pull-right">Time left until event: </div>
                            <div class="clearfix"></div>
                            <?php
                            $date=$event['date'];
                            $year = date('Y', strtotime($date));
                            $month = date('m', strtotime($date));
                            $day = date('d', strtotime($date));
                            ?>
                            <div class="de_countdown id-color-2" data-year="<?=$year?>" data-month="<?=$month?>" data-day="<?=$month?>" data-hour="8"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </section>
            <!-- section close -->
            

            <!-- section begin -->
			<section aria-label="section">
                <div class="container">
                    <div class="row">
				        <div class="col-lg-8">
                            <div id="slider-carousel" class="owl-carousel">
                                <div class="item">
                                    <img src="images/event-details-slider/1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="images/event-details-slider/2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="images/event-details-slider/3.jpg" alt="">
                                </div>
                            </div>


                            <div class="spacer-single"></div>

                            <h3>Event Overview</h3>
                            <p><?=$event['description']?></p>

                            <div class="spacer-single"></div>

                            <h3>Event Location</h3>
                            <div class="de-map-wrapper">
                                <iframe src="<?=$event['link']?>"  allowfullscreen="" loading="lazy"></iframe>
                            </div>

                        </div>

                        <div id="sidebar" class="col-lg-4">
                            <div class="de-box mb25">
                                <div class="sm-icon mb30">
                                    <i class="bg-color fa fa-calendar-check-o"></i>
                                    <div class="si-inner">
                                        <h5>Date &amp; Time</h5>
                                        <?=$event['date']?>, 08:00 AM
                                    </div>
                                </div>
                                <div class="sm-icon mb30">
                                    <i class="bg-color fa fa-map-marker"></i>
                                    <div class="si-inner">
                                        <h5>Location</h5>
                                        <?=$event['place']?>
                                    </div>
                                </div>
                                <div class="sm-icon no-bottom">
                                    <i class="bg-color fa fa-users"></i>
                                    <div class="si-inner">
                                        <h5>Capacity</h5>
                                        <?=$event['capacity']?> persons
                                    </div>
                                </div>
                                <br><br>
                                <a href="" class="btn-main" onclick="window.print();"><span>PRINT</span></a>
                            </div>

                            <div class="sidebar_inner">
                                <div id="quick_form" class="form-border mb30">
                                    <div class="row">
                                        <form method="post" action="events.php?sub=<?=$event['id']?>" id="myform" name="myform">
                                        <div class="col-md-12">
                                            <h3>Join This Event</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="fname" id="first_name" class="form-control" placeholder="First Name" required/>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="lname" id="user_name" class="form-control" placeholder="Last Name" required/>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required/>
                                        </div>
                                        <br>
                                        <div class="col-md-6">
                                            <input type="number" name="mobile" id="mobile_phone" class="form-control" placeholder="Mobile Phone" required/>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn-main btn-fullwidth">Submit</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="de-box">
                                    <h3>Share With Friends</h3>
                                    <div class="de-color-icons">
                                        <span><i class="fa fa-twitter fa-lg"></i></span>
                                        <span><i class="fa fa-facebook fa-lg"></i></span>
                                        <span><i class="fa fa-reddit fa-lg"></i></span>
                                        <span><i class="fa fa-linkedin fa-lg"></i></span>
                                        <span><i class="fa fa-pinterest fa-lg"></i></span>
                                        <span><i class="fa fa-stumbleupon fa-lg"></i></span>
                                        <span><i class="fa fa-delicious fa-lg"></i></span>
                                        <span><i class="fa fa-envelope fa-lg"></i></span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>		
                </div>
            </section>

        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>
        
        <!-- footer begin -->
        <footer class="footer-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Plans</h5>
                            <ul>
                                <li><a href="#">Private Office</a></li>
                                <li><a href="#">Coworking Space</a></li>
                                <li><a href="#">Virtual Office</a></li>
                                <li><a href="#">Meeting Room</a></li>
                                <li><a href="#">Dedicated Desk</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Franchise</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Events</h5>
                            <ul>
                                <li><a href="#">Jump Start Your Bussines</a></li>
                                <li><a href="#">Web Development Meet Up</a></li>
                                <li><a href="#">Envato Summer Meet Up</a></li>
                                <li><a href="#">Dribbble Meet Up Sydney</a></li>
                                <li><a href="#">International Education Expo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Newsletter</h5>
                            <p>Signup for our newsletter to get the latest news in your inbox.</p>
                            <form action="blank.php" class="row form-dark" id="form_subscribe" method="post" name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="txt_subscribe" name="txt_subscribe" placeholder="enter your email" type="text" /> <a href="#" id="btn-subscribe"><i class="arrow_right bg-color-secondary"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                            <small>Your email is safe with us. We don't spam.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="index.html">
                                        <img alt="" class="f-logo" src="images/logo.png" /><span class="copy">&copy; Copyright 2021 - CoSpace by Designesia</span>
                                    </a>
                                </div>
                                <div class="de-flex-col">
                                    <div class="social-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
        
    </div>

    
    <!-- Javascript Files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/OwlCarousel2Thumbs.min.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/enquire.min.js"></script>
    <script src="js/jquery.plugin.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/jquery.lazy.min.js"></script>
    <script src="js/jquery.lazy.plugins.min.js"></script>
    <script src="js/jquery.smartsticky.min.js"></script>
    <script src="js/designesia.js"></script>

</body>

</html>