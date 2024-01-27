<?php

session_start();

include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{





							//	if(isset($_POST['submit'])){
								//	$to= mysqli_real_escape_string($con, $_POST['email']);
								//	$subject=mysqli_real_escape_string($con, $_POST['subject']);	
									//$message=mysqli_real_escape_string($con, $_POST['message']);
                                 //   $sender = "From: oromobiblestudy@yahoo.com";
								//if(	mail($to,$subject,$message,$sender)){
								//		header('location: index.php');}}
								
						
			if(isset($_POST['submit'])){
				
				$name=mysqli_real_escape_string($con,$_POST['name']);		
						$email=mysqli_real_escape_string($con,$_POST['email']);
						$subject=mysqli_real_escape_string($con,$_POST['subject']);
						$message=mysqli_real_escape_string($con,$_POST['message']);
	
$query=mysqli_query($con,"INSERT INTO contact(name,email,subject,message) VALUES ('$name','$email','$subject','$message')");
	if($query){
		
	echo"insert data successfully";
	}
	else{
	echo"not inserted".mysqli_error($query);
	}
			}
								
 include('includes/headerforuser.php'); ?>
		<main>
			<header class="pageMainHead d-flex position-relative bgCover w-100 text-white" style="background-image: url(images/img190.jpg);">
				<div class="alignHolder d-flex w-100 align-items-center">
					<div class="align w-100 position-relative">
						<div class="container">
							<h1 class="text-white mb-2">Contact</h1>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Contact</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</header>
			<div class="contactSectionWrap pt-7 pb-2 pt-md-10 pb-md-1 pt-lg-16 pb-lg-10 pt-xl-21 pb-xl-16">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6 col-xl-5 mb-6">
							<div class="pr-lg-10 pr-xl-20">
								<header class="mb-8">
									<h2 class="fwSemiBold h2Medium mb-4">Get In Touch</h2>
									<p>We really appreciate you taking the time to get in touch. Please fill in the form below.</p>
								</header>
								<h4 class="fwSemiBold mb-3">City Hall</h4>
								<ul class="list-unstyled contactInfoList mb-6">
									<li>
										<i class="fas fa-map-marker-alt icn position-absolute"><span class="sr-only">icon</span></i>
										<strong class="text-lDark title">Address: </strong>Bishoftu City
									</li>
									<li>
										<i class="fas fa-phone-alt icn position-absolute"><span class="sr-only">icon</span></i>
										<strong class="text-lDark title">Call: </strong>+251912677351
									</li>
									<li>
										<i class="fas fa-envelope icn position-absolute"><span class="sr-only">icon</span></i>
										<strong class="text-lDark title">Mailto:muratanegessa6@gmail.com </strong>goto@example.com
									</li>
								</ul>
								<h4 class="fwSemiBold mb-3">Opening Hours</h4>
								<strong class="font-weight-normal d-block">Open Daily 10am–5pm Sunday Until 8pm.</strong>
								<ul class="list-unstyled socialNetworks saSocialNetworks d-flex flex-wrap p-0 mb-0 mt-7">
									<li>
										<a href="javascript:void(0);" class="facebook">
											<i class="fab fa-facebook-square" aria-hidden="true"><span class="sr-only">facebook</span></i>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="twitter">
											<i class="fab fa-twitter" aria-hidden="true"><span class="sr-only">twitter</span></i>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="pinterest">
											<i class="fab fa-pinterest" aria-hidden="true"><span class="sr-only">pinterest</span></i>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="linkedin">
											<i class="fab fa-linkedin-in" aria-hidden="true"><span class="sr-only">linkedin-in</span></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xl-7">
							<div class="widget bg-white shadow contactFormWidget ml-xl-n5 mb-7 mb-md-5">
								<div class="pt-8 pb-10 px-4 px-md-6 px-xl-8">
									<h2 class="fwSemiBold h3Medium mb-4">Leave your message</h2>
									<form action="contact.php" method="post" class="commentForm">
									<?php if(isset($_POST['submit'])){ 
									if($query){
										echo"successfully sent";
									}else{
										echo "no";
									}}?>
										<div class="row mx-n2">
											<div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
												<div class="form-group">
													<input type="text" name="name" class="form-control d-block w-100" placeholder="Name" autocomplete="off"required>
												</div>
											</div>
											<div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
												<div class="form-group">
													<input type="email" name="email" class="form-control d-block w-100" placeholder="Email" autocomplete="off" required>
												</div>
											</div>
											<div class="col-12 px-2">
												<div class="form-group">
													<input type="text" name="subject" class="form-control d-block w-100" placeholder="Subject" autocomplete="off" required>
												</div>
											</div>
											<div class="col-12 px-2">
												<div class="form-group">
													<textarea type="text" name="message" class="form-control w-100 d-block" placeholder="Write your message&hellip;" maxlength="1000"></textarea autocomplete="off" required>
												</div>
											</div>
										</div>
										<input type="submit" name="submit" class="form-control d-block w-100" value="send message" >	
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Ethiopia,%20Addis%20Ababa+(Resident%20Registration%20System)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure area map</a></iframe></div>
		</main>

			<?php include('includes/footerforuser.php'); }?>
		