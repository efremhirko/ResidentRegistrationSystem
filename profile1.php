<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['id'])==0)
    {   
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

if(isset($_POST['submit']))
{
	

$full_name=$_POST['full_name'];
$username=$_POST['username'];	
	
$email=$_POST['email'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];

$image=$_FILES["image"]["name"];
$query=mysqli_query($con,"select * from registerresident where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
	
if(empty($image)){
	$image=$row['image'];
}
if($row['status']==0){
$_SESSION['msgerror']="you are not allowed to use this system any more!";
}else{
move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]);	
$ret=mysqli_query($con,"update admin set username='$username',email='$email',image='$image' where id='".$_SESSION['id']."'");
$sql=mysqli_query($con,"update registerresident set full_name='$full_name' ,username='$username',email='$email',image='$image',gender='$gender',phone='$phone' where username='".$row['username']."'");
}}
if($ret && $sql)
{
$_SESSION['msg']="Admin Record updated Successfully !!";
}
else
{
  $_SESSION['msg']="Error : Admin Record not update";
}
}

?>

<?php
include 'config.php';

if (isset($_POST['sent'])) {
 
  
  $old_password = mysqli_real_escape_string($con, $_POST['currentp']);
  $new_password = mysqli_real_escape_string($con, $_POST['newp']);
  $confirm_password = mysqli_real_escape_string($con, $_POST['cnewp']);

  // Hash the input values using MD5
  $old_password = md5($old_password);
  $new_password = md5($new_password);
  $confirm_password = md5($confirm_password);
  
  $query = "SELECT * FROM registerresident WHERE id='".$_SESSION['id']."' AND password='$old_password'";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) == 1) {
    if ($new_password == $confirm_password) {
      if ($new_password != $old_password) {
        $update_query = "UPDATE registerresident SET password='$new_password'WHERE id='".$_SESSION['id']."'";
        mysqli_query($con, $update_query);
        $_SESSION['msg'] = "Password changed successfully!";
      } else {
        $_SESSION['msg'] = "Error: New password must be different from old password.";
      }
    } else {
      $_SESSION['msg'] = "Error: New password and confirmation do not match.";
    }
  } else {
    $_SESSION['msg'] = "Error: Incorrect username or password.";
  }
}
?>



<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>profile</title>

<script src="includes/sweetalert.min.js"></script>

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/cropperjs/dist/cropper.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


</head>
<body>
<?php $query=mysqli_query($con,"select * from registerresident where id='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ ?>

	<?php include('includes/headerforuser.php');?>
	<div class="mobile-menu-overlay"></div>

			<div style="padding:20px;" class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="profile-photo">
								<?php if($row['image']==""){ ?>
   <img id="image" src="images/noimage.png"><?php } else {?>
   <img id="image" src="images/<?php echo htmlentities($row['image']);?>" class="avatar-image">
   <?php } ?>
							</div>

							<div class="profile-info">
							<h5 class="text-center h5 mb-0"><?php echo htmlentities($row['full_name']);?></h5>

								<h5 class="text-blue">Contact Information</h5>
								<ul>
									<li>
										<span>Email Address:</span>
										<?php echo htmlentities($row['email']);?>
									</li>
									<li>
										<span>Phone Number:</span>
										<?php echo htmlentities($row['phone']);?>
									</li>
									
									<li>
										<span>Address:</span>
										<?php echo htmlentities($row['address_of_resident']);?>
									</li>
								</ul>
							</div>	
						</div>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="card-box height-100-p overflow-hidden">
							<div class="profile-tab height-100-p">
								<div class="tab height-100-p">
									<ul class="nav nav-tabs customtab" role="tablist">
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#setting" role="tab">Settings</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#changepassword" role="tab">Change Password</a>
										</li>
										
									</ul>
									<div class="tab-content">
										<!-- Timeline Tab start -->
										<div class="tab-pane fade" id="changepassword" role="tabpanel">
											<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		
			<div class="row align-items-center">
				
				
						<div class="wizard-content">
                      <form name="dept" method="post" enctype="multipart/form-data">
													<h4  style="margin-top:10px; text-align:center;"class="text-blue">Password Update Form</h4>
													<ul class="profile-edit-list row">
														
				
														<li class="weight-500 col-md-10">
															<div class="form-group">
																<label>Current Password</label>
																<input class="form-control form-control-lg" type="password" name="currentp" value="">
															</div>
															<div class="form-group">
																<label>New Password</label>
																<input class="form-control form-control-lg" type="password" name="newp" value="">
															</div>
															<div class="form-group">
																<label>Confirm Password</label>
																<input class="form-control form-control-lg" type="password" name="cnewp" value="">
															</div>
																	
						
															
															<center><div class="form-group mb-0">
																<input type="submit" class="btn btn-primary"  name="sent" value="Update Information">
																
															</div></center>
														</li>
													</ul>
													
												</form>
						
				
				
			</div>
		</div>
	</div>
										</div>
										<!-- Timeline Tab End -->
										
										<!-- Setting Tab start -->
										<div class="tab-pane fade height-100-p show active" id="setting" role="tabpanel">
											<div class="profile-setting">
												<form name="dept" method="post" enctype="multipart/form-data">
												<h4 style="margin-top:20px;margin-left:20px;text-align:center;" >Edit Your Personal Setting</h4>
													<ul class="profile-edit-list row">
														<li class="weight-500 col-md-6">
															
															<div class="form-group">
																<label>Full Name</label>
																<input class="form-control form-control-lg" type="text" name="full_name" value="<?php echo htmlentities($row['full_name']);?>">
															</div>
															<div class="form-group">
																<label>Username</label>
																<input class="form-control form-control-lg" type="text" name="username" value="<?php echo htmlentities($row['username']);?>" >
															</div>
																<div class="form-group">
																<label>Email</label>
																<input class="form-control form-control-lg" type="email" name="email" value="<?php echo htmlentities($row['email']);?>">
															</div>							
														</li>
														<li class="weight-500 col-md-6">
															
															
															<div class="form-group">
																<label>Phone Number</label>
																<input class="form-control form-control-lg" type="text" name="phone" value="<?php echo htmlentities($row['phone']);?>">
															</div>
																	
															<div class="form-group"><label>Upload Profile Picture</label>
				<input type="file" class="form-control form-control-lg" id="image" name="image" class="form-control"  value="selected" />
				
                </div>
															<div class="form-group">
																<label>Gender</label>
																<div class="d-flex">
																<div class="custom-control custom-radio mb-5 mr-20">
																	<input type="radio" id="customRadio4" class="custom-control-input" selected name="gender"<?php if($row['gender']=="Male"){ echo "checked";}?> value="Male">
																	<label class="custom-control-label weight-400" for="customRadio4">Male</label>
																</div>
																<div class="custom-control custom-radio mb-5">
																	<input type="radio" id="customRadio5" class="custom-control-input"  name="gender" <?php if($row['gender']=="Female") {echo "checked";}?> value="Female">
																	<label class="custom-control-label weight-400" for="customRadio5">Female</label>
																</div>
																</div>
															</div>
															<center><div class="form-group mb-0">
																<input type="submit" class="btn btn-primary"  name="submit" value="Update Information">
																
															</div></center>
														</li>
													</ul>
													
												</form>
											</div>
										</div>
										<!-- Setting Tab End -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				
			
				<script src="sweetalert.min.js"></script>
<?php
if(isset($_POST['submit']) || isset($_POST['sent']))
{
  if ($_SESSION['msg'] == "Password changed successfully!") {
?> 
  <script>
    swal({
    title: "Good job!",
    text: "<?php echo htmlentities($_SESSION['msg']);?>",
    icon: "success",
    }).then((value) => {
      if (value) {
        window.location.href = "security/logout.php";
      }
    });
  </script>
<?php
  } else {
?> 
  <script>
    swal({
    title: "Error",
    text: "<?php echo htmlentities($_SESSION['msg']);?>",
    icon: "error",
    });
  </script>
<?php
  }
}
?>
			
			
				<?php include('includes/footerforuser.php');?>
			

	<!-- js -->

	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/cropperjs/dist/cropper.js"></script>
	<script>
		window.addEventListener('DOMContentLoaded', function () {
			var image = document.getElementById('image');
			var cropBoxData;
			var canvasData;
			var cropper;

			$('#modal').on('shown.bs.modal', function () {
				cropper = new Cropper(image, {
					autoCropArea: 0.5,
					dragMode: 'move',
					aspectRatio: 3 / 3,
					restore: false,
					guides: false,
					center: false,
					highlight: false,
					cropBoxMovable: false,
					cropBoxResizable: false,
					toggleDragModeOnDblclick: false,
					ready: function () {
						cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
					}
				});
			}).on('hidden.bs.modal', function () {
				cropBoxData = cropper.getCropBoxData();
				canvasData = cropper.getCanvasData();
				cropper.destroy();
			});
		});
	</script>
</body>
</html>
<?php } }?>
