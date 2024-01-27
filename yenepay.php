<?php 
session_start();
include('includes/config.php'); 

$select=mysqli_query($con,"SELECT * FROM notification where id='".$_SESSION['id']."'");

$num=mysqli_num_rows($select);
if($num>0){
while($row=mysqli_fetch_array($select)){
	
	$selectprice=mysqli_query($con, "SELECT * FROM finace WHERE ItemName='".$row['request']."'");
	$num1=mysqli_num_rows($selectprice);
	
	if($num1>0){
		$roww=mysqli_fetch_array($selectprice);	
		
		$update=mysqli_query($con,"UPDATE registerresident SET payement=1");
		
		if($update){
			header('location:');
		}
		
	}else{
		
		echo"no data in finance";
	}
}
}else{
	
	echo"no database in notification";
}
?>


<a href="success.php"> <span>Pay with </span></a>
<!--
  <a id="yenepayLogo" href="https://yenepay.com/checkout/Home/Process/?ItemName=Id+Card&ItemId=Card1&UnitPrice=200&Quantity=1&Process=Express&ExpiresAfter=&DeliveryFee=&HandlingFee=&Tax1=&Tax2=&Discount=&SuccessUrl=http%3A%2F%2Flocalhost%2FResidentRegistrationSystem%2Fsuccess.php&IPNUrl=http%3A%2F%2Flocalhost%2FResidentRegistrationSystem%2Ferror.php&MerchantId=21370">
<img style="width:100px" src=" https://yenepayprod.blob.core.windows.net/images/logo.png">
                                </a>-->
                                <span></span>