<?php
// Ruta base para los archivos de idioma
$language_path = __DIR__ . '/sources/languages/';

// Determinar el idioma (por ejemplo, de un parámetro GET)
$language = isset($_GET['lang']) ? $_GET['lang'] : 'english';

// Lista de idiomas permitidos
$allowed_languages = ['spanish', 'english'];

// Construir la ruta completa del archivo de idioma
$language_file = $language_path . "$language.inc";

// Verificar si el idioma es permitido y si el archivo existe
if (in_array($language, $allowed_languages) && file_exists($language_file)) {
    include($language_file);
} else {
    die("Language file not found.");
}
?>
<!DOCTYPE html>
<!-- OLMO - Software, App, SaaS & Startup Landing Pages Pack design by DSAThemes (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">


	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="DSAThemes"/>	
		<meta name="description" content="OLMO - Software, App, SaaS & Startup Landing Pages Pack"/>
		<meta name="keywords" content="Responsive, HTML5, DSAThemes, One Page, Landing, Software, Mobile App, SaaS, Startup, Creative, Freelancers, Digital Product">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<!-- SITE TITLE -->
		<title>Forsvar - Software, App, SaaS & Startup Landing Pages Pack</title>
							
		<!-- FAVICON AND TOUCH ICONS -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
		

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="css/flaticon.css" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="css/menu.css" rel="stylesheet">	
		<link id="effect" href="css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
		<link href="css/magnific-popup.css" rel="stylesheet">	
		<link href="css/owl.carousel.min.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css" rel="stylesheet">

		<!-- ON SCROLL ANIMATION -->
		<link href="css/animate.css" rel="stylesheet">

		<!-- TEMPLATE CSS -->
		<link href="css/style.css" rel="stylesheet"> 
		
		<!-- RESPONSIVE CSS -->
		<link href="css/responsive.css" rel="stylesheet">

	</head>



	<body>




		<!-- PRELOADER SPINNER
		============================================= -->	
		<div id="loading" class="violet-red-loading">
			<div id="loading-center">
				<div id="loading-center-absolute">
					<div class="object" id="object_one"></div>
					<div class="object" id="object_two"></div>
					<div class="object" id="object_three"></div>
					<div class="object" id="object_four"></div>
				</div>
			</div>
		</div>




		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">




			<!-- HEADER
			============================================= -->
			<header id="header" class="header tra-menu navbar-light">
				<div class="header-wrapper">


					<!-- MOBILE HEADER -->
				    <div class="wsmobileheader clearfix">	  	
				    	<span class="smllogo"><img src="images/logo-01.jpeg" alt="mobile-logo"/></span>
				    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>	
				 	</div>


				 	<!-- NAVIGATION MENU -->
				  	<div class="wsmainfull menu clearfix">
	    				<div class="wsmainwp clearfix">


	    					<!-- HEADER LOGO -->
	    					<div class="desktoplogo"><a href="#hero-14" class="logo-black"><img src="images/png-icons/logo-forsvar.png" alt="header-logo"></a></div>
	    					<div class="desktoplogo"><a href="#hero-14" class="logo-white"><img src="images/png-icons/logo-forsvar.png" alt="header-logo"></a></div>

	    					<!-- MAIN MENU -->
	      					<nav class="wsmenu clearfix">
	        					<ul class="wsmenu-list nav-violet-red-hover">


						          	<!-- SIMPLE NAVIGATION LINK -->
									<li class="nl-simple" aria-haspopup="true"><a href="index.php">Home</a></li>


									<li class="nl-simple" aria-haspopup="true"><a href="products.html"><?php echo $lng_products; ?></a></li>

							    	<li class="nl-simple" aria-haspopup="true"><a href="solutions.html"><?php echo $lng_solutions; ?></a></li>


						          	<!-- DROPDOWN MENU -->
						          	<li aria-haspopup="true"><a href="#"><?php echo $lng_company; ?> <span class="wsarrow"></span></a>
	            						<ul class="sub-menu">
	            							<li aria-haspopup="true"><a href="about.html"><?php echo $lng_about; ?></a></li>	
	            							<li aria-haspopup="true"><a href="careers.html"><?php echo $lng_career; ?><span>NEW</span></a></li>
						           		</ul>
								    </li>


								    <!-- HEADER BUTTON -->
								    <li class="nl-simple" aria-haspopup="true">
								    	<a href="#content-4" class="btn btn-violet-red tra-white-hover last-link"><?php echo $lng_book_btn; ?></a>
								    </li> 

									
									<li class="dropdown">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
												<img src="images/png-icons/<?php echo $language; ?>.png" alt="flag" style="width: 20px; height: 20px; margin-right: 5px;">
											</button>
											<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<li>
													<a class="dropdown-item" href="?lang=spanish">
														<img src="images/png-icons/spanish.png" alt="flag" style="width: 20px; height: 20px; margin-right: 5px;">
														Español
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="?lang=english">
														<img src="images/png-icons/english.png" alt="flag" style="width: 20px; height: 20px; margin-right: 5px;">
														English
													</a>
												</li>
											</ul>
										</div>
									</li>



									<!-- HEADER SOCIAL LINKS 													
									<li class="nl-simple white-color header-socials ico-20 clearfix" aria-haspopup="true">
										<span><a href="#" class="ico-facebook"><span class="flaticon-facebook"></span></a></span>
										<span><a href="#" class="ico-twitter"><span class="flaticon-twitter"></span></a></span>
										<span><a href="#" class="ico-instagram"><span class="flaticon-instagram"></span></a></span>
										<span><a href="#" class="ico-dribbble"><span class="flaticon-dribbble"></span></a></span>	
									</li> -->	


	        					</ul>
	        				</nav>	<!-- END MAIN MENU -->


	    				</div>
	    			</div>	<!-- END NAVIGATION MENU -->


				</div>     <!-- End header-wrapper -->
			</header>	<!-- END HEADER -->



			
			<!-- HERO-14
			============================================= -->	
			<section id="hero-14" class="bg-fixed hero-section division">
				<div class="container">	
					<div class="row d-flex align-items-center">


						<!-- HERO TEXT -->
						<div class="col-sm-9 col-md-7 col-lg-5">
							<div class="hero-14-txt white-color wow fadeInRight">

								<!-- Title -->
								<h2 class="h2-xl"><?php echo $lng_principal; ?></h2>

								<!-- Text -->
								<p class="p-xl"><?php echo $lng_principal_sub; ?>
								</p>
														
							</div>
						</div>	<!-- END HERO TEXT -->	


					</div>    <!-- End row --> 	
				</div>	   <!-- End container --> 	
			</section>	<!-- END HERO-14 -->	




			<!-- BRANDS-2
			============================================= -->
			<div id="brands-2" class="wide-70 brands-section division">
				<div class="container">	


					<!-- BRANDS TITLE -->
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="brands-title text-center">
								<p class="p-xl">This guys are using OLMO and they are more than happier ever</p>
							</div>
						</div>
					</div>


					<!-- BRANDS-2 WRAPPER -->
					<div class="brands-2-wrapper">
						<div class="row justify-content-md-center row-cols-2 row-cols-sm-3 row-cols-md-5">


							<!-- BRAND LOGO IMAGE -->
							<div class="col">
								<div class="brand-logo">
									<a href="#">
										<img class="img-fluid" src="images/brand-1.png" alt="brand-logo" />
									</a>
								</div>
							</div>


							<!-- BRAND LOGO IMAGE -->
							<div class="col">
								<div class="brand-logo">
									<a href="#">
										<img class="img-fluid" src="images/brand-2.png" alt="brand-logo" />
									</a>
								</div>
							</div>


							<!-- BRAND LOGO IMAGE -->
							<div class="col">
								<div class="brand-logo">
									<a href="#">
										<img class="img-fluid" src="images/brand-3.png" alt="brand-logo" />
									</a>
								</div>
							</div>


							<!-- BRAND LOGO IMAGE -->
							<div class="col">
								<div class="brand-logo">
									<a href="#">
										<img class="img-fluid" src="images/brand-4.png" alt="brand-logo" />
									</a>
								</div>
							</div>


							<!-- BRAND LOGO IMAGE -->
							<div class="col">
								<div class="brand-logo">
									<a href="#">
										<img class="img-fluid" src="images/brand-5.png" alt="brand-logo" />
									</a>
								</div>
							</div>


							<!-- BRAND LOGO IMAGE -->
							<div class="col">
								<div class="brand-logo">
									<a href="#">
										<img class="img-fluid" src="images/brand-8.png" alt="brand-logo" />
									</a>
								</div>
							</div>


							<!-- BRAND LOGO IMAGE -->
							<div class="col">
								<div class="brand-logo">
									<a href="#">
										<img class="img-fluid" src="images/brand-7.png" alt="brand-logo" />
									</a>
								</div>
							</div>


							<!-- BRAND LOGO IMAGE -->
							<div class="col">
								<div class="brand-logo">
									<a href="#">
										<img class="img-fluid" src="images/brand-5.png" alt="brand-logo" />
									</a>
								</div>
							</div>


							<!-- BRAND LOGO IMAGE -->
							<div class="col">
								<div class="brand-logo">
									<a href="#">
										<img class="img-fluid" src="images/brand-8.png" alt="brand-logo" />
									</a>
								</div>
							</div>


							<!-- BRAND LOGO IMAGE -->
							<div class="col">
								<div class="brand-logo">
									<a href="#">
										<img class="img-fluid" src="images/brand-2.png" alt="brand-logo" />
									</a>
								</div>
							</div>


						</div>
					</div>  <!-- END BRANDS-2 WRAPPER -->


				</div>     <!-- End container -->
			</div>	<!-- END BRANDS-2 -->




			<!-- FEATURES-8
			============================================= -->
			<section id="features-8" class="bg-snow wide-60 features-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row justify-content-center">	
						<div class="col-lg-10 col-xl-8">
							<div class="section-title title-01 mb-70">		

								<!-- Title -->	
								<h2 class="h2-md"><?php echo $lng_principal_sub2; ?></h2>	

								<!-- Text -->	
								<p class="p-xl"><?php echo $lng_principal_sub3; ?>
								</p>
									
							</div>	
						</div>
					</div>


					<!-- FEATURES-8 WRAPPER -->	
			 		<div class="fbox-8-wrapper text-center">
			 			<div class="row row-cols-1 row-cols-md-3">


		 					<!-- FEATURE BOX #1 -->
		 					<div class="col">
		 						<div class="fbox-8 mb-40 wow fadeInUp">

									<!-- Image -->
									<div class="fbox-img bg-whitesmoke-gradient">
										<img class="img-fluid" src="images/img-21.png" alt="feature-icon" />
									</div>

									<!-- Title -->
									<h5 class="h5-md"><?php echo $lng_tech; ?></h5>
											
									<!-- Text -->
									<p class="p-lg"><?php echo $lng_tech_sub; ?>
									</p>

		 						</div>
		 					</div>


		 					<!-- FEATURE BOX #2 -->
		 					<div class="col">
		 						<div class="fbox-8 mb-40 wow fadeInUp">

									<!-- Image -->
									<div class="fbox-img bg-whitesmoke-gradient">
										<img class="img-fluid" src="images/img-23.png" alt="feature-icon" />
									</div>

									<!-- Title -->
									<h5 class="h5-md"><?php echo $lng_tech2; ?></h5>
											
									<!-- Text -->
									<p class="p-lg"><?php echo $lng_tech2_sub; ?>
									</p>

		 						</div>
		 					</div>


		 					<!-- FEATURE BOX #3 -->
		 					<div class="col">
		 						<div class="fbox-8 mb-40 wow fadeInUp">

									<!-- Image -->
									<div class="fbox-img bg-whitesmoke-gradient">
										<img class="img-fluid" src="images/img-24	.png" alt="feature-icon" />
									</div>

									<!-- Title -->
									<h5 class="h5-md"><?php echo $lng_tech3; ?></h5>
											
									<!-- Text -->
									<p class="p-lg"><?php echo $lng_tech3_sub; ?>
									</p>

		 						</div>
		 					</div>	


				 		</div>  <!-- End row -->	
				 	</div>	<!-- END FEATURES-8 WRAPPER -->	


				</div>	   <!-- End container -->		
			</section>	<!-- END FEATURES-8 -->	


			<!-- DIVIDER LINE -->
			<hr class="divider">




			<!-- FEATURES-4
			============================================= -->
			<section id="features-4" class="wide-50 features-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row justify-content-center">	
						<div class="col-lg-10 col-xl-8">
							<div class="section-title title-01 mb-70">		

								<!-- Title -->	
								<h2 class="h2-md"><?php echo $lng_better_title; ?></h2>	

								<!-- Text -->	
								<p class="p-xl"><?php echo $lng_better_subtitle; ?>
								</p>
									
							</div>	
						</div>
					</div>


					<!-- FEATURES-4 WRAPPER -->
					<div class="fbox-4-wrapper fbox-4-wide">
						<div class="row row-cols-1 row-cols-md-2">


							<!-- FEATURE BOX #1 -->
		 					<div class="col">
		 						<div class="fbox-4 pr-25 mb-40 wow fadeInUp">

		 							<!-- Icon -->
		 							<div class="fbox-ico">
		 								<div class="ico-65">
											<span class="flaticon-credit-card-1"></span>
										</div>
									</div>

									<!-- Text -->
									<div class="fbox-txt">
		
										<!-- Title -->
										<h5 class="h5-md"><?php echo $lng_better; ?></h5>
											
										<!-- Text -->
										<p class="p-lg"><?php echo $lng_better_sub; ?>
										</p>

									</div>

		 						</div>
		 					</div>	


		 					<!-- FEATURE BOX #2 -->
		 					<div class="col">
		 						<div class="fbox-4 pl-25 mb-40 wow fadeInUp">

		 							<!-- Icon -->
		 							<div class="fbox-ico">
		 								<div class="ico-65">
											<span class="flaticon-wallet"></span>
										</div>
									</div>

									<!-- Text -->
									<div class="fbox-txt">
		
										<!-- Title -->
										<h5 class="h5-md"><?php echo $lng_better2; ?></h5>
											
										<!-- Text -->
										<p class="p-lg"><?php echo $lng_better2_sub; ?>
										</p>

									</div>

		 						</div>
		 					</div>	


		 					<!-- FEATURE BOX #3 -->
		 					<div class="col">
		 						<div class="fbox-4 pr-25 mb-40 wow fadeInUp">

		 							<!-- Icon -->
		 							<div class="fbox-ico">
		 								<div class="ico-65">
											<span class="flaticon-dollar"></span>
										</div>
									</div>

									<!-- Text -->
									<div class="fbox-txt">
		
										<!-- Title -->
										<h5 class="h5-md"><?php echo $lng_better3; ?></h5>
											
										<!-- Text -->
										<p class="p-lg"><?php echo $lng_better3_sub; ?>
										</p>

									</div>

		 						</div>
		 					</div>	


		 					<!-- FEATURE BOX #4 -->
		 					<div class="col">
		 						<div class="fbox-4 pl-25 mb-40 wow fadeInUp">

		 							<!-- Icon -->
		 							<div class="fbox-ico">
		 								<div class="ico-65">
											<span class="flaticon-negotiation"></span>
										</div>
									</div>

									<!-- Text -->
									<div class="fbox-txt">
		
										<!-- Title -->
										<h5 class="h5-md"><?php echo $lng_better4; ?></h5>
											
										<!-- Text -->
										<p class="p-lg"><?php echo $lng_better4_sub; ?>
										</p>

									</div>

		 						</div>
		 					</div>	


		 					<!-- FEATURE BOX #5 -->
		 					<div class="col">
		 						<div class="fbox-4 pr-25 mb-40 wow fadeInUp">

		 							<!-- Icon -->
		 							<div class="fbox-ico">
		 								<div class="ico-65">
											<span class="flaticon-pay-day"></span>
										</div>
									</div>

									<!-- Text -->
									<div class="fbox-txt">
		
										<!-- Title -->
										<h5 class="h5-md"><?php echo $lng_better5; ?></h5>
											
										<!-- Text -->
										<p class="p-lg"><?php echo $lng_better5_sub; ?>
										</p>

									</div>

		 						</div>
		 					</div>	


		 					<!-- FEATURE BOX #6 -->
		 					<div class="col">
		 						<div class="fbox-4 pl-25 mb-40 wow fadeInUp">

		 							<!-- Icon -->
		 							<div class="fbox-ico">
		 								<div class="ico-65">
											<span class="flaticon-rotation-lock"></span>
										</div>
									</div>

									<!-- Text -->
									<div class="fbox-txt">
		
										<!-- Title -->
										<h5 class="h5-md"><?php echo $lng_better6; ?></h5>
											
										<!-- Text -->
										<p class="p-lg"><?php echo $lng_better6_sub; ?>
										</p>

									</div>

		 						</div>
		 					</div>	


		 				</div>
					</div>    <!-- END FEATURES-4 WRAPPER -->


				</div>     <!-- End container --> 	
			</section>	<!-- END FEATURES-4 -->




			<!-- CONTENT-3
			============================================= -->
			<section id="content-3" class="content-3 bg-snow wide-60 content-section division">
				<div class="container">


					<!-- TOP ROW -->
					<div class="top-row pb-50">
						<div class="row d-flex align-items-center">


							<!-- IMAGE BLOCK -->
							<div class="col-md-5 col-lg-6">
								<div class="img-block left-column wow fadeInRight">
									<img class="img-fluid" src="images/banking-03.png" alt="content-image">
								</div>
							</div>


							<!-- TEXT BLOCK -->	
							<div class="col-md-7 col-lg-6">
								<div class="txt-block right-column wow fadeInLeft">

									<!-- Section ID -->	
						 			<span class="section-id txt-upcase"><?php echo $lng_secure_tit; ?></span>

									<!-- Title -->	
									<h2 class="h2-xs"><?php echo $lng_secure; ?></h2>

									<!-- Text -->	
									<p class="p-lg"><?php echo $lng_secure_sub; ?>
									</p>
								</div>
							</div>	<!-- END TEXT BLOCK -->	


						</div>
					</div>	<!-- END TOP ROW -->



				</div>	   <!-- End container -->
			</section>	<!-- END CONTENT-3 -->




			<!-- CONTENT-2
			============================================= -->
			<section id="content-2" class="content-2 wide-60 content-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row justify-content-center">	
						<div class="col-lg-10 col-xl-8">
							<div class="section-title title-01 mb-70">		

								<!-- Title -->	
								<h2 class="h2-md"><?php echo $lng_simplicity; ?></h2>	

								<!-- Text -->	
								<p class="p-xl"><?php echo $lng_simplicity_sub; ?>
								</p>
									
							</div>	
						</div>
					</div>


					<div class="row d-flex align-items-center">


						<!-- IMAGE BLOCK -->
						<div class="col-md-5 col-lg-6">
							<div class="rel img-block left-column wow fadeInRight">
			 					<img class="img-fluid" src="images/banking-01.png" alt="video-preview">
							</div>
						</div>


						<!-- TEXT BLOCK -->	
						<div class="col-md-7 col-lg-6">
							<div class="txt-block right-column wow fadeInLeft">

								<!-- TEXT BOX -->	
								<div class="txt-box mb-20">

									<!-- Title -->	
									<h5 class="h5-lg"><?php echo $lng_simplicity2; ?></h5>

									<!-- Text -->	
									<p class="p-lg"><?php echo $lng_simplicity2_sub; ?>
									</p>

								</div>

							</div>
						</div>	<!-- END TEXT BLOCK -->	


					</div>	   <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END CONTENT-2 -->




			<!-- DIVIDER LINE -->
			<hr class="divider">




			<!-- STATISTIC-2
			============================================= -->
			<section id="statistic-2" class="wide-100 statistic-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- TEXT BLOCK -->	
						<div class="col-lg-6">
							<div class="txt-block right-column wow fadeInLeft">
								<h3 class="h3-xs"><?php echo $lng_impact; ?></h3>
							</div>
						</div>


						<!-- STATISTIC BLOCK #1 -->
						<div class="col-sm-5 col-md-4 col-lg-3 offset-sm-1 offset-md-2 offset-lg-1">						
							<div class="statistic-block wow fadeInUp">	

								<!-- Text -->
								<h2 class="h2-title-xs statistic-number"><span class="count-element"><?php echo $lng_impact2; ?></span>B</h2>
								<h4 class="h4-xs"><?php echo $lng_impact2_sub; ?></h4>
									

							</div>						
						</div>


						<!-- STATISTIC BLOCK #2 -->
						<div class="col-sm-5 col-md-4 col-lg-2">						
							<div class="statistic-block wow fadeInUp">	

								<!-- Text -->
								<h2 class="h2-title-xs statistic-number">
									<span class="count-element"><?php echo $lng_impact3; ?></span>%</h2>
								</h2>

								<h4 class="h4-xs"><?php echo $lng_impact3_sub; ?></h4>
								</div>																								
							</div>								
						</div>


					</div>    <!-- End row -->
				</div>	   <!-- End container -->		
			</section>	<!-- END STATISTIC-2 -->




			<!-- DIVIDER LINE -->
			<hr class="divider">




			<!-- TESTIMONIALS-1
			============================================= -->
			<section id="reviews-1" class="wide-100 bg-whitesmoke-gradient reviews-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row justify-content-center">	
						<div class="col-lg-10 col-xl-8">
							<div class="section-title title-01 mb-70">		

								<!-- Title -->	
								<h2 class="h2-md"><?php echo $lng_nightmares; ?></h2>	

								<!-- Text -->	
								<p class="p-xl"><?php echo $lng_nightmares_sub; ?>
								</p>
									
							</div>	
						</div>
					</div>


					<!-- TESTIMONIALS CONTENT -->
					<div class="row">
						<div class="col">					
							<div class="owl-carousel owl-theme reviews-1-wrapper">

						
								<!-- TESTIMONIAL #1 -->
								<div class="review-1">

									<!-- Quote Icon -->
		 							<div class="review-1-ico ico-25">
										<span class="flaticon-left-quote"></span>
									</div>

									<!-- Text -->
									<div class="review-1-txt">

										<!-- Text -->
										<p class="p-lg"><?php echo $lng_nightmare1; ?>		   
										</p>

										<!-- Testimonial Author -->
										<div class="author-data clearfix">

											<!-- Testimonial Avatar -->
											<div class="review-avatar">
												<img src="images/review-author-1.jpg" alt="review-avatar">
											</div>
														
											<!-- Testimonial Author -->
											<div class="review-author">

												<h6 class="h6-xl">Scott Boxer</h6>
												<p class="p-md">HR Director</p>

											</div>	

										</div>	<!-- End Testimonial Author -->

									</div>	<!-- End Text -->

								</div>	<!-- END TESTIMONIAL #1 -->
						
						
								<!-- TESTIMONIAL #2 -->
								<div class="review-1">

									<!-- Quote Icon -->
		 							<div class="review-1-ico ico-25">
										<span class="flaticon-left-quote"></span>
									</div>

									<!-- Text -->
									<div class="review-1-txt">

										<!-- Text -->
										<p class="p-lg"><?php echo $lng_nightmare2; ?> 			   
										</p>

										<!-- Testimonial Author -->
										<div class="author-data clearfix">

											<!-- Testimonial Avatar -->
											<div class="review-avatar">
												<img src="images/review-author-2.jpg" alt="review-avatar">
											</div>
														
											<!-- Testimonial Author -->
											<div class="review-author">

												<h6 class="h6-xl">Joel Peterson</h6>
												<p class="p-md">Provider Account Manager</p>

											</div>	

										</div>	<!-- End Testimonial Author -->

									</div>	<!-- End Text -->

								</div>	<!-- END TESTIMONIAL #2 -->
						
						
								<!-- TESTIMONIAL #3 -->
								<div class="review-1">

									<!-- Quote Icon -->
		 							<div class="review-1-ico ico-25">
										<span class="flaticon-left-quote"></span>
									</div>

									<!-- Text -->
									<div class="review-1-txt">

										<!-- Text -->
										<p class="p-lg"><?php echo $lng_nightmare3; ?>
										</p>

										<!-- Testimonial Author -->
										<div class="author-data clearfix">

											<!-- Testimonial Avatar -->
											<div class="review-avatar">
												<img src="images/review-author-3.jpg" alt="review-avatar">
											</div>
														
											<!-- Testimonial Author -->
											<div class="review-author">

												<h6 class="h6-xl">Marisol Dominguez</h6>
												<p class="p-md">Product Manager
												</p>


											</div>	

										</div>	<!-- End Testimonial Author -->

									</div>	<!-- End Text -->

								</div>	<!-- END TESTIMONIAL #3 -->


								<!-- TESTIMONIAL #4 -->
								<div class="review-1">

									<!-- Quote Icon -->
		 							<div class="review-1-ico ico-25">
										<span class="flaticon-left-quote"></span>
									</div>

									<!-- Text -->
									<div class="review-1-txt">

										<!-- Text -->
										<p class="p-lg"><?php echo $lng_nightmare4; ?>
										</p>

										<!-- Testimonial Author -->
										<div class="author-data clearfix">

											<!-- Testimonial Avatar -->
											<div class="review-avatar">
												<img src="images/review-author-4.jpg" alt="review-avatar">
											</div>
														
											<!-- Testimonial Author -->
											<div class="review-author">

												<h6 class="h6-xl">Leslie Darlington</h6>
												<p class="p-md">Data Team</p>


											</div>	

										</div>	<!-- End Testimonial Author -->

									</div>	<!-- End Text -->

								</div>	<!-- END TESTIMONIAL #4 -->
								
								
								<!-- TESTIMONIAL #5 -->
								<div class="review-1">

									<!-- Quote Icon -->
		 							<div class="review-1-ico ico-25">
										<span class="flaticon-left-quote"></span>
									</div>

									<!-- Text -->
									<div class="review-1-txt">

										<!-- Text -->
										<p class="p-lg"><?php echo $lng_nightmare5; ?>
										</p>

										<!-- Testimonial Author -->
										<div class="author-data clearfix">

											<!-- Testimonial Avatar -->
											<div class="review-avatar">
												<img src="images/review-author-5.jpg" alt="review-avatar">
											</div>
														
											<!-- Testimonial Author -->
											<div class="review-author">

												<h6 class="h6-xl">Jennifer Harper</h6>
												<p class="p-md">Sales Director</p>


											</div>	

										</div>	<!-- End Testimonial Author -->

									</div>	<!-- End Text -->

								</div>	<!-- END TESTIMONIAL #5 -->
								
								
								<!-- TESTIMONIAL #6 -->
								<div class="review-1">

									<!-- Quote Icon -->
		 							<div class="review-1-ico ico-25">
										<span class="flaticon-left-quote"></span>
									</div>

									<!-- Text -->
									<div class="review-1-txt">

										<!-- Text -->
										<p class="p-lg"><?php echo $lng_nightmare6; ?>		   
										</p>

										<!-- Testimonial Author -->
										<div class="author-data clearfix">

											<!-- Testimonial Avatar -->
											<div class="review-avatar">
												<img src="images/review-author-6.jpg" alt="review-avatar">
											</div>
														
											<!-- Testimonial Author -->
											<div class="review-author">

												<h6 class="h6-xl">Jonathan Barnes</h6>
												<p class="p-md">Provider Specialist</p>


											</div>	

										</div>	<!-- End Testimonial Author -->

									</div>	<!-- End Text -->

								</div>	<!-- END TESTIMONIAL #6 -->
								

							
							</div>
						</div>									
					</div>	<!-- END TESTIMONIALS CONTENT --> 


				</div>     <!-- End container -->
			</section>	<!-- END TESTIMONIALS-1 -->



			<!-- CONTENT-4
			============================================= -->
			<section id="content-4" class="content-4 pt-80 content-section">
				<div class="bg-inner bg-04 pb-100 division text-center-container">
					<div class="container d-flex justify-content-center align-items-center text-center-content">
						
						<!-- TEXT AND BUTTON BLOCK -->
						<div class="content-wrapper text-center">
							<!-- TEXT BLOCK -->
							<div class="txt-block left-column white-color wow fadeInLeft">
								<!-- Title -->	
								<h3 class="h3-xs"><?php echo $lng_bottom; ?></h3>
							</div>
							<!-- BUTTON BLOCK -->
							<div class="btn-block">
								<a href="#content-4" class="btn btn-violet-red tra-white-hover last-link"><?php echo $lng_book_btn; ?></a>
							</div>
						</div>

					</div>
				</div>
			</section>




			<!-- FOOTER-4
			============================================= -->
			<footer id="footer-4" class="footer division">
				<div class="container">


					<!-- FOOTER CONTENT -->
					<div class="row">	


						<!-- FOOTER INFO -->
						<div class="col-lg-3">
							<div class="footer-info mb-40">
								<img class="footer-logo" src="images/png-icons/logo-forsvar.png" alt="footer-logo">
							</div>	
						</div>	


						<!-- FOOTER LINKS -->
						<div class="col-sm-6 col-md-3 col-lg-2 col-lg-2 col-xl-2 offset-xl-1">
							<div class="footer-links mb-40">
							
								<!-- Title -->
								<h6 class="h6-xl">About</h6>

								<!-- Footer Links -->
								<ul class="foo-links text-secondary clearfix">
									<li><p class="p-md"><a href="#">About Us</a></p></li>	
									<li><p class="p-md"><a href="#">Our Team</a></p></li>
									<li><p class="p-md"><a href="#">Careers</a></p></li>
									<li><p class="p-md"><a href="#">Press & Media</a></p></li>
									<li><p class="p-md"><a href="#">Advertising</a></p></li>						
								</ul>

							</div>
						</div>


						<!-- FOOTER LINKS -->
						<div class="col-sm-6 col-md-3 col-lg-2">
							<div class="footer-links mb-40">
							
								<!-- Title -->
								<h6 class="h6-xl">Discover</h6>

								<!-- Footer List -->
								<ul class="foo-links text-secondary clearfix">							
									<li><p class="p-md"><a href="#">Our Blog</a></p></li>										
									<li><p class="p-md"><a href="#">Plans & Pricing</a></p></li>
									<li><p class="p-md"><a href="#">Testimonials</a></p></li>
									<li><p class="p-md"><a href="#">Knowledge Base</a></p></li>
									<li><p class="p-md"><a href="#">Cookie Policy</a></p></li>					
								</ul>

							</div>
						</div>


						<!-- FOOTER LINKS -->
						<div class="col-sm-6 col-md-3 col-lg-2">
							<div class="footer-links mb-40">
												
								<!-- Title -->
								<h6 class="h6-xl">Support</h6>

								<!-- Footer List -->
								<ul class="foo-links text-secondary clearfix">
									<li><p class="p-md"><a href="#">FAQs</a></p></li>
									<li><p class="p-md"><a href="#">Editor Help</a></p></li>
									<li><p class="p-md"><a href="#">Community</a></p></li>											
									<li><p class="p-md"><a href="#">Live Chatting</a></p></li>	
									<li><p class="p-md"><a href="#">Contact Us</a></p></li>								
								</ul>

							</div>	
						</div>	


						<!-- FOOTER LINKS -->
						<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2">
							<div class="footer-links mb-40">
												
								<!-- Title -->
								<h6 class="h6-xl">Connect With Us</h6>

								<!-- Social Links -->	
								<ul class="footer-socials text-secondary ico-25 text-center clearfix">		
									<li><a href="#"><span class="flaticon-facebook"></span></a></li>
									<li><a href="#"><span class="flaticon-twitter"></span></a></li>
									<li><a href="#"><span class="flaticon-github"></span></a></li>
									<li><a href="#"><span class="flaticon-youtube"></span></a></li>
								</ul>

							</div>	
						</div>	


					</div>	<!-- END FOOTER CONTENT -->


					<hr>


					<!-- BOTTOM FOOTER -->
					<div class="bottom-footer">
						<div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">


							<!-- FOOTER COPYRIGHT -->
							<div class="col">
								<div class="footer-copyright">
									<p>&copy; 2010 - 2021 OLMO. All Rights Reserved</p>
								</div>
							</div>


							<!-- BOTTOM FOOTER LINKS -->
							<div class="col">
								<ul class="bottom-footer-list text-secondary text-end">
									<li class="first-li"><p><a href="#">Privacy Policy</a></p></li>
									<li class="last-li"><p><a href="#">Terms & Conditions</a></p></li>
								</ul>
							</div>


						</div>  <!-- End row -->
					</div>	<!-- BOTTOM FOOTER -->


				</div>
			</footer>	<!-- FOOTER-4 -->




		</div>	<!-- END PAGE CONTENT -->	
			



		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="js/jquery-3.6.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.easing.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/jquery.scrollto.js"></script>	
		<script src="js/menu.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/quick-form.js"></script>	
		<script src="js/request-form.js"></script>	
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>	
		<script src="js/wow.js"></script>
				
		<!-- Custom Script -->		
		<script src="js/custom.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->															
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->


			
	</body>



</html>