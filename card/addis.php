<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card</title>
    <style>
        body{
            background-color: silver;
			width:793.5px;
			height:1222.5px;
        }
        #div1{
            margin: 0px;
            padding: 0px;
            border: 2px solid black;
            height: 200px;
            margin-left:5px;
            margin-top: 5px;
            border-radius: 0px;
            background-color: white;
        }
        #p1{
            background-color: rgb(24, 34, 90);
            margin:0px;
            color: white;
            font-weight: bold;
            text-align: center;
            font-size: 20px;
            padding: 10px;
            
        }
        #image{
            border: 1px solid black;
            width: 80px;
            height: 80px;
            margin: 0px;
            padding: 0px;
            margin-top: 60px;
            margin-left: 20px;
            float: left;
        }
		   #jjjj{
            border: 1px solid black;
            width: 60px;
            height: 40px;
            margin: 0px;
            padding: 0px;
            margin-top: 0px;
            margin-left: 10px;
            
        }
        #div2{
            float: left;
            margin-left: 40px;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        #p2{
            margin-top: 0px;
            margin-bottom: 5px;
        }
        #label1{
            font-size: 18px;
            font-weight: bold;
            opacity: 0.7;
        }
        #label2{
            font-size: 18px;
            font-weight: bold;
            margin-left: 15px;
        }
        h1{
            margin-left: 10px;
            margin-bottom: 0px;
        }
        h3{
            margin-top: 0px;
            float: left;
            margin-left: 10px;
        }
    </style>
</head>
<body style="width:100%;float:left;display:flex;flex-wrap:wrap;overflow-x:auto;">
<?php
 $cnt=0;
while($cnt<10){
?>
    <div id="div1" style="width:45%;padding:10px" >
        <p id="p1">IDENTIFICATION CARD  <img id="jjjj" src="lelisa.jpg"  alt=""></p>
        <img id="image" src="lelisa.jpg"  alt="">
       <div id="div2">
           <p id="p2"><label id="label1">Name:</label> <label id="label2">MD. Tarif Hasan</label></p>
           <p id="p2" style="margin-top: 0px;"><label id="label1">Rank:</label> <label id="label2">Manager</label></p>
           <p id="p2"><label id="label1">D.O.B:</label> <label id="label2">23/09/1997</label></p>
           <p id="p2"><label id="label1">ID NO:</label> <label id="label2">18005686</label></p>
           <p id="p2"><label id="label1">Issued:</label> <label id="label2">January 2018</label></p>
           <p id="p2"><label id="label1">Expires:</label> <label id="label2">December 2021</label></p>
       </div>
       <!--<h1>ABCD Tech Services Limited, Dhaka</h1>
       <h3 style="margin-left: 60px;">www.abcdtechbd.com,</h3>
       <h3>abcdtechbd@gmail.com</h3>
	   
	   
	   
	 
    $cols = 5;
    $rows = 2;
    $count = 0;
    while($count < $rows) {
        echo "<div style='width:100%;float:left;display:flex;align-items:center;justify-content:space-between;'>";
        for($i = 0; $i < $cols; $i++) {
            echo "<div style='width:20%;float:left;text-align:center'>".$html[$count*$cols + $i]."</div>";
        }
        echo "</div>";
        $count++;
    }


We can use the flexbox model to create a horizontally scrollable table that displays items in five columns and two rows. The HTML code should look like this: 


<div style="display:flex;flex-wrap:nowrap;overflow-x:auto;">
  <div style="width:20%;">Item 1</div>
  <div style="width:20%;">Item 2</div>
  <div style="width:20%;">Item 3</div>
  <div style="width:20%;">Item 4</div>
  <div style="width:20%;">Item 5</div>
  <div style="width:20%;">Item 6</div>
  <div style="width:20%;">Item 7</div>
  <div style="width:20%;">Item 8</div>
  <div style="width:20%;">Item 9</div>
  <div style="width:20%;">Item 10</div>
</div>
	   -->
    </div>
	
<?php 
$cnt++; 
if($cnt==4)
	echo "<br>" ;

}?>
</body>
</html>