<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Covid19</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Landing Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- animation css files -->
	<link rel="stylesheet" href="css/animation-aos.css">
	<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<!-- //animation css files -->

	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/fontawesome-all.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<!-- header -->
<header class="index-banner">
    <!-- nav -->
    <nav class="main-header">
      <div id="brand" data-aos="zoom-in-up">
        <div id="logo">
          <a href="index.html">
            <i class="fab fa-blackberry"></i>
          </a>
        </div>
        <div id="word-mark">
          <h1>
            <a href="index.html">Landing</a>
          </h1>
        </div>
      </div>
      <div id="menu">
        <div id="menu-toggle">
          <div id="menu-icon">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
        </div>
		

        <ul class="text-center text-capitalize nav-agile" data-aos="zoom-in-up">
		
		    @if (Route::has('login'))
               
                    @auth
					<li>
		  				<a href="{{ url('/home') }}" class="btn w3ls-btn">Home</a>
          			</li>
                    @else
					<li>
		  				<a href="{{ route('login') }}" class="btn w3ls-btn">Login</a>
         			</li>

                        @if (Route::has('register'))
							<li>
		 	 					<a href="{{ route('register') }}" class="scroll">Register</a>
          					</li>
                        @endif
                    @endauth
                
            @endif
          <li>
            <a href="#contact" class="scroll">Contact</a>
          </li>
          <li>
            <button type="button" class="btn w3ls-btn" data-toggle="modal" aria-pressed="false" data-target="#exampleModalCenter2">
              Login
            </button>
          </li>
        </ul>
      </div>
    </nav>
    <!-- //nav -->
	<!-- banner -->
	<div class="banner layer" id="home">
		<div class="container">
			<div class="row banner-text">
				<div class="slider-info col-lg-8">
					<div class="agileinfo-logo mt-5">
						<h2 data-aos="fade-down">
							<span class="fab fa-blackberry text-center"></span> RESULTAT DU TEST
						</h2>
					</div>
					
					<h4 class="txt-w4_agile" data-aos="fade-down">Vous presente a 95% les symptomes du Covid19 </h4>
				</div>
				<div class="col-lg-4 col-md-8 mt-lg-0 mt-5 banner-form" data-aos="fade-left">
					<h5><i class="fas mr-2 fa-laptop"></i> Register Now</h5>
					<form method="POST" action="{{ route('patient') }}" class="mt-4">
    
                    @csrf
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nom du Patient : </strong>
                                <input type="text" name="name" class="form-control" placeholder="Nom du patient"> 
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Prenom du Patient: </strong>
                                <input class="form-control" type="text" name="prenom" class="form-control" placeholder=" prenom"> 
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong> Ville de Residence: </strong>
                                <input class="form-control" type="text" name="VilleResidence" class="form-control" placeholder="ville de residence"> 
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong> Telephone: </strong>
                                <input class="form-control" type="text" name="telephone" class="form-control" placeholder="numero de telephone"> 
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Date de naissance: </strong>
                                <input class="form-control" type="date" name="dateNais" class="form-control" placeholder="votre dete de naissance ici"> 
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Email: </strong>
                                <input class="form-control" type="email" name="email" class="form-control" placeholder="votre email ici"> 
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Mot de passe: </strong>
                                <input class="form-control" type="password" name="password" class="form-control" placeholder="votre mot de passe ici"> 
                            </div>
                        </div>


                        <div class="col-xs-12 col-md-12 text-center">
                            <button class="form-control text-capitalize" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </form>

                </div>
            </div>
        </div>
    </div>



</header>
<!-- //header -->

<!-- banner bottom -->

<!-- process -->

<!--/pricing -->
<section class="pricing bg-light py-5" id="pricing">
	<div class="container py-lg-3">
		<div class="inner-sec">
			<h3 class="heading mb-5 text-center" data-aos="zoom-in"> Pricing plans</h3>
			<div class="price-right">
				<div class="tabs">
					<ul class="nav nav-pills my-md-5 my-3 justify-content-center" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Weekly</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Monthly</a>
						</li>

					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							<div class="menu-grids">
								<div class="row t-in">
									<div class="col-lg-3 col-sm-6 price-main-info" data-aos="zoom-in-up">
										<div class="price-inner card box-shadow p-4">

											<div class="card-body">
												<h4 class="">Basic</h4>
												<h5 class="card-title pricing-card-title">
													<span class=""></span>Free

												</h5>
												<ul class="list-unstyled mt-3 mb-4">
													<li>100 MB Disk Space</li>
													<li>2 Sub domains</li>
													<li>5 Email Accounts</li>
													<li>24/7 support</li>
												</ul>
												<div class="log-in mt-md-3 mt-2">
													<a class="btn scroll" href="#contact">Select</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 mt-md-0 mt-5 price-main-info" data-aos="zoom-in-up">
										<div class="price-inner card box-shadow p-4">

											<div class="card-body">
												<h4 class="">Satandard</h4>
												<h5 class="card-title pricing-card-title">
													<span class="">$</span>30<span>/mon</span>

												</h5>
												<ul class="list-unstyled mt-3 mb-4">
													<li>100 MB Disk Space</li>
													<li>2 Sub domains</li>
													<li>5 Email Accounts</li>
													<li>24/7 support</li>
												</ul>
												<div class="log-in mt-md-3 mt-2">
													<a class="btn scroll" href="#contact">Select</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 price-main-info" data-aos="zoom-in-up">
										<div class="price-inner card box-shadow p-4">

											<div class="card-body">
												<h4 class="">Business</h4>
												<h5 class="card-title pricing-card-title">
													<span class="">$</span>90<span>/mon</span>

												</h5>
												<ul class="list-unstyled mt-3 mb-4">
													<li>100 MB Disk Space</li>
													<li>2 Sub domains</li>
													<li>5 Email Accounts</li>
													<li>24/7 support</li>
												</ul>
												<div class="log-in mt-md-3 mt-2">
													<a class="btn scroll" href="#contact">Select</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 price-main-info" data-aos="zoom-in-up">
										<div class="price-inner card box-shadow p-4">

											<div class="card-body">
												<h4 class="">Basic</h4>
												<h5 class="card-title pricing-card-title">
													<span class="">$</span>120<span>/mon</span>

												</h5>
												<ul class="list-unstyled mt-3 mb-4">
													<li>100 MB Disk Space</li>
													<li>2 Sub domains</li>
													<li>5 Email Accounts</li>
													<li>24/7 support</li>
												</ul>
												<div class="log-in mt-md-3 mt-2">
													<a class="btn scroll" href="#contact">Select</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
							<div class="menu-grids mt-4">
								<div class="row t-in">
									<div class="col-lg-3 col-sm-6 price-main-info" data-aos="zoom-in-up">
										<div class="price-inner card box-shadow p-4">

											<div class="card-body">
												<h4 class="">Standard</h4>
												<h5 class="card-title pricing-card-title">
													<span class="">$</span>60

												</h5>
												<ul class="list-unstyled mt-3 mb-4">
													<li>100 MB Disk Space</li>
													<li>2 Sub domains</li>
													<li>5 Email Accounts</li>
													<li>24/7 support</li>
												</ul>
												<div class="log-in mt-md-3 mt-2">
													<a class="btn scroll" href="#contact">Select</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 mt-md-0 mt-5 price-main-info" data-aos="zoom-in-up">
										<div class="price-inner card box-shadow p-4">

											<div class="card-body">
												<h4 class="">Business</h4>
												<h5 class="card-title pricing-card-title">
													<span class="">$</span>80

												</h5>
												<ul class="list-unstyled mt-3 mb-4">
													<li>100 MB Disk Space</li>
													<li>2 Sub domains</li>
													<li>5 Email Accounts</li>
													<li>24/7 support</li>
												</ul>
												<div class="log-in mt-md-3 mt-2">
													<a class="btn scroll" href="#contact">Select</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 price-main-info" data-aos="zoom-in-up">
										<div class="price-inner card box-shadow p-4">

											<div class="card-body">
												<h4 class="">Business</h4>
												<h5 class="card-title pricing-card-title">
													<span class="">$</span>90

												</h5>
												<ul class="list-unstyled mt-3 mb-4">
													<li>100 MB Disk Space</li>
													<li>2 Sub domains</li>
													<li>5 Email Accounts</li>
													<li>24/7 support</li>
												</ul>
												<div class="log-in mt-md-3 mt-2">
													<a class="btn scroll" href="#contact">Select</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 price-main-info" data-aos="zoom-in-up">
										<div class="price-inner card box-shadow p-4">

											<div class="card-body">
												<h4 class="">Advance</h4>
												<h5 class="card-title pricing-card-title">
													<span class="">$</span>90

												</h5>
												<ul class="list-unstyled mt-3 mb-4">
													<li>100 MB Disk Space</li>
													<li>2 Sub domains</li>
													<li>5 Email Accounts</li>
													<li>24/7 support</li>
												</ul>
												<div class="log-in mt-md-3 mt-2">
													<a class="btn scroll" href="#contact">Select</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- //pricing -->

<!-- faqs -->

<!--footer -->
<footer>
<section class="footer footer_w3layouts_section_1its py-5">
	<div class="container py-md-4">
	<div class="footer-grid_section text-center" data-aos="zoom-in">
				<div class="footer-title mb-3">
					<a href="#"><i class="fab fa-blackberry mr-2"></i> Landing</a>
				</div>
				<div class="footer-text">
					<p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ipnut libero malesuada feugiat.
					 Lorem ipsum dolor sit amet, consectetur elit.</p>
				</div>
				<ul class="social_section_1info">
					<li class="mb-2 facebook"><a href="#"><i class="fab mr-1 fa-facebook-f"></i>facebook</a></li>
					<li class="mb-2 twitter"><a href="#"><i class="fab mr-1 fa-twitter"></i>twitter</a></li>
					<li class="google"><a href="#"><i class="fab mr-1 fa-google-plus-g"></i>google</a></li>
					<li class="linkedin"><a href="#"><i class="fab mr-1 fa-linkedin-in"></i>linkedin</a></li>
				</ul>
			</div>
			
		<div class="row footer-top mt-md-5 mt-4">
			<div class="col-lg-4 col-md-6 footer-grid_section_1its_w3" data-aos="fade-right">
				<div class="footer-title">
					<h3>Address</h3>
				</div>
				<div class="footer-text">
					<p>Address : 1234 lock, Charlotte, North Carolina, United States</p>
					<p>Phone : +12 534894364</p>
					<p>Email : <a href="mailto:info@example.com">info@example.com</a></p>
					<p>Fax : +12 534894364</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-md-0 mt-4 footer-grid_section_1its_w3" data-aos="fade-up">
				<div class="footer-title">
					<h3>Quick Links</h3>
				</div>
				<div class="row">
					<ul class="col-6 links">
						<li><a href="#choose" class="scroll">Why Choose Us </a></li>
						<li><a href="#overview" class="scroll">Overview </a></li>
						<li><a href="#pricing" class="scroll">Pricing Plans</a></li>
						<li><a href="#faq" class="scroll">Faq's </a></li>
						<li><a href="#testimonials" class="scroll">Testimonial </a></li>
						<li><a href="#contact" class="scroll">Contact </a></li>
					</ul>
					<ul class="col-6 links">
						<li><a href="#">Privacy Policy </a></li>
						<li><a href="#">General Terms </a></li>
						<li><a href="#faq" class="scroll">Faq's </a></li>
						<li><a href="#">Knowledge </a></li>
						<li><a href="#">Forum </a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 mt-lg-0 mt-4 col-sm-12 footer-grid_section_1its_w3" data-aos="fade-left">
				<div class="footer-title">
					<h3>Newsletter</h3>
				</div>
				<div class="footer-text">
					<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fas fa-paper-plane" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
</footer>
<!-- //footer -->

<!-- copyright -->
<div class="cpy-right text-center py-3">
	<p class="">© 2021 Tout Droit reserve | Design by tsagueamazonegildas@gmail.com
	</p>
</div>
<!-- //copyright -->

<!-- Vertically centered Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-capitalize text-center" id="exampleModalLongTitle"> <i class="fab fa-blackberry"></i> Landing</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<img src="images/banner.jpg" class="img-fluid mb-3" alt="Modal Image" />
				Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,
				ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.
				Sed mattis risus at ipsum elementum, ut auctor turpis cursus. Sed sed odio pharetra, aliquet.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Save Changes</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- //Vertically centered Modal -->
	
<!-- video Modal Popup -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Video Overview</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body video">
				<iframe src="https://player.vimeo.com/video/43982091"></iframe>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Save Changes</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- //video Model Popup -->

<!--/Login-->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header text-center">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="login px-4 mx-auto mw-100">
					<h5 class="text-center mb-4">Login Now</h5>
					<form action="#" method="post">
						<div class="form-group">
							<label class="mb-2">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label class="mb-2">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
						</div>
						<div class="form-check mb-2">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<button type="submit" class="btn btn-primary submit mt-2">Sign In</button>
						<p class="text-center pb-4">
							<a href="#" data-toggle="modal2" data-target="#exampleModalCenter"> Don't have an account?</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!--//Login-->

    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- //js -->
	
	<!-- animation js -->
	<script src='js/aos.js'></script>
	<script>
		AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });

    </script>
	<!-- //animation js -->

	<!-- testimonials  Responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use"$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //testimonials  Responsiveslides -->

	<!-- sticky nav bar-->
	<script>
		$(() => {

		  //On Scroll Functionality
		  $(window).scroll(() => {
			var windowTop = $(window).scrollTop();
			windowTop > 100 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
			windowTop > 100 ? $('ul.nav-agile').css('top', '50px') : $('ul.nav-agile').css('top', '160px');
		  });

		  //Click Logo To Scroll To Top
		  $('#logo').on('click', () => {
			$('html,body').animate({
			  scrollTop: 0
			}, 500);
		  });

		 /*
		  //Smooth Scrolling Using Navigation Menu
		  $('a[href*="#"]').on('click', function (e) {
			$('html,body').animate({
			  scrollTop: $($(this).attr('href')).offset().top - 100
			}, 500);
			e.preventDefault();
		  });
		 */

		  //Toggle Menu
		  $('#menu-toggle').on('click', () => {
			$('#menu-toggle').toggleClass('closeMenu');
			$('ul').toggleClass('showMenu');

			$('li').on('click', () => {
			  $('ul').removeClass('showMenu');
			  $('#menu-toggle').removeClass('closeMenu');
			});
		  });

		});
	</script>
	<!-- //sticky nav bar -->

	<script src="js/smoothscroll.js"></script><!-- Smooth scrolling -->

    <!-- start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            /*
			var defaults = {
				  containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			 };
			*/


        });
    </script>
    <!-- //end-smoth-scrolling -->

</body>
</html>