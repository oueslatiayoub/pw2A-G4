<?php @session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>ROBAN CLUB WEB SITE</title>
    <link rel="icon" href="assets/images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="CoSpace - Coworking Space Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="assets/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="assets/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/jquery.countdown.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="assets/css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/coloring.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="wrapper">
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
        <!-- header begin -->
        <header class="transparent header-light scroll-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="index.html">
                                            <img alt="" class="logo" src="assets/images/logo-light.png" />
                                            <img alt="" class="logo-2" src="assets/images/logo.png" />
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
                                        <!--<ul>
                                            <li><a href="index.html">Homepage 1</a></li>
                                            <li><a href="index-2.html">Homepage 2</a></li>
                                            <li><a href="index-3.html">Homepage 3</a></li>
                                        </ul>-->
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
                                        <a href="events.html">Events<span></span></a>
                                        <ul>
                                            <li><a href="events.html">Events</a></li>
                                            <li><a href="event-single.html">Event Details</a></li>
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
                                <?php if (empty($_SESSION['name'])) { ?>
                                    <a href="Users/login.php" class="btn-main"><i class="fa fa-sign-in"></i><span>Log In</span></a>
                                    <?php } else { ?>
                                    <a href="Users/update.php" class="btn-main"><i class="fa fa-sign-in"></i><span><?php echo "Welcome ".$_SESSION["name"]." !"; ?></span></a>
                                    <a href="Users/logout.php" class="btn-main"><i class="fa fa-sign-out"></i><span>Logout</span></a>
                                    <?php } ?>
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
            <section id="section-hero" aria-label="section">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="spacer-single"></div>
                                <h6 class="wow fadeInUp" data-wow-delay=".5s"><span class="text-uppercase id-color-2">We are ROBAN</span></h6>
                                <div class="spacer-10"></div>
                                <h1 class="wow fadeInUp" data-wow-delay=".75s">The <span class="id-color">largest</span> robotics club .</h1>
                                <p class="wow fadeInUp lead" data-wow-delay="1s">
                                We are ROBAN an international robotic club and club N°1 in Tunisia .</p>
                                <div class="spacer-10"></div>
                                <a href="explore.html" class="btn-main wow fadeInUp lead" data-wow-delay="1.25s">Explore</a>
                                <div class="spacer-single"></div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-4 wow fadeInRight mb30" data-wow-delay="1.1s">
                                        <div class="de_count text-left">
                                            <h3><span>200</span>+</h3>
                                            <h5 class="id-color">Members</h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-4 wow fadeInRight mb30" data-wow-delay="1.4s">
                                        <div class="de_count text-left">
                                            <h3><span>48</span></h3>
                                            <h5 class="id-color">Events</h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-4 wow fadeInRight mb30" data-wow-delay="1.7s">
                                        <div class="de_count text-left">
                                            <h3><span>15</span></h3>
                                            <h5 class="id-color">course</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-sm-30"></div>
                            </div>
                            <div class="col-md-6 xs-hide">
                                <img src="assets/images/misc/images-set.png" class="lazy img-fluid wow fadeIn" data-wow-delay="1.25s" alt="">
                            </div>
                        </div>
                    </div>
            </section>
            <section class="pt30 pb30 bg-color-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div id="item_category" class="dropdown style-2">
                                <h4>Locations</h4>
                                <a href="#" class="btn-selector">Australia</a>
                                <ul class="d-col-3">
                                    <li><span>Australia</span></li>
                                    <li><span>Austria</span></li>
                                    <li><span>Belgium</span></li>
                                    <li><span>Brazil</span></li>
                                    <li><span>Canada</span></li>
                                    <li><span>Chile</span></li>
                                    <li><span>China</span></li>
                                    <li><span>Colombia</span></li>
                                    <li><span>Croatia</span></li>
                                    <li><span>Czech Republic</span></li>
                                    <li><span>Denmark</span></li>
                                    <li><span>Estonia</span></li>
                                    <li><span>Finland</span></li>
                                    <li><span>France</span></li>
                                    <li><span>Germany</span></li>
                                    <li><span>Greece</span></li>
                                    <li><span>Hungary</span></li>
                                    <li><span>India</span></li>
                                    <li><span>Indonesia</span></li>
                                    <li><span>Ireland</span></li>
                                    <li><span>Japan</span></li>
                                    <li><span>Malaysia</span></li>
                                    <li><span>Mexico</span></li>
                                    <li><span>New Zealand</span></li>
                                    <li><span>Peru</span></li>
                                    <li><span>Philippines</span></li>
                                    <li><span>South Africa</span></li>
                                    <li><span>Ukraine</span></li>
                                    <li><span>United Kingdom</span></li>
                                    <li><span>Uruguay</span></li>
                                    <li><span>USA</span></li>
                                    <li><span>Thailand</span></li>
                                    <li><span>Venezuela</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div id="buy_category" class="dropdown style-2">
                                <h4>Plans</h4>
                                <a href="#" class="btn-selector">All Plans</a>
                                <ul>
                                    <li class="active"><span>All Plans</span></li>
                                    <li><span>Daily Pass</span></li>
                                    <li><span>Flexi Desk</span></li>
                                    <li><span>Team Desk</span></li>
                                    <li><span>Dedicated Desk</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div id="items_type" class="dropdown style-2">
                                <h4>Number of People</h4>
                                <a href="#" class="btn-selector">1 Person</a>
                                <ul>
                                    <li class="active"><span>1 Person</span></li>
                                    <li><span>2 - 5 Persons</span></li>
                                    <li><span>6 - 10 Persons</span></li>
                                    <li><span>11 - 20 Persons</span></li>
                                    <li><span>More than 20</span></li>
                                </ul>
                            </div>
                        </div>
                            
                        <div class="col-md-3">
                            <a href="search-result.html" class="btn-search-big">Submit</a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section-locations" class="relative no-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h2>Our Locations</h2>
                            <div class="small-border bg-color-2"></div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-12">
                            <div class="p-sm-30 pb-sm-0 mb-sm-0">
                                <div class="de-map-hotspot">
                                    
                                    <div class="de-spot" style="top:39%; left:20%">
                                        <span>United&nbsp;States</span>
                                        <div class="de-circle-1"></div>
                                        <div class="de-circle-2"></div>
                                    </div>
                                    <div class="de-spot" style="top:76%; left:87%">
                                        <span>Australia</span>
                                        <div class="de-circle-1"></div>
                                        <div class="de-circle-2"></div>
                                    </div>
                                    <div class="de-spot" style="top:68%; left:80%">
                                        <span>Indonesia</span>
                                        <div class="de-circle-1"></div>
                                        <div class="de-circle-2"></div>
                                    </div>
                                    <div class="de-spot" style="top:23%; left:18%">
                                        <span>Canada</span>
                                        <div class="de-circle-1"></div>
                                        <div class="de-circle-2"></div>
                                    </div>
                                    <div class="de-spot" style="top:68%; left:33%">
                                        <span>Brazil</span>
                                        <div class="de-circle-1"></div>
                                        <div class="de-circle-2"></div>
                                    </div>
                                    <div class="de-spot" style="top:19%; left:81%">
                                        <span>Rusia</span>
                                        <div class="de-circle-1"></div>
                                        <div class="de-circle-2"></div>
                                    </div>
                                    <div class="de-spot" style="top:45%; left:75%">
                                        <span>China</span>
                                        <div class="de-circle-1"></div>
                                        <div class="de-circle-2"></div>
                                    </div>
                                    <div class="de-spot" style="top:36%; left:48%">
                                        <span>France</span>
                                        <div class="de-circle-1"></div>
                                        <div class="de-circle-2"></div>
                                    </div>
                                    <div class="de-spot" style="top:23%; left:51%">
                                        <span>Sweden</span>
                                        <div class="de-circle-1"></div>
                                        <div class="de-circle-2"></div>
                                    </div>
                                    <div class="de-spot" style="top:78%; left:53%">
                                        <span>South&nbsp;Africa</span>
                                        <div class="de-circle-1"></div>
                                        <div class="de-circle-2"></div>
                                    </div>
                                    
                                    <img src="assets/images/misc/map.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section id="section-intro">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h2>Find Your Space</h2>
                                <div class="small-border bg-color-2"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-sm-30">
                            <a href="plan-daily-pass.html" class="de-card">
                                <div class="de-image">                                
                                    <img src="assets/images/misc/is-1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="text">
                                    <h4>Private Office</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                                    <ul class="ul-style-2">                                         
                                        <li>High Speed Connection</li>
                                        <li>Unlimited Coffee &amp; Tea</li>
                                        <li>Phone Booth Access</li>
                                    </ul>
                                    <div class="de-price">
                                        <span>$39 / Day</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-sm-30">
                            <a href="plan-daily-pass.html" class="de-card">
                                <div class="de-image">                                
                                    <img src="assets/images/misc/is-2.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="text">
                                    <h4>Coworking Space</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                                    <ul class="ul-style-2">                                         
                                        <li>High Speed Connection</li>
                                        <li>Unlimited Coffee &amp; Tea</li>
                                        <li>Phone Booth Access</li>
                                    </ul>
                                    <div class="de-price">
                                        <span>$169 / Day</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-sm-30">
                            <a href="plan-daily-pass.html" class="de-card">
                                <div class="de-image">                                
                                    <img src="assets/images/misc/is-3.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="text">
                                    <h4>Virtual Office</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                                    <ul class="ul-style-2">                                         
                                        <li>High Speed Connection</li>
                                        <li>Unlimited Coffee &amp; Tea</li>
                                        <li>Phone Booth Access</li>
                                    </ul>
                                    <div class="de-price">
                                        <span>$329 / Day</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>            

            <section id="section-why-choose-us" class="no-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h2>Why Choose Us?</h2>
                                <div class="small-border bg-color-2"></div>
                            </div>
                        </div>                        
                        <div class="col-md-6">
                            <img src="assets/images/misc/images-set-2.png" class="lazy img-fluid" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-lg-6 mb20">
                                    <h4>Modern &amp; Comfortable</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                                </div>
                                <div class="col-lg-6 mb20">
                                    <h4>24/7 Secure Access</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                                </div>
                                <div class="col-lg-6 mb20">
                                    <h4>Free Drinks &amp; Snacks</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                                </div>
                                <div class="col-lg-6 mb20">
                                    <h4>Printing &amp; Scanning</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>

                <section id="section-pricing" class="no-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <div class="text-center">
                                    <h2>Select Your Plan</h2>
                                    <div class="spacer-20"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col text-center">
                                <div class="switch-set">
                                    <div>Daily</div>
                                    <div><input id="sw-1" class="switch" type="checkbox" /></div>
                                    <div>Monthly</div>
                                    <div class="spacer-20"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item pricing">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="pricing-s1 mb30">
                                            <div class="top">
                                                <h2>Private Office</h2>
                                                <p class="plan-tagline">Best for personal</p>
                                            </div>
                                            <div class="mid bg-color-secondary text-light">
                                                <p class="price">
                                                    <span class="currency">$</span>
                                                    <span class="m opt-1">39</span>
                                                    <span class="y opt-2">19</span>
                                                    <span class="month">p/day</span>
                                                </p>
                                            </div>

                                            <div class="bottom">
                                                <ul>
                                                    <li><i class="fa fa-check"></i>24/7 Access</li>
                                                    <li><i class="fa fa-check"></i>High speed Wi-Fi</li>
                                                    <li><i class="fa fa-check"></i>Secure keycard access</li>
                                                    <li><i class="fa fa-check"></i>Dedicated phone line</li>
                                                    <li><i class="fa fa-check"></i>Meeting room usage</li>
                                                    <li><i class="fa fa-check"></i>Daily cleaning service</li>
                                                </ul>
                                            </div>

                                            <div class="action">
                                                <a href="" class="btn-main">Sign Up Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="pricing-s1 mb30">
                                            <div class="top">
                                                <h2>Coworking Space</h2>
                                                <p class="plan-tagline">Best for small group</p>
                                            </div>

                                            <div class="mid bg-color-secondary text-light">
                                                <p class="price">
                                                    <span class="currency">$</span>
                                                    <span class="m opt-1">169</span>
                                                    <span class="y opt-2">89</span>
                                                    <span class="month">p/day</span>
                                                </p>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><i class="fa fa-check"></i>24/7 Access</li>
                                                    <li><i class="fa fa-check"></i>High speed Wi-Fi</li>
                                                    <li><i class="fa fa-check"></i>Secure keycard access</li>
                                                    <li><i class="fa fa-check"></i>Dedicated phone line</li>
                                                    <li><i class="fa fa-check"></i>Meeting room usage</li>
                                                    <li><i class="fa fa-check"></i>Daily cleaning service</li>
                                                </ul>
                                            </div>

                                            <div class="action">
                                                <a href="" class="btn-main">Sign Up Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="pricing-s1 mb30">
                                            <div class="top">
                                                <h2>Virtual Office</h2>
                                                <p class="plan-tagline">Best for organization</p>
                                            </div>
                                            <div class="mid bg-color-secondary text-light">
                                                <p class="price">
                                                    <span class="currency">$</span>
                                                    <span class="m opt-1">329</span>
                                                    <span class="y opt-2">164</span>
                                                    <span class="month">p/day</span>
                                                </p>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><i class="fa fa-check"></i>24/7 Access</li>
                                                    <li><i class="fa fa-check"></i>High speed Wi-Fi</li>
                                                    <li><i class="fa fa-check"></i>Secure keycard access</li>
                                                    <li><i class="fa fa-check"></i>Dedicated phone line</li>
                                                    <li><i class="fa fa-check"></i>Meeting room usage</li>
                                                    <li><i class="fa fa-check"></i>Daily cleaning service</li>
                                                </ul>
                                            </div>

                                            <div class="action">
                                                <a href="" class="btn-main">Sign Up Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="section-studio-type" class="no-top">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <h2>Space Type</h2>
                                    <div class="small-border bg-color-2"></div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="de-image-text">
                                    <a href="#" class="d-text">
                                        <h3><span class="id-color">01</span> Podcast</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                                    </a>
                                    <img src="assets/images/misc/space-type-podcast.jpg" class="img-fluid" alt="">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="de-image-text">
                                    <a href="#" class="d-text">
                                        <h3><span class="id-color">02</span> Live Streaming</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                                    </a>
                                    <img src="assets/images/misc/space-type-streaming.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="de-image-text">
                                    <a href="#" class="d-text">
                                        <h3><span class="id-color">03</span> Photo &amp; Video Shoot</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                                    </a>
                                    <img src="assets/images/misc/space-type-photo.jpg" class="img-fluid" alt="">
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
                                        <img alt="" class="f-logo" src="assets/images/logo.png" /><span class="copy">&copy; Copyright 2021 - CoSpace by Designesia</span>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>
    <script src="assets/js/easing.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/OwlCarousel2Thumbs.min.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/enquire.min.js"></script>
    <script src="assets/js/jquery.plugin.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/jquery.countdown.js"></script>
    <script src="assets/js/jquery.lazy.min.js"></script>
    <script src="assets/js/jquery.lazy.plugins.min.js"></script>
    <script src="assets/js/designesia.js"></script>

    
</body>

</html>