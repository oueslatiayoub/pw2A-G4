<!DOCTYPE html>
<html lang="zxx">
<?php @session_start(); ?>
<head>
    <title>CoSpace - Coworking Space Website Template</title>
    <link rel="icon" href="../assets/images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="CoSpace - Coworking Space Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="../assets/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="../assets/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/jquery.countdown.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="../assets/css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/coloring.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="wrapper">
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
        <!-- header begin -->
        <header class="transparent scroll-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="index.html">
                                            <img alt="" class="logo" src="../assets/images/logo-light.png" />
                                            <img alt="" class="logo-2" src="../assets/images/logo.png" />
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
                                    <a href="login.php" class="btn-main"><i class="fa fa-sign-in"></i><span>Log In</span></a>
                                    <?php } else { ?>
                                    <a href="update.php" class="btn-main"><i class="fa fa-sign-in"></i><span><?php echo "Welcome ".$_SESSION["name"]." !"; ?></span></a>
                                    <a href="logout.php" class="btn-main"><i class="fa fa-sign-out"></i><span>Logout</span></a>
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
            
            <!-- section begin -->
            <section id="subheader" class="text-light" data-bgimage="url(../assets/images/background/subheader.jpg) top">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-12 text-center">
									<h1>Update Profile</h1>
									<p>Anim pariatur cliche reprehenderit</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->
            

            <section aria-label="section">
                <div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<h3>Feel Free To Update Your Profile.</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							
							<div class="spacer-10"></div>
							
							<form name="updateform" class="form-border" method="post" action='update_form.php'>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Carte d'identité nationale:</label>
                                            <input type='text' disabled id='cin' class="form-control" value=<?php echo $_SESSION['cin']; ?> >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Nom:</label>
                                            <input type='text' name='nom' id='nom' class="form-control" value=<?php echo $_SESSION['name']; ?>>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Prenom:</label>
                                            <input type='text' name='prenom' id='prenom' class="form-control" value=<?php echo $_SESSION['prenom']; ?>>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Email Address:</label>
                                            <input type='email' name='email' id='email' class="form-control" value=<?php echo $_SESSION['email']; ?>>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Classe:</label>
                                            <input type='text' name='classe' id='classe' class="form-control" value=<?php echo $_SESSION['classe'];?>>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Adresse:</label>
                                            <input type='text' name='adresse' id='adresse' class="form-control" value=<?php echo $_SESSION['adresse']; ?>>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Date de naissance:</label>
                                            <input type='date' name='datenaissance' id='datenaissance' class="form-control" value=<?php echo $_SESSION['datenaissance']; ?>>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Password:</label>
                                            <input type='password' name='password' id='password' class="form-control" value=<?php echo $_SESSION['password']; ?> >
                                        </div>
                                    </div>

                                    <div class="col-md-12">

                                        <div class="pull-left">
                                            <input type='submit' value='Update Profile' class="btn btn-main color-2">
                                            <a href="delete.php" class="btn btn-danger"><i class="fa fa-sign-out"></i><span>Delete Profile</span></a>
                                        </div>

                                    </div>

                                </div>
                            </form>
							
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
                                        <img alt="" class="f-logo" src="../assets/images/logo.png" /><span class="copy">&copy; Copyright 2021 - CoSpace by Designesia</span>
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
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/jquery.isotope.min.js"></script>
    <script src="../assets/js/easing.js"></script>
    <script src="../assets/js/owl.carousel.js"></script>
    <script src="../assets/js/OwlCarousel2Thumbs.min.js"></script>
    <script src="../assets/js/validation.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/enquire.min.js"></script>
    <script src="../assets/js/jquery.plugin.js"></script>
    <script src="../assets/js/jquery.countTo.js"></script>
    <script src="../assets/js/jquery.countdown.js"></script>
    <script src="../assets/js/jquery.lazy.min.js"></script>
    <script src="../assets/js/jquery.lazy.plugins.min.js"></script>
    <script src="../assets/js/jquery.smartsticky.min.js"></script>
    <script src="../assets/js/designesia.js"></script>


</body>

</html>