
<?php 
session_start();
include('includes/config.php');

include('includes/headerforuser.php'); ?>
		<main>
			<div class="introBlock ibSlider">
				<div>
					<article class="d-flex w-100 position-relative ibColumn text-white overflow-hidden">
						<div class="alignHolder d-flex align-items-center w-100">
							<div class="align w-100 pt-20 pb-20 pt-md-40 pb-md-30 px-md-17">
								<div class="container position-relative">
									<div class="row">
										<div class="col-12 col-md-9 col-xl-7 fzMedium">
											<h1 class="text-white mb-4 h1Large">Welcome To Bishoftu The City Of Tourism</h1>
											<p>The Most Exciting guide to living, working, visiting and investing business.</p>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<span class="ibBgImage bgCover position-absolute" style="background-image: url(assets/images/bishoftu.jpg);"></span>
					</article>
				</div>
				<div>
					<article class="d-flex w-100 position-relative ibColumn text-white overflow-hidden">
						<div class="alignHolder d-flex align-items-center w-100">
							<div class="align w-100 pt-20 pb-20 pt-md-40 pb-md-30 px-md-17">
								<div class="container position-relative">
									<div class="row">
										<div class="col-12 col-md-9 col-xl-7 fzMedium">
											<h1 class="text-white mb-4 h1Large">Bishoftu Dire Jitu kebele is tuorism area</h1>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<span class="ibBgImage bgCover position-absolute" style="background-image: url(assets/images/babogaya.jpg);"></span>
					</article>
				</div>
				<div>
					<article class="d-flex w-100 position-relative ibColumn text-white overflow-hidden">
						<div class="alignHolder d-flex align-items-center w-100">
							<div class="align w-100 pt-20 pb-20 pt-md-40 pb-md-30 px-md-17">
								<div class="container position-relative">
									<div class="row">
										<div class="col-12 col-md-9 col-xl-7 fzMedium">
											<h1 class="text-white mb-4 h1Large">Lovely &amp; Romantic City for Natural Lovers</h1>
											<p>Every year 10 millions of people from worldwide don’t forget to visit here.</p>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<span class="ibBgImage bgCover position-absolute" style="background-image: url(assets/images/hora.jpg);"></span>
					</article>
				</div>
			</div>
			<section class="exploreServicesBlock position-relative pt-7 pt-md-12 pt-lg-16 pt-xl-20 pb-0 pb-md-4 pb-lg-8 pb-xl-12">
				<div class="container">
					<header class="headingHead mb-7 md-md-9 mb-lg-13">
						<div class="row align-items-end">
							<div class="col-12 col-sm-7 col-xl-5">
								<h2 class="mb-0">Let’s explore local services, programs &amp; initiatives.</h2>
							</div>
							<div class="col-12 col-sm-5 col-xl-7 d-sm-flex justify-content-sm-end">
								<a href="#" class="btn btn-dark text-capitalize position-relative border-0 p-0 mt-4 mt-sm-0 mb-sm-1 minWidthMedium" data-hover="Explore Services">
									<span class="d-block btnText">Explore Services</span>
								</a>
							</div>
						</div>
					</header>
					<div class="row justify-content-center">
						<div class="col-12 col-md-6 col-lg-4">
							<article class="esColumn position-relative text-center mb-13">
								<span class="imgHolder d-block w-100 bgCover" style="background-image: url(assets/images/register.jpg);"></span>
								<div class="escCaption bg-white shadow position-absolute pt-4 px-2 pb-5">
									<h3 class="fwMedium mb-0">Register Resident</h3>
									<a href="servicesSingle.php" class="btnLink fontAlter">Learn More <i class="fas fa-chevron-right blIcn"><span class="sr-only">icon</span></i></a>
								</div>
							</article>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<article class="esColumn position-relative text-center mb-13">
								<span class="imgHolder d-block w-100 bgCover" style="background-image: url(assets/images/card.png);"></span>
								<div class="escCaption bg-white shadow position-absolute pt-4 px-2 pb-5">
									<h3 class="fwMedium mb-0">Issuance Of Id Card</h3>
									<a href="servicesSingle.php" class="btnLink fontAlter">Learn More <i class="fas fa-chevron-right blIcn"><span class="sr-only">icon</span></i></a>
								</div>
							</article>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<article class="esColumn position-relative text-center mb-13">
								<span class="imgHolder d-block w-100 bgCover" style="background-image: url(assets/images/govern.png);"></span>
								<div class="escCaption bg-white shadow position-absolute pt-4 px-2 pb-5">
									<h3 class="fwMedium mb-0">Govern Them</h3>
									<a href="servicesSingle.php" class="btnLink fontAlter">Learn More <i class="fas fa-chevron-right blIcn"><span class="sr-only">icon</span></i></a>
								</div>
							</article>
						</div>
					</div>
				</div>
			</section>
			<section class="newsPulicationsBlock position-relative bg-light overflow-hidden pt-7 pb-4 pt-md-10 pb-md-4 pt-lg-16 pb-lg-10 pt-xl-22 pb-xl-16">
							
				<div class="container position-relative npbHolder">
					<div class="row">
						<div class="col-12 col-lg-3">
							<header class="headingHead pt-2 mb-7 mb-lg-0">
								<h2 class="fwSemiBold mb-2">News and Publications</h2>
								<p>The news about recent activities for needed peoples.</p>
								<a href="morenews.php" class="btn btn-outline-secondary bdrWidthAlter text-capitalize position-relative border-0 p-0 mt-5 btnXsMinWidth" data-hover="More News">
									<span class="d-block btnText">More News</span>
								</a>
							</header>
						</div>
						
						<div class="col-12 col-lg-9">
							
							<div class="row">
				<?php
				$query=mysqli_query($con,"SELECT * FROM news ORDER BY id DESC Limit 3");
				$cnt=1;
				while($row=mysqli_fetch_array($query)){   
               ?>
								<div class="col-12 col-md-6 col-xl-4">
							
									<article class="npbColumn shadow bg-white mb-6">
										<div class="imgHolder position-relative">
											
											<?php if($row['image']==""){ ?>
   <img  class="img-fluid w-100 d-block" src="images/noimage.png"><?php } else {?>
   <img class="img-fluid w-100 d-block"  src="images/<?php echo htmlentities($row['image']);?>">
   <?php } ?>
				
										
											<time datetime="2011-01-12" class="npbTimeTag font-weight-bold fontAlter position-absolute text-white px-2 py-1"><?php echo htmlentities($row['date']);?></time>
										</div>
										<div class="npbDescriptionWrap px-5 pt-8 pb-5">
											<strong class="d-block npbcmWrap font-weight-normal mb-1">
												<span class="mr-5">In Goverment</span>
												<i class="icomoon-chat"><span class="sr-only">icon</span></i> 0
											</strong>
											<h3 class="fwSemiBold mb-6">
												<a href="blog-single.php?id=<?php echo $row['id'];?>"><?php echo htmlentities($row['title']);?></a>
											</h3>
											<a href="blog-single.php?id=<?php echo $row['id'];?>" class="btnCr d-inline-block align-top fontAlter">Continue Reading <i class="icomoon-arrowRight bcIcn ml-2 align-middle"><span class="sr-only">icon</span></i></a>
										</div>
									</article>
				
								</div>
									<?php } ?>
								
							</div>
						
						</div>
					
					</div>
				</div>
	
				<span class="npbBgPattern w-100 h-100 bgCover position-absolute inaccessible" style="background-image: url(assets/images/bgPattern2.jpg);"></span>
			</section>
			<section class="exploreResourceBlock position-relative pt-7 pt-md-10 pt-lg-16 pt-xl-22 pb-7 pb-md-10">
				<div class="container">
					<div class="row">
						<div class="col-12 col-xl-4 pt-xl-2">
							<header class="erHeadingHead mb-7 mb-lg-11 mb-xl-0">
								<h2 class="text-white">Explore Online <br>Services &amp; Resource</h2>
								<p class="text-black">City goverment providing a wide range of online services to people who need help.</p>
							</header>
						</div>
						
						
						
						<div  style="background-color:white;" class="col-12 col-xl-8">
							<div class="pl-xl-9">
								<div class="row no-gutters shadow">
									<div class="my-6 my-md-9 my-lg-11">
									
									<ul class="nav nav-tabs dcsTabset fontAlter bgThemelo " id="dcsTab"  role="tablist">
										<li class="nav-item">
											<a  class="nav-link active" style="color:red" id="identified-tab" data-toggle="tab" href="#identified" role="tab" aria-selected="true">For Registration</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="consulting-tab" data-toggle="tab" href="#consulting" role="tab" aria-selected="false">Identification Card</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="produce-tab" data-toggle="tab" href="#produce" role="tab" aria-selected="false">Mariage Certificate</a>
										</li>
									</ul>
									<div class="tab-content dcsTabContent" id="dcsTabContent">
										<div class="tab-pane fade show active" id="identified" role="tabpanel" aria-labelledby="identified-tab">
											<div class="overflow-hidden px-3 px-md-6 pt-5 pb-1">
												<p class="text-black"><strong>Before an individual can obtain an ID card as part of the process of registering as a resident in a city</strong>, there are several criteria that may need to be met. The individual may need to provide documentation proving their citizenship or legal residency status in the country in which the city is located. This could include a passport, visa, or other documentation. <strong>Depending on the laws and regulations of the country and city</strong>, there may be age requirements for obtaining an ID card. The individual may also need to provide a current, government-issued photo ID, as well as additional documentation, such as a utility bill or rental agreement, to confirm their current address. In some cases, a criminal background check may be required before an ID card can be issued. <strong>There may also be a fee for obtaining an ID card</strong>, which would need to be paid before the card can be issued.</p>
											</div>
										</div>
										<div class="tab-pane fade" id="consulting" role="tabpanel" aria-labelledby="consulting-tab">
											<div class="overflow-hidden px-3 px-md-6 pt-5 pb-1">
                        <p>To receive a digital ID card, you must meet the following eligibility criteria:<br>

									1. <b>Residency</b>: You must be a resident of the city.<br>
									2. <b>Age</b>: You must be 18 years old or older.<br>
									3. <b>Payment</b>: A fee of 100 Birr is required to obtain the digital ID card.<br>
									4. <b>Image</b>: A clear 3x4 image of yourself is necessary for the digital ID card.<br>
									The digital ID card is a cutting-edge solution that offers convenience and security, as it can be easily accessed and stored on your digital devices. With a validity period of 4 years, the digital ID card is the perfect solution for those who are always on the go and need quick access to their identification and residency information. So, why wait? Meet the criteria and take the first step towards obtaining your very own digital ID card today!</p>
											</div>
										</div>
										<div class="tab-pane fade" id="produce" role="tabpanel" aria-labelledby="produce-tab">
											<div class="overflow-hidden px-3 px-md-6 pt-5 pb-1">
<p>
<strong>Getting married is a big step in life, and a marriage certificate is a legal document that proves the union between two individuals. In order to obtain a marriage certificate, you must meet the following criteria:</strong><br><br>
Age Requirements: Both individuals must be of legal age to marry. This is typically 18 years old, but can vary by jurisdiction.<br>
Proof of Identity: Both individuals must provide proof of their identity, typically in the form of a government-issued ID or passport.<br>
Proof of Residency: Both individuals must provide proof of their residency in the jurisdiction where the marriage is taking place.<br>
Images: A clear 3x4 image of both individuals may be required for the marriage certificate.<br>
Witnesses: In some jurisdictions, witnesses may be required to sign the marriage certificate.<br>
Fees: A fee may be required to obtain the marriage certificate.<br><br>
<strong>By fulfilling these requirements and providing the necessary information, you can ensure that your marriage certificate is legally recognized and can be used for various purposes, such as changing your name, applying for benefits, or obtaining a visa. So, make sure you have all your ducks in a row and obtain your marriage certificate today!</strong>

</p>
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
			
			

			<section class="meetCouncilBlock position-relative pt-7 pt-md-9 pt-lg-14 pt-xl-20 pb-6">
				<div class="container">
					<header class="headingHead text-center cdTitle mb-7 mb-md-13">
						<h2 class="fwSemiBold mb-4">Meet City Administrators</h2>
						<p>The kebele Administrators have the real super powers as administraion to lead country.</p>
					</header>
					<div class="row justify-content-center">
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
						<?php $query=mysqli_query($con,"select * from admin where role='admin'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
 $un=$row['username'];	?>

	
	<?php $mquery=mysqli_query($con,"select * from registerresident where username='$un'");
$cnt=1;
while($rw=mysqli_fetch_array($mquery))
{ ?>
							<article class="mccColumn bg-white shadow mb-6 mx-auto mx-sm-0">
								<div class="imgHolder position-relative">
								<?php if($rw['image']==""){ ?>
   <img  class="img-fluid w-100 d-block" src="images/noimage.png"><?php } else {?>
   <img class="img-fluid w-100 d-block"  src="images/<?php echo htmlentities($rw['image']);?>">
   <?php } ?>
									
								</div>

								<div class="mcCaptionWrap px-5 pt-5 pb-4 position-relative">
									<h3 class="fwMedium h3Small mb-1"><?php if($rw['full_name']==""){ echo"no name";?><?php } else {?>
                     <?php echo htmlentities($rw['full_name']);?>
                       <?php } ?></h3>
									<h4 class="fwSemiBold fontBase text-secondary"><?php echo htmlentities($row['role']);?></h4>
									<ul class="list-unstyled mccInfoList">
										<li>
											<a href="mailto:hirkoefrem@gmail.com">
												
												<?php echo htmlentities($rw['email']);?>
											</a>
										</li>
										<li>
											<a href="tel:+251938606334">
												<i class="fas fa-phone-alt icn mr-1"><span class="sr-only">icon</span></i>
												<?php echo htmlentities($rw['phone']);?>
											</a>
										</li>
									</ul>
								</div>

							</article>
<?php }} ?>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
						<?php $query=mysqli_query($con,"select * from admin where role='manager'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
 $un=$row['username'];	?>

	
	<?php $mquery=mysqli_query($con,"select * from registerresident where username='$un'");
$cnt=1;
while($rw=mysqli_fetch_array($mquery))
{ ?>
							<article class="mccColumn bg-white shadow mb-6 mx-auto mx-sm-0">
								<div class="imgHolder position-relative">
								<?php if($rw['image']==""){ ?>
   <img  class="img-fluid w-100 d-block" src="images/noimage.png"><?php } else {?>
   <img class="img-fluid w-100 d-block"  src="images/<?php echo htmlentities($rw['image']);?>">
   <?php } ?>
									
								</div>

								<div class="mcCaptionWrap px-5 pt-5 pb-4 position-relative">
									<h3 class="fwMedium h3Small mb-1"><?php if($rw['full_name']==""){ echo"no name";?><?php } else {?>
                     <?php echo htmlentities($rw['full_name']);?>
                       <?php } ?></h3>
									<h4 class="fwSemiBold fontBase text-secondary"><?php echo htmlentities($row['role']);?></h4>
									<ul class="list-unstyled mccInfoList">
										<li>
											<a href="mailto:hirkoefrem@gmail.com">
												
												<?php echo htmlentities($rw['email']);?>
											</a>
										</li>
										<li>
											<a href="tel:+251938606334">
												<i class="fas fa-phone-alt icn mr-1"><span class="sr-only">icon</span></i>
												<?php echo htmlentities($rw['phone']);?>
											</a>
										</li>
									</ul>
								</div>

							</article>
<?php }} ?>
						</div>

						
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
						<?php $query=mysqli_query($con,"select * from admin where role='finance'");
$cnt=1;
while($row=mysqli_fetch_array($query)){
	?>
	
		<?php $mquery=mysqli_query($con,"select * from registerresident where username='".$row['username']."'");
$cnt=1;
while($row=mysqli_fetch_array($mquery))
{ ?>
							<article class="mccColumn bg-white shadow mb-6 mx-auto mx-sm-0">
								<div class="imgHolder position-relative">
								
																					<?php if($row['image']==""){ ?>
   <img  class="img-fluid w-100 d-block" src="images/noimage.png"><?php } else {?>
   <img class="img-fluid w-100 d-block"  src="images/<?php echo htmlentities($row['image']);?>">
   <?php } ?>
									
								</div>
								
								
								<div class="mcCaptionWrap px-5 pt-5 pb-4 position-relative">
									<h3 class="fwMedium h3Small mb-1"><?php echo htmlentities($row['full_name']);?></h3>
									<h4 class="fwSemiBold fontBase text-secondary"><?php echo htmlentities($row['role']);?></h4>
									
									<ul class="list-unstyled mccInfoList">
										<li>
											<a href="mailto:collector@citygov.com">
												<i class="fas fa-envelope icn"><span class="sr-only">icon</span></i>
									<?php echo htmlentities($row['email']); ?>
											</a>
										</li>
										<li>
											<a href="tel:+251912677351">
												<i class="fas fa-phone-alt icn"><span class="sr-only">icon</span></i>
												<?php echo htmlentities($row['phone']); ?>
											</a>
										</li>
									</ul>
								</div>
								
							</article>
<?php }}?>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
						<?php $query=mysqli_query($con,"select * from admin where role='registrar'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ ?>
<?php $mquery=mysqli_query($con,"select * from registerresident where username='".$row['username']."'");
$cnt=1;
while($rw=mysqli_fetch_array($mquery))
{ ?>
							<article class="mccColumn bg-white shadow mb-6 mx-auto mx-sm-0">
								<div class="imgHolder position-relative">
								
															<?php if($rw['image']==""){ ?>
   <img  class="img-fluid w-100 d-block" src="images/noimage.png"><?php } else {?>
   <img class="img-fluid w-100 d-block"  src="images/<?php echo htmlentities($rw['image']);?>">
   <?php } ?>
									
								</div>
					
								<div class="mcCaptionWrap px-5 pt-5 pb-4 position-relative">
									<h3 class="fwMedium h3Small mb-1"><?php echo htmlentities($rw['full_name']);?></h3>
									<h4 class="fwSemiBold fontBase text-secondary"><?php echo htmlentities($row['role']);?></h4>
									
									<ul class="list-unstyled mccInfoList">
										<li>
											<a href="mailto:hirkoefrem@gmail.com">
												<i class="fas fa-envelope icn mr-1"><span class="sr-only">icon</span></i>
												<?php echo htmlentities($rw['email']);?>
											</a>
										</li>
										<li>
											<a href="tel:+251938606334">
												<i class="fas fa-phone-alt icn mr-1"><span class="sr-only">icon</span></i>
												<?php echo htmlentities($rw['phone']);?>
											</a>
										</li>
									</ul>
								</div>

							</article>
<?php }}?>
						</div>
					</div>
					
				</div>
			</section>
		</main>
<?php  include('includes/footerforuser.php') ?>