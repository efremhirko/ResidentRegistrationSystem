



	<!-- ftAreaWrap -->
		<div class="ftAreaWrap position-relative bg-gDark fontAlter">
			<aside class="ftConnectAside pt-4 pb-3 pt-md-7 pb-md-7 text-center text-md-left">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-lg-7">
							<nav class="ftcaNav mb-4 mb-lg-0">
								<ul class="list-unstyled d-flex flex-wrap mb-0 justify-content-center justify-content-lg-start">
									<li>
										<a href="about.php">About Us</a>
									</li>
									<li>
										<a href="servicesSingle.php">Services</a>
									</li>
									<li>
										<a href="news.php">News</a>
									</li>
									<li>
										<a href="contact.php">Contact</a>
									</li>
								
								</ul>
							</nav>
						</div>
						<div class="col-12 col-lg-5">
							<div class="ctConnectWrap d-sm-flex justify-content-sm-center justify-content-lg-end align-items-sm-center">
								<strong class="title flex-shrink-0 mb-1 font-weight-normal mr-sm-3 d-block">Connect With Us</strong>
								<ul class="list-unstyled socialNetworks ftSocialNetworks d-flex flex-wrap justify-content-center justify-content-sm-end mb-0">
									<li>
										<a href="javascript:void(0);">
											<i class="fab fa-facebook-square"><span class="sr-only">facebook</span></i>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<i class="fab fa-telegram"><span class="sr-only">telegram</span></i>
										</a>
									</li>
								
								</ul>
							</div>
						</div>
					</div>
				</div>
			</aside>
			<!-- footerAside -->
			<aside class="footerAside pt-9 pb-sm-2 pt-xl-14 pb-xl-12">
				<div style="width:100%;" class="container">
					<div class="row">
						<div class="col-12 col-sm-6 col-md-5 col-xl-3 mb-6">
							<div class="ftLogo mt-md-1 mb-6">
								
									<img src="" class="img-fluid" alt="">
								
							</div>
							<address class="mb-0 ftPlace">
								<p class="mb-2"><strong class="font-weight-normal">Burayu Addis Ababa A1<br>Oromia, Ethiopia</strong></p>
								<ul class="list-unstyled ftpScheduleList mb-0">
									<li>
										<i class="icomoon-clock fwSemiBold icn mr-1 mr-sm-0"><span class="sr-only">icon</span></i>
										<strong class="title font-weight-normal text-white">Opening Hours:</strong>
										<br>
										<time datetime="2011-01-12">Mon – Fri: 8:00 am – 6:00 pm</time>
									</li>
									<li>
										<i class="fas fa-phone-alt icn mr-1 mr-sm-0"><span class="sr-only">icon</span></i>
										<strong class="title font-weight-normal text-white">Phone:</strong>
										<a href="tel:+251938606334">+251938606334</a>
									</li>
									<li>
										<i class="fas fa-envelope icn mr-1 mr-sm-0"><span class="sr-only">icon</span></i>
										<strong class="title font-weight-normal text-white">Email:</strong>
										<a href="mailto:hirkoefrem@gmail.com">hirkoefrem@gmail.com</a>
									</li>
								</ul>
							</address>
						</div>
					<div class="col-12 col-sm-8 col-md-12 col-xl-4 mb-6">
							<h3 class="ftHeading text-white mb-4">Service Request</h3>
							<ul class="list-unstyled ftsrLinksList mb-0">
								<li>
								<?php  set_error_handler(function(int $errno, string $errstr) {
    if ((strpos($errstr, 'Undefined array key') === false) && (strpos($errstr, 'Undefined variable') === false)) {
        return false;
    } else {
        return true;
    }
}, E_WARNING);
if(empty($_SESSION['alogin'])){echo'<a href="security/login.php">Request for  registration</a>';?>
              <?php  }else{  echo'<a href="#">Request for registration</a>';}?>
								
								</li>
							
								<li><?php  set_error_handler(function(int $errno, string $errstr) {
    if ((strpos($errstr, 'Undefined array key') === false) && (strpos($errstr, 'Undefined variable') === false)) {
        return false;
    } else {
        return true;
    }
}, E_WARNING);
if(empty($_SESSION['alogin'])){
	$_SESSION['var']="idcard";
	echo'<a href="security/login.php">Request for issuance Id card</a>';?>
              <?php  }else{  echo'<a href="service.php">Request for issuance Id card</a>';}?>
								</li>
								<li>
								<?php  set_error_handler(function(int $errno, string $errstr) {
    if ((strpos($errstr, 'Undefined array key') === false) && (strpos($errstr, 'Undefined variable') === false)) {
        return false;
    } else {
        return true;
    }
}, E_WARNING);
if(empty($_SESSION['alogin'])){echo'<a href="security/login.php">Request for Marige Certificate</a>';?>
              <?php  }else{  echo'<a href="#">Request for Marige Certificate</a>';}?>
									
								</li>
								<li>
								<?php  set_error_handler(function(int $errno, string $errstr) {
    if ((strpos($errstr, 'Undefined array key') === false) && (strpos($errstr, 'Undefined variable') === false)) {
        return false;
    } else {
        return true;
    }
}, E_WARNING);
if(empty($_SESSION['alogin'])){echo'<a href="security/login.php">Request for Death Certificate </a>';?>
              <?php  }else{  echo'<a href="#">Request for Death Certificate</a>';}?>
									
								</li>
								
							</ul>
						</div>
						
						<div class="col-12 col-sm-8 col-md-12 col-xl-4 mb-6">
							<div class="ml-xl-n1 ml-xlwd-n7">
								<h3 class="ftHeading text-white mb-5">City News &amp; Updates</h3>
								<form action="#" class="ftSubscribeForm">
									<label class="d-block mb-7">The latest Egovt news, articles, and resources, sent straight to your inbox every month.</label>
									<div class="input-group mb-3">
										<input  type="text" class="form-control form-control-lg" placeholder="Enter Your Email">
										<div class="input-group-append">
											<button type="button" class="btn btnTheme d-flex font-weight-bold text-capitalize position-relative border-0 p-0" data-hover="Send">
												<span class="d-block btnText">Subscribe</span>
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</aside>
				<!-- pageFooter -->
			<footer id="pageFooter" class="text-center bg-dark pt-6 pb-3 pt-md-8 pb-md-5">
				<div class="container">
					<p>Resident Registration System &copy; 2023. <br class="d-md-none">All Rights Reserved</p>
				</div>
			</footer>
		</div>
	</div>
		<!-- include jQuery library -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<!-- include custom JavaScript -->
	<script src="assets/js/jqueryCustom.js"></script>
	<!-- include plugins JavaScript -->
	<script src="assets/js/plugins.js"></script>
	<!-- include fontAwesome -->
	<script src="assets/kit.fontawesome.com/391f644c42.js"></script>
	
	

	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>

<!-- Mirrored from htmlbeans.com/html/egovt/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Dec 2022 08:48:35 GMT -->
</html>