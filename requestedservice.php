<?php
session_start();

include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{
	$value;
	if(isset($_GET['value'])){
		
		$value=$_GET['value'];
	}
	
	?>


<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>requested service</title>


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

	
</head>
<body>


<?php if($_SESSION['id']!="");?>
<?php 

if(isset($_GET['approve']))
{
$updateQuery=mysqli_query($con,"UPDATE registerresident SET card_status='approved' WHERE id='".$_GET['approve']."'");
$updateQuery=mysqli_query($con,"UPDATE notification SET see='yes' WHERE id='".$_SESSION['idcard']."'");
	
}

$query=mysqli_query($con,"select * from admin where id='".$_SESSION['id']."'");
$cnt=1;


while($row=mysqli_fetch_array($query))
{ ?>

<?php include('includes/header.php'); ?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				
				<!-- Export Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Requested Service</h4>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">#</th>
									<th>Name</th>
									<th>Phone</th>
									<th>Username</th>
									<th>Status</th>
									<th>Requested Service</th>
									<th>Payment</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								 <?php
$query=mysqli_query($con,"select * from registerresident where card_status='pending'");
$cnt=1;
while($rw=mysqli_fetch_array($query))
{	$sql=mysqli_query($con,"select * from notification where username='".$rw['username']."'");
while($rww=mysqli_fetch_array($sql))
{	
?>					<tr>
									<td class="table-plus"><?php echo $cnt; ?></td>
									<td><?php echo htmlentities($rw['full_name']); ?></td>
									<td><?php echo htmlentities($rw['phone']); ?></td>
									<td><?php echo htmlentities($rw['username']); ?></td>
									<td style="color:red;"><?php if($rw['status']==0){
								echo'<font style="color: red;">Deactivated</font>';
						}
						else{
							echo' <font style="color: green;">Active';
							}
						 ?></td>
									<td><?php echo htmlentities($rww['request']); ?></td>
									<td><?php echo htmlentities($rw['payment']); ?></td>
									
									 
									<td><div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href="?approve=<?php echo $rw['id'];?>"><i class="dw dw-edit2"></i> Approve</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
											</div>
										</div></td>
								</tr>
<?php $cnt++;}}?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
<?php }include('includes/footer.php');?>
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

<?php } ?>