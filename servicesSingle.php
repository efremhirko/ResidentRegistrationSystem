<?php
session_start();

include('includes/config.php');
?>

<?php
include('includes/config.php');

if(isset($_GET['idcard'])){
  
  $request=$_GET['idcard'];
  
$query=mysqli_query($con,"SELECT * FROM registerresident WHERE id='".$_SESSION['id']."'");
  While($rw=mysqli_fetch_array($query)){
$name=$rw['full_name'];  
$email=$rw['email'];
$username=$rw['username'];  
$password=$rw['password'];  
$mobile=$rw['phone'];

  }
$resul="SELECT * FROM notification WHERE username='$username' and request='$request'";

$result=mysqli_query($con,$resul);

if (mysqli_num_rows($result) == 0) {
    $insert=mysqli_query($con, "INSERT INTO notification(name,email,username,password,mobile,request) VALUES ('$name','$email','$username','$password','$mobile','$request')");
    if ($insert) {
        echo "Data inserted successfully";
    } else {
        echo "Failed to insert data";
    }
} else {
    echo "service already requested wait until it get admin aproval!";
}
}
 ?>





<?php $query=mysqli_query($con,"select * from registerresident where id='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ ?>
<?php include('includes/headerforuser.php');?>

			<article class="dsSingleContent pt-7 pb-2 pt-md-10 pb-md-1 pt-lg-16 pb-lg-10 pt-xl-21 pb-xl-16">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-8 col-xl-9 mb-6">
							<div class="pr-xl-14">
								

								<div class="my-6 my-md-9 my-lg-11">
									<ul class="nav nav-tabs dcsTabset fontAlter" id="dcsTab" role="tablist">
										<li class="nav-item">
											<a class="nav-link" id="identified-tab" data-toggle="tab" href="#identified" role="tab" aria-selected="true">For Registration</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="identified-tab" data-toggle="tab" href="#identifie" role="tab" aria-selected="true">Un Married</a>
										</li>
										
										<li class="nav-item">
											<a class="nav-link" id="produce-tab" data-toggle="tab" href="#Birth_Certificate" role="tab" aria-selected="false">Birth Certificate</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="produce-tab" data-toggle="tab" href="#Mariage_Certificate" role="tab" aria-selected="false">Mariage Certificate</a>
										</li>
									</ul>
									<div class="tab-content dcsTabContent" id="dcsTabContent">
										
										<div class="tab-pane fade" id="Renew_Id_Card" role="tabpanel" aria-labelledby="identified-tab">
											<div class="overflow-hidden px-3 px-md-6 pt-5 pb-1">
								<p>
								<strong>Renewing Your ID Card</strong><br>
								To renew your ID card, it's important to meet the following criteria:
								<ul>
								<li>Current ID Card: You must have a valid, non-expired ID card.</li>
								<li>Payment: A renewal fee of 100 Birr is required to obtain the updated ID card.</li>
								<li>Image: A clear 3x4 image of yourself may be required for the updated ID card.</li>
								</ul>
								By fulfilling these requirements, you can ensure that your ID card remains valid and up-to-date. Don't wait, renew your ID card today and keep it current and accurate!</p>
								<p><strong>If you have lost your ID card, it is important to obtain a replacement as soon as possible.</strong> In order to do so, you will need to follow a different process than if you were simply renewing your ID card. To obtain a replacement ID card, you will need to provide the following:</p>
								<p><strong>Proof of residency:</strong> You may need to provide proof of your residency in the city.</p>
								<p><strong>Image:</strong> A clear 3x4 image of yourself may be required for the updated ID card.</p>
								<p><strong>Payment:</strong> A fee to cover the cost of the replacement ID card will be required.</p>
								<p><strong>Police Station Evidence:</strong> You will need to provide evidence of the loss of your ID card, either in document or image format, with a clear seal and signature from a police station.</p>
								<p>By providing all the necessary information and evidence, you can ensure a smooth and quick process in obtaining your replacement ID card. <strong>Don't let a lost ID card slow you down. Get your replacement ID card today!</strong></p>
											</div>
										</div>
										<div class="tab-pane fade" id="idcard" role="tabpanel" aria-labelledby="consulting-tab">
											<div class="overflow-hidden px-3 px-md-6 pt-5 pb-1">
									<p>To receive a digital ID card, you must meet the following eligibility criteria:<br>

									1. <b>Residency</b>: You must be a resident of the city.<br>
									2. <b>Age</b>: You must be 18 years old or older.<br>
									3. <b>Payment</b>: A fee of 100 Birr is required to obtain the digital ID card.<br>
									4. <b>Image</b>: A clear 3x4 image of yourself is necessary for the digital ID card.<br>
									The digital ID card is a cutting-edge solution that offers convenience and security, as it can be easily accessed and stored on your digital devices. With a validity period of 4 years, the digital ID card is the perfect solution for those who are always on the go and need quick access to their identification and residency information. So, why wait? Meet the criteria and take the first step towards obtaining your very own digital ID card today!</p>
											</div>
										</div>
										<div class="tab-pane fade" id="Birth_Certificate" role="tabpanel" aria-labelledby="produce-tab">
											<div class="overflow-hidden px-3 px-md-6 pt-5 pb-1">
												<p>To obtain a birth certificate, the person applying for the certificate or the parent(s) of the person named on the certificate must be a resident of the city or jurisdiction where the birth took place. If the person applying for the certificate is not a resident of the city, then one of their parents must be a resident.</p>
											<p>There is usually a fee associated with obtaining a birth certificate, which must be paid before the certificate will be issued. The fee amount varies by jurisdiction.</p>
											<p>The birth place must be known and documented in order to issue a birth certificate.</p>
											<p>It is important to ensure that a duplicate birth certificate is not issued, as this can cause confusion and create legal problems.</p>
											<p>If a birth certificate has been lost, the person applying for a new certificate may be required to provide evidence of the loss, such as a police report, in order to obtain a replacement certificate.</p>
											<p>It is important to note that the specific requirements for obtaining a birth certificate may vary depending on the jurisdiction, so it is always best to check with the local government office for specific instructions.</p>
											</div>
										</div>
										<div class="tab-pane fade" id="Mariage_Certificate" role="tabpanel" aria-labelledby="produce-tab">
											 
										
									
<div id="rni" >
											<div class="overflow-hidden px-3 px-md-6 pt-5 pb-1">
										<p>To obtain an unmarried certificate, one must fulfill the following criteria:</p>
<p>1. Age requirement: The person must be of legal age to apply for an unmarried certificate, which is typically 18 years or older.</p>
<p>2. Identification: The person must provide proof of identity, such as a government-issued ID card, passport, or driver's license.</p>
<p>3. Residency: The person must be a resident of the jurisdiction where the certificate is being requested.</p>
<p>4. Relationship status: The person must provide evidence of their single status, such as a divorce decree or a statement from a previous spouse confirming the end of the marriage.</p>
<p>5. Background check: A background check may be required to verify the person's relationship status and ensure that they are indeed unmarried.</p>
<p>6. Processing fee: A fee may be required to process the application for an unmarried certificate.</p>
<p>7. Supporting documentation: The person may need to provide additional documentation, such as a birth certificate or a family register, to support their application.</p>
<p>8. Waiting period: There may be a waiting period before the unmarried certificate is issued, during which time the information provided may be verified and the background check conducted.</p>
<p>By fulfilling these criteria, a person can obtain an unmarried certificate, which can be used for a variety of purposes, such as immigration, marriage, or financial transactions.</p>
										
										</div>
										</div>
										
											
										</div>
									</div>
								</div>
								
								
								<aside class="saShareAside d-flex justify-content-between text-center align-items-center">
									<strong class="d-block text-lDark fwSemiBold fontAlter title mb-2">Share Article</strong>
									<ul class="list-unstyled socialNetworks saSocialNetworks d-flex flex-wrap justify-content-center ml-0 mb-0">
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
								</aside>
								<hr class="mt-6 mb-7 mb-md-10">
								<div class="commentFormWrap">
									<h2 class="fwSemiBold h2vii mb-5">Leave your Comments</h2>
									<form action="#" class="commentForm">
										<div class="row mx-n2">
											<div class="col-12 px-2">
												<div class="form-group">
													<label class="d-block fontAlter font-weight-normal mb-2">Your Comment</label>
													<textarea class="form-control w-100 d-block"></textarea>
												</div>
											</div>
											<div class="col-12 col-sm-6 px-2">
												<div class="form-group">
													<label class="d-block fontAlter font-weight-normal mb-2">Name <em class="req">*</em></label>
													<input type="text" class="form-control d-block w-100">
												</div>
											</div>
											<div class="col-12 col-sm-6 px-2">
												<div class="form-group">
													<label class="d-block fontAlter font-weight-normal mb-2">Email <em class="req">*</em></label>
													<input type="email" class="form-control d-block w-100">
												</div>
											</div>
										</div>
										<button type="button" class="btn btnTheme d-flex font-weight-bold text-capitalize position-relative border-0 p-0 mt-4 btnWidthSmall" data-hover="Post Now">
											<span class="d-block btnText">Post Comment</span>
										</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4 col-xl-3 mb-6">
							<aside class="dscSidebar pt-1 ml-xl-n5">
								<nav class="widget mb-6 mb-lg-10 widgetDepartsNav widgetBgLight py-5 px-6">
									<h3 class="fwSemiBold mb-4">
										<a href="javascript:void(0);" class="btnDcsBack align-middle mr-1"><i class="fas fa-chevron-left"><span class="sr-only">icon</span></i></a>
										All Services
									</h3>
									<ul class="list-unstyled pl-0 mx-n2 mb-0 mb-3">
										<li>
											<a href="javascript:void(0);">Registration</a>
										</li>
										
										<li class="nav-item">
											<a class="nav-link" id="consulting-tab" data-toggle="tab" href="#idcard" role="tab" aria-selected="true">Identification Card</a>
										</li>
										
									
										<li class="nav-item">
											<a class="nav-link" id="identified-tab" data-toggle="tab" href="#Renew_Id_Card" role="tab" aria-selected="true">For Renew Id Card</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="produce-tab" data-toggle="tab" href="#Mariage_Certificate" role="tab" aria-selected="false">Mariage Certificate</a>
										</li>
										
										
										
										<li>
											<a href="#rni" >Unmarried Certificate</a>
										</li>
										
										
										<li>
											<a href="javascript:void(0);">Birth Certificate</a>
										</li>
										<li>
											<a href="javascript:void(0);"> Certificate</a>
										</li>
										
									</ul>
								</nav>
								
								<div class="widget mb-6 mb-lg-10 widgetHelp bg-lDark pt-5 px-6 pb-8 position-relative">
									<i class="icnWrap icomoon-chatq text-white d-block mb-3"><span class="sr-only">icon</span></i>
									<h3 class="h3Medium text-white mb-2">Need any help?</h3>
									<p>Here you can get your perfect answer for your problem.</p>
									<a href="contact.php" class="btn btnTheme btn-sm font-weight-bold text-capitalize position-relative border-0 p-0" data-hover="Contact now">
										<span class="d-block btnText">Contact now</span>
									</a>
									<i class="whWatermarkIcn icomoon-helpc position-absolute"><span class="sr-only">icon</span></i>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</article>
		</main>
		
		
<?php }include('includes/footerforuser.php');?>
		<!-- include jQuery library -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<!-- include custom JavaScript -->
	<script src="js/jqueryCustom.js"></script>
	<!-- include plugins JavaScript -->
	<script src="js/plugins.js"></script>
	<!-- include fontAwesome -->
	<script src="../../../kit.fontawesome.com/391f644c42.js"></script>
</body>

<!-- Mirrored from htmlbeans.com/html/egovt/servicesSingle.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Dec 2022 08:51:15 GMT -->
</html>

<?php ?>