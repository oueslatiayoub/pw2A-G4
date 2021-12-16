<?php
    $error = "";

    // create message


    // create an instance of the controller
    
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
			include_once '../Controller/messageC.php';
			include_once '../models/communt.php';
			$messageC = new messageC();
            $message = new message(
            
				$_POST['name'],
                $_POST['email'], 
				$_POST['subject'],
                $_POST['contenue']
            );
            $messageC->ajoutermessage($message);
            header('Location:afficherMessages.php');
        }
        else
            $error = "Missing information";
    }
	// create reclamation
  //  $reclamation = null;

    // create an instance of the controller
   
    if (
        isset($_POST["reclamation"])
    ) {
        if (
            !empty($_POST["reclamation"])
        ) { 
			
			include_once '../Controller/reclamationC.php';
			include_once '../models/reclamation.php';
			$reclamationC = new reclamationC();
            $reclamation = new reclamation(
                $_POST['reclamation']
            );
            $reclamationC->ajouterreclamation($reclamation);
           // header('Location:afficherListeReclamation.php');
        }
        else
            $error = "Missing information";
    }
?>
<!doctype html>
<html lang="zxx">

	

<!-- Mirrored from robogard-temp.netlify.app/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Nov 2021 00:17:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<title>Creative Template</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700,700i,800,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,600,700,800,900" rel="stylesheet">
		<link href="fonts/font-awesome.min.css" rel="stylesheet"/>
		<link href="fonts/etline.css" rel="stylesheet"/>
		<link href="fonts/themify-icons.css" rel="stylesheet"/>
		<link href="css/plugins.css" rel="stylesheet"/>
		<link href="css/lightbox.min.css" rel="stylesheet"/>
		<link href="css/responsive.css" rel="stylesheet"/>
		<link href="css/style.css" rel="stylesheet"/>
		<link href="ss.css" rel="stylesheet"/>
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
	<body data-spy="scroll" data-target=".navbar" data-offset="70">

		<!-- START PRELOADER -->
			<div class="preloader">
				<div class="spinner">
					<div class="double-bounce1"></div>
					<div class="double-bounce2"></div>
				</div>
			</div>
		<!-- END PRELOADER -->
		
		<!-- START NAVBAR -->
			<div class="navbar navbar-default navbar-fixed-top menu-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="index-2.html" class="navbar-brand w-text">RoboGard</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#home" class="smoothScroll">Home</a></li>
							<li><a href="#about" class="smoothScroll">About</a></li>
							<li><a href="#service" class="smoothScroll">Service</a></li>
							<li><a href="#portfolio" class="smoothScroll">Work</a></li>
							<li><a href="#resume" class="smoothScroll">Resume</a></li>	
							<li><a href="#blog" class="smoothScroll">Blog</a></li>													
							<li><a href="#contact" class="smoothScroll">forum</a></li>
							<li><a href="connexion.html" class="smoothScroll">connexion</a></li>

						</ul>
					</div> 
				</div> <!--- END CONTAINER -->
			</div> 
		<!-- END NAVBAR -->			
		
		<!-- START BANNER-SHOW -->
			<section id="home" class="main_banner v5 banner_bg">
				<div class="display_table">
					<div class="display_table_cell">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<div class="banner_content text-left mt-30">
										<span class="sm_title has-before">Automated Chatbot to grow Business!</span>
										<h1 class="cd-headline clip">
											<span class="fw_300">Creative Artificial Startup Agency for </span>
											<span class="cd-words-wrapper c-cyan">
												<b class="is-visible fw_800">AI Data Analysis</b>
												<b class="fw_800">Chatbot Business</b>
												<b class="fw_800">Machine Learning</b>
											</span>
										</h1>
										<p class="head-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut culpa nulla ipsum amet a ab neque. Odio impedit inventore nemo aliquid eius ad? Veniam perferendis iste odio officiis.</p>
										<div class="btn-wrap">
								            <a href="#0" class="btn btn-default main_btn"><span>Our Services</span></a>
								            <a href="#0" class="btn btn-default main_btn"><span>Contact us</span></a>
											
										</div>
									</div>
								</div>
							</div> <!--- END ROW -->
						</div> <!--- END CONTAINER -->
					</div>
				</div>
				<div class="mouse_scroll">
					<a href="#about" class="smoothScroll">
						<div class="mouse">
							<i class="ti-angle-double-down"></i>
						</div>
					</a>
				</div>
			</section>
		<!-- END BANNER-SHOW -->


		<section class="about2 section_padding relative">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="about2-wrap relative"></div>
					</div>	
					<div class="box-shadow purple-bg col-md-10">
							<div class="row">
								<div class="col-md-6 no-pl col-sm-12 col-xs-12">
									<div class="about_img">
										<img src="images/about2.png" alt="about-img" />
									</div>
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12 no-pr">
									<div class="about_content_area custom">
										<h5 class="c-cyan has-before">Dedicated Artificial Intelligence</h5>
										<h3 class="w-text">Get Benefits of using latest Artificial Intelligence.</h3>
										<p class="g-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tellus est, finibus ut congue sed, faucibus ut</p>
										
										<div class="row mt-30">
			                                <div class="col-md-6">
			                                    <div class="side-feature-list-item">
			                                        <img src="images/elements/feature-1.svg" class="check-mark-icon" alt="">
			                                        <div class="foot-c-info">Fully Responsive & obile friendly</div>
			                                    </div>
			                                </div>
			                                <div class="col-md-6">
			                                    <div class="side-feature-list-item">
			                                        <img src="images/elements/feature-2.svg" class="check-mark-icon" alt="">
			                                        <div class="foot-c-info">Clean &amp; Modern Design Layout</div>
			                                    </div>
			                                </div>
			                                <div class="col-md-6">
			                                    <div class="side-feature-list-item">
			                                        <img src="images/elements/feature-3.svg" class="check-mark-icon" alt="">
			                                        <div class="foot-c-info">Multi-Device Testing System </div>
			                                    </div>
			                                </div>
			                                <div class="col-md-6">
			                                    <div class="side-feature-list-item">
			                                        <img src="images/elements/feature-4.svg" class="check-mark-icon" alt="">
			                                        <div class="foot-c-info">great User Experience</div>
			                                    </div>
			                                </div>
			                                
			                            </div>
			                            <div class="about_btn">
											<a href="#0" class="btn cyan-btn">contact Us</a>
										</div>
									</div>
								</div> 
								
							</div>
							
						</div>
				</div>
			</div>
		</section>
		

		<section  class="how-it-work none gray_bg section_padding pb_70">
			<div class="container">
				<div class="section_heading text-center">
					<h2>How It Works</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin.</p>
				</div>	
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="feat-box v2 text-center">
							<div class="overlay-f relative"></div>
							<img src="images/elements/step1.svg" alt="">
							<h4 class="feat-head">Create Account</h4>
							<p class="feat-desc">Lorem ipsum dolor sit amet, adipiscing elit. Integer tellus estt congue sed  dolor sit amet, adipis  dolor sit amet.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feat-box v2 text-center">
							<img src="images/elements/step2.svg" alt="">
							<h4 class="feat-head">Describe your System</h4>
							<p class="feat-desc">Lorem ipsum dolor sit amet, adipiscing elit. Integer tellus estt congue sed  dolor sit amet, adipis  dolor sit amet.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feat-box v2 text-center">
							<img src="images/elements/step3.svg" alt="">
							<h4 class="feat-head">Automate Solution</h4>
							<p class="feat-desc">Lorem ipsum dolor sit amet, adipiscing elit. Integer tellus estt congue sed  dolor sit amet, adipis  dolor sit amet.</p>
						</div>
					</div>

				</div>
			</div>
		</section>
		
		<!-- START ABOUT -->
		<section id="about" class="section_padding">
			<div class="container">	
				<div class="row flex relative align-items-center">
					
					<div class="row">
						
						<div class="box-shadow col-md-10 " style="background: #fff;">
							<div class="row">
								<div class="col-md-5 no-pl col-sm-12 col-xs-12">
									<div class="about_img">
										<img src="images/about1.png" alt="about-img">
										<a href="#" class="video-btn"><i class="fa fa-play"></i></a>
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
									<div class="about_content_area">
										<h5 class="blue has-before">Dedicated Artificial Intelligence</h5>
										<h3>Get Benefits of using latest Artificial Intelligence.</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tellus est, finibus ut congue sed, faucibus ut dui. Sed congue nisl dolor, id dapibus leo elementum posuere. Ut aliquam metus quis laoreet elementum. In hac habitasse platea dictumst. In hac habitasse platea dictumst.</p>
										<div class="about_me">
		                                    <div class="name">
		                                        <span>Company Name</span>
		                                        Your Company Name
		                                    </div>
		                                    
		                                    <div class="phone">
		                                        <span>Phone Number</span>
												+00 253 265 4455
		                                    </div>
		                                    <div class="email">
		                                        <span>Contact Email</span>
		                                        <a href="mailto:info@yourdomain.com">info@yourdomain.com</a>
		                                    </div>
		                                </div>

										<div class="about_btn">
											<a href="#0" class="btn btn-default contact_number hidden-md">contact Us</a>
										</div>
									</div>
								</div> 
							</div>
						</div>
						<div class="col-md-2"><div class="about-txt"> <span>ABOUT US</span></div></div>

					</div>
				</div>
			</div> <!--- END CONTAINER -->
		</section>
		<!-- END ABOUT -->

		<!-- START FEATURES -->	
		<section  class="features section_padding pb_70">
			<div class="container">
				
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="resume-container">
							<div class="row">

								<div class="col-md-12">
									<h5 class="c-cyan">Why Choose Us</h5>
								    <h3 class="w-text"><i class="icon-trophy"></i>Core Features:</h3>
									<div class="single_resume wow fadeInLeft" data-wow-delay="0.2s">
										<div class="icon-box">
											<img src="images/elements/i1.png" alt="">
										</div>
										<div class="resume-desc">
											<h5 class="w-text">Smart Analyzer of the News</h5>
										    <p class="g-text">Lorem ipsum dolor sit amet, consectetur adipisicing
										    elit. Enim eveniet incidunt</p>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="single_resume wow fadeInLeft" data-wow-delay="0.4s">
										<div class="icon-box">
											<img src="images/elements/i2.png" alt="">
										</div>
										<div class="resume-desc">
											<h5 class="w-text">Adaptive Chatbot Assistant</h5>
										    <p class="g-text">Lorem ipsum dolor sit amet, consectetur adipisicing
										    elit. Enim eveniet incidunt</p>
										</div>
										
									</div>
								</div>
								<div class="col-md-12">
									<div class="single_resume wow fadeInLeft" data-wow-delay="0.6s">
										<div class="icon-box">
											<img src="images/elements/i3.png" alt="">
										</div>
										<div class="resume-desc">
											<h5 class="w-text">Creative AI Platform</h5>
										    <p class="g-text">Lorem ipsum dolor sit amet, consectetur adipisicing
										    elit. Enim eveniet incidunt</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-sm-12 col-xs-12">
						
					</div>
				</div> <!--- END ROW -->
			</div> <!--- END CONTAINER -->
		</section>
		<!-- END FEATURES -->

		<!-- START COUNTER -->
	    <section id="counter_area" class="counter-v2 gray_bg section_padding">
			<div class="container">
				<div class="row text-left">
					<div class="col-md-7">
						<div class="content_area">
							<h5 class="blue has-before">Dedicated Artificial Intelligence</h5>
							<h3>Get Benefits of using latest Artificial Intelligence Technologies.</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tellus est, finibus ut congue sed, faucibus ut dui. Sed congue nisl dolor, id dapibus leo elementum posuere. Ut aliquam metus In hac habitasse platea dictumst. In hac habitasse platea dictumst.</p>
							<div class="row">
								<div class="col-sm-6 col-xs-12">
									<div class="feat-box">
										<img src="images/elements/f1.png" alt="">
										<h4 class="feat-head">Dedicated Support</h4>
										<p class="feat-desc">Lorem ipsum dolor sit amet, adipiscing elit. Integer tellus estt congue sed.</p>
									</div>
									
								</div>
								<div class="col-sm-6 col-xs-12">
									<div class="feat-box">
										<img src="images/elements/f2.png" alt="">
										<h4 class="feat-head">Latest Technologies</h4>
										<p class="feat-desc">Lorem ipsum dolor sit amet, adipiscing elit. Integer tellus estt congue sed.</p>
									</div>
									
								</div>

							</div>
						</div>
					</div>
					<div class="col-md-5 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="0.2s">
						<div class="facts-wrapper box-shadow">
							<h5 class="blue has-before">Our Fun Facts</h5>
							<h3>Number We Proud Of</h3>
							<p>Lorem ipsum dolor sit amet, it amet, consectetur adip consectetur adipiscing elit. Integer tellus est, finibus ut cit amet, consectetur adip</p>
							<div class="single_counter">
								<span class="co-inner">01</span>
								<div class="icon">
									<i class="icon-happy"></i>
								</div>
								<div class="counter-desc">
									<span class="counter">751</span>
									<p>Happy Clients</p>
								</div>
							</div>

							<div class="single_counter">
								<span class="co-inner">02</span>
								<div class="icon">
									<i class="icon-trophy"></i>
								</div>
								<div class="counter-desc">
									<span class="counter">56</span>
									<p>Awards Received</p>
								</div>
							</div>

							<div class="single_counter">
								<span class="co-inner">03</span>
								<div class="icon">
									<i class="icon-briefcase"></i>
								</div>
								<div class="counter-desc">
									<span class="counter">478</span>
									<p>Successul Projects</p>
								</div>
							</div>

							<div class="single_counter mb-0">
								<span class="co-inner">04</span>
								<div class="icon">
									<i class="icon-profile-male"></i>
								</div>
								<div class="counter-desc">
									<span class="counter">234</span>
									<p>Team Members</p>
								</div>
							</div>
						</div>
						

					</div>

				</div> <!--- END ROW -->
			</div> <!--- END CONTAINER -->
		</section>
		<!-- END COUNTER -->

		
		<!-- START SERVICE -->
		<section id="service" class="serv-bg section_padding pb_70">
			<div class="container">
				<div class="section_heading text-center">
					<h2 class="w-text">Our Main Services</h2>
					<p class="g-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin.</p>
				</div>	
				
				<div class="row text-center">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="service_slider owl-carousel">
							<div class="single_service">
								<div class="service_icon">
									<img src="images/elements/serv1.png" alt="">
								</div>
								<h4>System Automation</h4>
								<P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Integer tellus est.</P>
								<a href="#0" class="btn graen-btn">Learn More</a>
							</div>
							<div class="single_service">
								<div class="service_icon">
									<img src="images/elements/serv2.png" alt="">
								</div>
								<h4> Targeted AI Merketing</h4>
								<P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Integer tellus est.</P>
								<a href="#0" class="btn graen-btn">Learn More</a>
							</div>
							<div class="single_service">
								<div class="service_icon">
									<img src="images/elements/serv3.png" alt="">
								</div>
								<h4>Mobile Security</h4>
								<P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Integer tellus est.</P>
								<a href="#0" class="btn graen-btn">Learn More</a>
							</div>
							<div class="single_service">
								<div class="service_icon">
									<img src="images/elements/serv4.png" alt="">
								</div>
								<h4>AI Business Training</h4>
								<P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Integer tellus est.</P>
								<a href="#0" class="btn graen-btn">Learn More</a>
							</div>
							<div class="single_service">
								<div class="service_icon">
									<img src="images/elements/serv5.png" alt="">
								</div>
								<h4>Business Consulting</h4>
								<P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Integer tellus est.</P>
								<a href="#0" class="btn graen-btn">Learn More</a>
							</div>
							<div class="single_service">
								<div class="service_icon">
									<img src="images/elements/serv6.png" alt="">
								</div>
								<h4>AI-Based Investments</h4>
								<P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Integer tellus est.</P>
								<a href="#0" class="btn graen-btn">Learn More</a>
							</div>
						</div>
					</div> <!-- End Col -->
				</div> <!--- END ROW -->
			</div> <!--- END CONTAINER -->
		</section>
		<!-- END SERVICE -->
		
		<!-- START TESTIMONIALS -->
		<section id="testimonial_area" class="section_padding relative test-bg">
			<div class="testimonial-bg"></div>
			<div class="container">
				<div class="section_heading text-center">
					<h2 class="">What Clients are Saying</h2>
					<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin.</p>
				</div>	
				<div class="row">		
					<div class="col-md-10 col-md-offset-1 over-hiddern text-center">
						<div class="testimonial_area owl-carousel">
							<div class="single_testimonial">
							<h3>subjecttttt</h3>	
							<p class="description">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad asperiores at atque culpa dolores eaque fugiat hic illo ipsam ipsum minima modi necessitatibus nemo officia, omnis perferendis placeat quaerat quas quis ratione rerum sint sit vitae.
								</p>
								<div class="pic">
									<img src="images/testimonial/1.jpg" alt="" />
								</div>
								<h5 class="title">William Baker</h5>
								<span class="post">emailllllllll@ggg</span>
								<br><br><br>
							</div><!-- end Single Testimonials -->	
						</div>
						<div class="single_testimonial">
							
								<p class="description">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad asperiores at atque culpa dolores eaque fugiat hic illo ipsam ipsum minima modi necessitatibus nemo officia, omnis perferendis placeat quaerat quas quis ratione rerum sint sit vitae.
								</p>
								<div class="pic">
									<img src="images/testimonial/2.jpg" alt="" />
								</div>
								<h5 class="title">James Baker</h5>
								<span class="post">Designer</span>
							</div><!-- end Single Testimonials -->
						
						</div>
					</div>
				</div> <!--- END ROW -->
			</div> <!--- END CONTAINER -->
		</section>
		<!-- END TESTIMONIALS -->
		
		<!-- START BLOG -->
		<section id="blog" class="gray_bg section_padding pb_70">
			<div class="container">
				<div class="section_heading text-center">
					<h2>Latest Blog Posts</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin.</p>
				</div>	
					
				<div class="row">
					<div class="blog_slide_area">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single_blog">
								<div class="blog-thumb">
									<div class="blog-image">
										<img src="images/blog/blog1.jpg" class="img-responsive" alt="">
									</div>
									<div class="blog-info">
										<small><i class="fa fa-clock-o"></i>October 21, 2019</small>
										<span>| lifestyle</span>
										<a href="#0"><h4>Beautiful Working Idea.</h4></a>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim eveniet incidunt quidem illum repellat</p>
										<a href="#0" class="btn graen-btn">Read More</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single_blog">
								<div class="blog-thumb">
									<div class="blog-image">
										<img src="images/blog/blog2.jpg" class="img-responsive" alt="">
									</div>
									<div class="blog-info">
										<small><i class="fa fa-clock-o"></i>October 21, 2019</small>
										<span>| lifestyle</span>
										<a href="#0"><h4>Drive Traffic to Website</h4></a>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim eveniet incidunt quidem illum repellat</p>
										<a href="#0" class="btn graen-btn">Read More</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single_blog">
								<div class="blog-thumb">
									<div class="blog-image">
										<img src="images/blog/blog3.jpg" class="img-responsive" alt="">
									</div>
									<div class="blog-info">
										<small><i class="fa fa-clock-o"></i>October 21, 2019</small>
										<span>| lifestyle</span>
										<a href="#0"><h4>Latest Business strategies</h4></a>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim eveniet incidunt quidem illum repellat</p>
										<a href="#0" class="btn graen-btn">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!--- END ROW -->
			</div> <!--- END CONTAINER -->
		</section>
		<!-- END BLOG -->

		<section class="Contact-us section_padding relative" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="about2-wrap relative"></div>
					</div>	
					<div class="box-shadow col-md-10">
						<div class="row">
							<div class="col-md-6 no-pl col-sm-12 col-xs-12">
								<div class="about_img">
									<img src="images/about3.png" alt="about-img" />
								</div>
							</div>
							<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="about_content_area">
									<h5 class="blue">You Are Welcome to become our Client</h5>
									<h3>Contact Us Now!</h3>
									<div class="contact">
										<form id="" method="post" action="" >
											<div class="row">
												<div class="input_padding text-center">
													<div class="form-group col-sm-12">
														<input type="text" name="name" class="form-control" id="first-name" placeholder="Name *" required="required">
													</div>
													<div class="form-group col-sm-12">
														<input type="email" name="email" class="form-control" id="email" placeholder="Email *" required="required">
													</div>
													<div class="form-group col-sm-12">
														<input type="text" name="subject" class="form-control" id="subject" placeholder="Subject *" required="required">
													</div>
													<div class="form-group col-sm-12 mab-none">
														<textarea rows="8" name="contenue" class="form-control" id="description" placeholder="Your Message Here ..." required="required"></textarea>
													</div>
													<a href="afficherMessages.php"><h4>voir tous</h4></a>
													<div class="form-group mb0 col-sm-12">
														<div class="actiaaons">
															<button type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn graen-btn" title="Click here to submit your message!">Send Your Message</button>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="Contact-us section_padding relative" id="reclamation">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="about2-wrap relative"></div>
					</div>	
					<div class="box-shadow col-md-10">
						<div class="row">
							<div class="col-md-6 no-pl col-sm-12 col-xs-12">
								<div class="about_img">
									<img src="images/about3.png" alt="about-img" />
								</div>
							</div>
							<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="about_content_area">
									<h5 class="blue">You Are Welcome to become our Client</h5>
									<h3>Réclamation!</h3>
									<div class="reclamation">
										<form id="" method="post" action="" >
											<div class="row">
												<div class="input_padding text-center">
								
													<div class="form-group col-sm-12 mab-none">
														<textarea rows="8" name="reclamation" class="form-control" id="description" placeholder="Your Reclamation Here ..." required="required"></textarea>
													</div>
													
													<div class="form-group mb0 col-sm-12">
														<div class="actiaaons">
															<button type="submit" value="Send Your Reclamation" name="submit" id="submitButton" class="btn graen-btn" title="Click here to submit your reclamation!">Send Your Reclamation</button>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- START FOOTER -->
		<footer class="footer-sec">
			<div class="container">
				<div class="row text-center">
				
					<div class="col-md-8 col-md-offset-2 col-xs-12">
						<div class="sub_title">
							<a href="#"><span>Home</span> </a>
							<a href="#"><span>About Us</span></a>
							<a href="#"><span>Technology</span> </a>
							<a href="#"><span>Products</span> </a>
							<a href="#"><span>Services</span> </a>
						</div>
						<ul class="banner_social_link">					
							<li><a href="#00"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#0"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#0"><i class="fa fa-linkedin"></i></a></li>		
							<li><a href="#0"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#0"><i class="fa fa-behance"></i></a></li>
						</ul>

						<p class="w-text">CopyRight © 2019 All Rights Reserved</p>
					</div> <!-- END COL -->
				</div> <!--- END ROW -->	
			</div> <!--- END CONTAINER -->
		</footer>
		<!-- END FOOTER -->
		
		<!-- Latest jQuery -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/modernizr-2.8.3.min.js"></script>
		<script src="js/jquery.inview.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/animated-headline.js"></script>
		<script src="js/lightbox.min.js"></script>
		<script src="js/SmoothScroll.js"></script>
		<script src="js/form-contact.js"></script>
		<script src="js/jquery.hoverdir.js"></script>
		<script src="js/scrolltopcontrol.js"></script>
		<script src="js/wow.min.js"></script>
		
		<script src="js/main.js"></script>
	</body>


<!-- Mirrored from robogard-temp.netlify.app/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Nov 2021 00:17:15 GMT -->
</html>		