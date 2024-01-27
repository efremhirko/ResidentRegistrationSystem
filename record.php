<?php
$con  = mysqli_connect("localhost","root","","resident_registration");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT * FROM registerresident";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $productname[]  = $row['gender']  ;
            $sales[] = $row['age'];
        }
 
 
 }
 
 
?>