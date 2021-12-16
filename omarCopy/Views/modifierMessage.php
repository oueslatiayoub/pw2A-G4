<?php
    include_once '../Model/communt.php';
    include_once '../Controller/messageC.php';

    $error = "";

    // create message
    $message = null;

    // create an instance of the controller
    $messageC = new messageC();
    if (
       
		isset($_POST["name"]) &&		
        isset($_POST["email"]) &&
		isset($_POST["subject"]) && 
        isset($_POST["contenue"])
    ) {
        if (
         
			!empty($_POST['name']) &&
            !empty($_POST["email"]) && 
			!empty($_POST["subject"]) && 
            !empty($_POST["contenue"])
        ) {
            $message = new message(
            
				$_POST['name'],
                $_POST['email'], 
				$_POST['subject'],
                $_POST['contenue'],
            );
            $messageC->modifiermessage($message,$_GET['idmessage']);
           // var_dump($message);
           // var_dump($_GET['idmessage']);
            header('Location:afficherMessages.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<!DOCTYPE html>
<html lang="zxx">

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
        <header class="transparent scroll-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="assets/index.html">
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
                                        <a href="assets/#">Elements<span></span></a>
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
            <section id="subheader" class="text-light" data-bgimage="url(assets/images/background/subheader.jpg) top">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-12 text-center">
									<h1>Contact Us</h1>
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
							
							<div class="col-lg-8 mb-sm-30">
							<h3>You Are Welcome to become our Client</h3>
                            <?php
                                    $chaine_vide='';
                                    //$msg = new message($chaine_vide,$chaine_vide,$chaine_vide,$chaine_vide);
                                    $message = new message(
            
                                        $chaine_vide,
                                        $chaine_vide, 
                                        $chaine_vide,
                                        $chaine_vide
                                    );
                                    if (isset($_GET['idmessage'])) {
                                        $messageC = new messageC();
                                        $msg = $messageC->recuperermessage($_GET['idmessage']);
                                    }
                                    ?>

							<div class="contact">
										<form id="" method="post" action="modifierMessage.php?idmessage=<?php echo $msg['id']; ?>" >
											<div class="row">
												<div class="input_padding text-center">
													<div class="form-group col-sm-12">
														<input type="text" name="name" value="<?php echo $msg['name']; ?>" class="form-control" id="name" placeholder="Name *" required="required">
													</div>
													<div class="form-group col-sm-12">
														<input type="email" name="email" value="<?php echo $msg['email']; ?>" class="form-control" id="email" placeholder="Email *" required="required">
													</div>
													<div class="form-group col-sm-12">
														<input type="text" name="subject" value="<?php echo $msg['subject']; ?>" class="form-control" id="subject" placeholder="Subject *" required="required">
													</div>
													<div class="form-group col-sm-12 mab-none">
														<textarea rows="8" name="contenue"  class="form-control" id="description" placeholder="Your Message Here ..." required="required"></textarea>
													</div>
													<div class="form-group mb0 col-sm-12">
														<div class="actiaaons">
															<button type="submit" value="modify Your Message" name="submit" id="submitButton" class="btn graen-btn" title="Click here to submit your message!">modify Your Message</button>
														</div>
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

        <a href="assets/#" id="back-to-top" class="show"></a>
        <!-- footer begin -->
        <footer class="footer-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Plans</h5>
                            <ul>
                                <li><a href="assets/#">Private Office</a></li>
                                <li><a href="assets/#">Coworking Space</a></li>
                                <li><a href="assets/#">Virtual Office</a></li>
                                <li><a href="assets/#">Meeting Room</a></li>
                                <li><a href="assets/#">Dedicated Desk</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="assets/#">About Us</a></li>
                                <li><a href="assets/#">News</a></li>
                                <li><a href="assets/#">Jobs</a></li>
                                <li><a href="assets/#">Franchise</a></li>
                                <li><a href="assets/#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Events</h5>
                            <ul>
                                <li><a href="assets/#">Jump Start Your Bussines</a></li>
                                <li><a href="assets/#">Web Development Meet Up</a></li>
                                <li><a href="assets/#">Envato Summer Meet Up</a></li>
                                <li><a href="assets/#">Dribbble Meet Up Sydney</a></li>
                                <li><a href="assets/#">International Education Expo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Newsletter</h5>
                            <p>Signup for our newsletter to get the latest news in your inbox.</p>
                            <form action="blank.php" class="row form-dark" id="form_subscribe" method="post" name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="txt_subscribe" name="txt_subscribe" placeholder="enter your email" type="text" /> <a href="assets/#" id="btn-subscribe"><i class="arrow_right bg-color-secondary"></i></a>
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
                                        <a href="assets/#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="assets/#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="assets/#"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="assets/#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        <a href="assets/#"><i class="fa fa-rss fa-lg"></i></a>
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
    <script src="assets/js/jquery.smartsticky.min.js"></script>
    <script src="assets/js/designesia.js"></script>


</body>

</html>