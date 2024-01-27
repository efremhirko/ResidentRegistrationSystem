<?php

include('../includes/config.php');

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Front</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
$query=mysqli_query($con," SELECT * FROM registerresident");
$cnt=1;
	while($row=mysqli_fetch_array($query))
{?>
<style>
.bottom-left{
  position: absolute;
  top: 0px;
  left: 110px; 
}
.bottom-le{
  position: absolute;
  bottom:70px;
  left: 5px;
  color: black;
  
}
.bottom-text{
  position: absolute;
  bottom: 210px;
  left: 130px;
  color: black;
}
.bottom-logo{
  position: absolute;
  bottom: 225px;
  left: 20px;
  color: #0047AB;
}
.bottom-image{
  position: absolute;
  top: 80px;
  right: 50px;
  color: #0047AB;
}
.bottom-sig{
  position: absolute;
  bottom: 30px;
  left: 20px;
  color: #0047AB;
}
.bottom-mall{
  position: absolute;
  bottom: 0px;
  left: 20px;
  color: black;
}
.bottom-gad{
  position: absolute;
  bottom: -15px;
  left: 20px;
  
}

.bottom-woreda{
  position: absolute;
  bottom: 181px;
  left: 20px;
  color: black;
}
.bottom-no{
  position: absolute;
  bottom: 150px;
  left: 100px;
  color: black;
}
.bottom-bukke{
  position: absolute;
  bottom: 170px;
  left: 435px;
  color: #ff0000;
}
.bottom-name{
  position: absolute;
  bottom: 130px;
  left: 110px;
  color: black;
}
.bottom-Fname{
  position: absolute;
  bottom: 110px;
  left: 110px;
  color: black;
}
.bottom-dha{
  position: absolute;
  bottom: 83px;
  left: 110px;
  color: black;
}
.bottom-dhii{
  position: absolute;
  bottom: 60px;
  left: 110px;
  color: black;
  font-family: 'Times New Roman', serif;
}
.bottom-gu{
  position: absolute;
  bottom: 36px;
  left: 110px;
  color: black;
}
.bottom-dhumu{
  position: absolute;
  bottom: 12px;
  left: 110px;
  color: black;

}
.bottom-right {
  position: absolute;
  bottom: 40px;
  right: 25px;
  color:black;
  color: #0047AB;
  
  
}

.Bottom-right {
  
  margin-bottom: 0px;
  margin-right: 3%;
  margin-top: -25%;
  margin-left: 80%;

}
.center,h4 {
  font-family: "Times New Roman", Times, serif;
  color: black;
}
body {
  font-family: "Trirong", serif;
  color: #1A1110;
}
</style>

<?php
$Date = date("d-m-Y");
$date= date('d-m-Y', strtotime($Date. ' + 2 years'));
?>


<!-- partial:index.partial.html -->
<div style="font-size:14px;"class="container">
<h2 class="bottom-left">የቢሾፍቱ ከተማ ነዋሪ መታወቂያ ካርድ</h2>

<h3 class="bottom-text"> Bishoftu City Resident ID Card </h3><img class="bottom-logo" width="70px" src="Oromia.png" /><p class="bottom-woreda">የምዝገባ ቁ. /Reg.No  &nbsp&nbsp&nbsp&nbsp <?php echo htmlentities($row['regstration_no']); ?></p><?php if($row['image']==""){ ?>
   <img class="bottom-image" width="70px" height="50px" src="../images/noimage.png"><?php } else {?>
   <img class="bottom-image" width="70px" height="50px" src="../images/<?php echo htmlentities($row['image']);?>" >
   <?php } ?>
<p class="bottom-no"> የመታ.ቁ /ID No&nbsp&nbsp&nbsp <?php echo htmlentities($row['id_no']); ?></p>
<p class="bottom-name"> ሙሉ ስም &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </p>
<p class="bottom-Fname"> Full Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo htmlentities($row['full_name']); ?></p>
<p class="bottom-dha"> የትውልድ ቀን/DOB &nbsp   <?php echo htmlentities($row['birth_date']); ?></p>
<p class="bottom-dhii">የደም አይነት/Blood Group &nbsp <?php echo htmlentities($row['Blood_Group']); ?> &nbsp&nbsp&nbsp  ጾታ/Sex &nbsp&nbsp  <?php echo htmlentities($row['gender']); ?></p>
<p class="bottom-gu"> የተሰጠበት ቀን/Issue Dt &nbsp <?php echo date("d-m-Y");?></p>
<p class="bottom-dhumu"> ማብቂያ ቀን/Expiry Dt &nbsp<?php echo $date;?> </p>

<img class="bottom-sig" width="70px" src="sig.png" />
<?php if($row['image']==""){ ?>
   <img class="bottom-le" width="90px"  src="../images/noimage.png"><?php } else {?>
   <img class="bottom-le" width="100px" height="90px" src="../images/<?php echo htmlentities($row['image']);?>" >
   <?php } ?>

<h5 class="bottom-mall">ሰጪ አካል</h5>
<h6 class="bottom-gad">Issuing Attority</h6>
<h4 class="bottom-right">
  <div class="content">
 
      </div>

</div>

<!-- partial -->
  
</body>
<?php  } ?>
</html>
