<?php
session_start();

include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{ ?>

<?php
if(isset($_GET['paidStatus'])){
	$update=mysqli_query($con,"UPDATE registerresident SET payment='1', card_status='issued' WHERE id='".$_GET['paidStatus']."'");	
   
}
 $request="";
if(isset($_SESSION['var'])){
  
  $request=$_SESSION['var'];
  
$query=mysqli_query($con,"SELECT * FROM registerresident WHERE id='".$_SESSION['id']."'");

$num=mysqli_num_rows($query);
if($num>0){
  While($rw=mysqli_fetch_array($query)){
$name=$rw['full_name'];  
$email=$rw['email'];
$username=$rw['username'];  
$password=$rw['password'];  
$mobile=$rw['phone'];


  }
$resul="SELECT * FROM notification WHERE username='$username' and request='$request'";

$result=mysqli_query($con,$resul);

if(mysqli_num_rows($result) == 0){
$card_status="pending";
$update=mysqli_query($con,"UPDATE registerresident SET card_status='$card_status' WHERE id='".$_SESSION['id']."'");	

$res=mysqli_query($con,"SELECT * FROM notification WHERE username='$username' and request='0'");

if(mysqli_num_rows($res)>0){
$updateQ=mysqli_query($con,"UPDATE notification SET request='$request' WHERE username='$username'");		
}else{
    $insert=mysqli_query($con, "INSERT INTO notification(name,email,username,password,mobile,request) VALUES ('$name','$email','$username','$password','$mobile','$request')");
	
    if ($insert) {
        echo "Data inserted successfully";
    } else {
        echo "Failed to insert data";
    }
}
} else {
	$sqlq=mysqli_query($con,"SELECT * FROM registerresident WHERE id='".$_SESSION['id']."'");
	$sqlr=mysqli_fetch_assoc($sqlq);
	if($sqlr['card_status']=='pending'){
    echo "service already requested wait until it get admin aproval!";
	}
}
}else {echo"you are not user!";}}
 ?>


<?php 
$query=mysqli_query($con,"select * from registerresident where id='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ ?>

<?php 
$sql=mysqli_query($con,"select * from notification where username='".$row['username']."'");
$cnt=1;
while($rww=mysqli_fetch_array($sql))
{ ?>
<?php include('includes/headerforuser.php');?>

			
		<div class="mobile-menu-overlay"></div>

	<div style="width:100%;
    margin:0;
    padding:0;" class="main-container">
	
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				
				<!-- Export Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Data Table with Export Buttons</h4>
					</div>
					<div class="pb-20">
				<table  class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">#</th>
									<th>Name</th>
									<th>Phone</th>
									<th>Username</th>
									<th>Status</th>
									<th>Requested Service</th>
									<th>Payment</th>
									<th>PayWith</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="table-plus"><?php echo htmlentities($row['id']); ?></td>
									<td><?php echo htmlentities($row['full_name']); ?></td>
									<td><?php echo htmlentities($row['phone']); ?></td>
									<td><?php echo htmlentities($row['username']); ?></td>
									<td style="color:red;"><?php echo htmlentities($row['card_status']); ?></td>
									<td><?php echo htmlentities($rww['request']); ?></td>
									<td><?php if($row['payment']==0){echo "Not Paid";}else{echo "Paid";} ?></td>
									
									<td><?php if($row['card_status']==="pending") {echo "please wait until your request is processed!";}else if($row['card_status']==="approved" && $row['payment']==0){?><span></span>
									<a href="success.php?paidStatus=<?php echo $row['id']?>"></a>
                               <a id="yenepayLogo" href="https://yenepay.com/checkout/Home/Process/?ItemName=Id+Card&ItemId=Card1&UnitPrice=1&Quantity=1&Process=Express&ExpiresAfter=&DeliveryFee=&HandlingFee=&Tax1=&Tax2=&Discount=&SuccessUrl=http%3A%2F%2Flocalhost%2FResidentRegistrationSystem%2Fsuccess.php?confirm=<?php echo $row['id'];?>&IPNUrl=http%3A%2F%2Flocalhost%2FResidentRegistrationSystem%2Ferror.php&MerchantId=21370">
                               <img style="width:100px" src=" https://yenepayprod.blob.core.windows.net/images/logo.png">
                                </a>
									<span></span><?php }else { echo"congradulation! you are finish";}?></td> 
									<td><div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
											</div>
										</div></td>
								</tr>
							</tbody>
						</table>
		
				</div>
				<!-- Export Datatable End -->
			</div>
			
		</div>
		</div>
	</div>
		
		
<?php  } }

include('includes/footerforuser.php');?>
		<!-- include jQuery library -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<!-- include custom JavaScript -->
	<script src="js/jqueryCustom.js"></script>
	<!-- include plugins JavaScript -->
	<script src="js/plugins.js"></script>
	<!-- include fontAwesome -->
	<script src="../../../kit.fontawesome.com/391f644c42.js"></script>
	
	
	
	
	
	
	
	<!-- js -->
	
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
	<script src="vendors/scripts/datatable-setting.js"></script></body>
</body>

<!-- Mirrored from htmlbeans.com/html/egovt/servicesSingle.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Dec 2022 08:51:15 GMT -->
</html>

<?php  } ?>