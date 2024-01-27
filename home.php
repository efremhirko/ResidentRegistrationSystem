<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['id'])==0)
    {   
header('location: security/login.php');
}
else{

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Home Page</title>

	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
	
	
	
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">



<style type="text/css">
.card {
    background-color: #fff;
    border-radius: 10px;
    border: none;
    position: relative;
    margin-bottom: 30px;
    box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
}
.l-bg-cherry {
    background: linear-gradient(to right, #493240, #f09) !important;
    color: #fff;
}

.l-bg-blue-dark {
    background: linear-gradient(to right, #373b44, #4286f4) !important;
    color: #fff;
}

.l-bg-green-dark {
    background: linear-gradient(to right, #0a504a, #38ef7d) !important;
    color: #fff;
}

.l-bg-orange-dark {
    background: linear-gradient(to right, #a86008, #ffba56) !important;
    color: #fff;
}

.card .card-statistic-3 .card-icon-large .fas, .card .card-statistic-3 .card-icon-large .far, .card .card-statistic-3 .card-icon-large .fab, .card .card-statistic-3 .card-icon-large .fal {
    font-size: 110px;
}

.card .card-statistic-3 .card-icon {
    text-align: center;
    line-height: 50px;
    margin-left: 15px;
    color: #000;
    position: absolute;
    right: -5px;
    top: 20px;
    opacity: 0.1;
}

.l-bg-cyan {
    background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
    color: #fff;
}

.l-bg-green {
    background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
    color: #fff;
}

.l-bg-orange {
    background: linear-gradient(to right, #f9900e, #ffba56) !important;
    color: #fff;
}

.l-bg-cyan {
    background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
    color: #fff;
}

</style>

</head>
<body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

<?php if($_SESSION['id'] != 
"") ?>
<?php $query=mysqli_query($con,"select * from admin where id='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ ?>


	<?php include('includes/header.php');?>
	
	
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="vendors/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							 <div class="weight-600 font-30 text-blue">Welcome To Dire Jitu Kebele</div>
						</h4>
						<p class="font-18 max-width-600">Dire jitu kebele is one of the kebele founded in Bishoftu city and stabilished in 1930, this kebele is land of peace and tourism where different lake,recration area,hotel and industry .</p>
					</div>
				</div>
			</div>
			
			
				<?php 
				
				$result = mysqli_query($con,"select count(1) FROM registerresident");



while($row = mysqli_fetch_array($result))
	
{
	$total = $row[0]; ?>	
					<div class="row ">
					<div class="col-xl-3 col-lg-6">
						<div class="card l-bg-blue-dark">
						<div class="card-statistic-3 p-4">
						<div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
						<div class="mb-4">
						<h5 class="card-title mb-0">Total Resident</h5>
						</div>
						<div class="row align-items-center mb-2 d-flex">
						<div class="col-8">
						<h2 class="d-flex align-items-center mb-0">
						<strong><?php echo $total;?></strong>
						</h2>
						</div>
						<div class="col-4 text-right">
						<span></span>
						</div>
						</div>
						<div class="progress mt-1 " data-height="8" style="height: 8px;">
						<div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
						</div>
						</div>
						</div>
				</div>
					
						<div class="col-xl-3 col-lg-6">
						<div class="card l-bg-cherry">
						<div class="card-statistic-3 p-4">
						<div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
						<div class="mb-4">
						<h5 class="card-title mb-0">New Orders</h5>
						</div>
						<div class="row align-items-center mb-2 d-flex">
						<div class="col-8">
						<h2 class="d-flex align-items-center mb-0">
						
						</h2>
						</div>
						<div class="col-4 text-right">
						<span>12.5% <i class="fa fa-arrow-up"></i></span>
						</div>
						</div>
						<div class="progress mt-1 " data-height="8" style="height: 8px;">
						<div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
						</div>
						</div>
						</div>
					</div>
				
						<div class="col-xl-3 col-lg-6">
						<div class="card l-bg-green-dark">
						<div class="card-statistic-3 p-4">
						<div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
						<div class="mb-4">
						<h5 class="card-title mb-0">Ticket Resolved</h5>
						</div>
						<div class="row align-items-center mb-2 d-flex">
						<div class="col-8">
						<h2 class="d-flex align-items-center mb-0">
						578
						</h2>
						</div>
						<div class="col-4 text-right">
						<span>10% <i class="fa fa-arrow-up"></i></span>
						</div>
						</div>
						<div class="progress mt-1 " data-height="8" style="height: 8px;">
						<div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
						</div>
						</div>
						</div>
						</div>
						<div class="col-xl-3 col-lg-6">
						<div class="card l-bg-orange-dark">
						<div class="card-statistic-3 p-4">
						<div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
						<div class="mb-4">
						<h5 class="card-title mb-0">Revenue Today</h5>
						</div>
						<div class="row align-items-center mb-2 d-flex">
						<div class="col-8">
						<h2 class="d-flex align-items-center mb-0">
						$11.61k
						</h2>
						</div>
						<div class="col-4 text-right">
						<span>2.5% <i class="fa fa-arrow-up"></i></span>
						</div>
						</div>
						<div class="progress mt-1 " data-height="8" style="height: 8px;">
						<div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
						</div>
						</div>
						</div>
						</div>
						</div>
			
			
<?php }include('includes/footer.php'); ?>
			
		</div>
	</div>
		<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script>
</body>
</html>

<?php  
}}?>