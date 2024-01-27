<?php

include("includes/config.php");
 


$query = mysqli_query($con,"select * from  registerresident");
$numofrows=mysqli_num_rows($query);
if($numofrows >= 1) {
    while ($row = mysqli_fetch_assoc($query)) {
		
		
	$result = mysqli_query($con, 'SELECT count(gender) as total FROM registerresident where gender="male"'); 
while($row =mysqli_fetch_assoc($result)){ 
$malevalue=$row['total'];
}
 $result = mysqli_query($con, 'SELECT count(gender) as total FROM registerresident where gender="female"'); 
while($row =mysqli_fetch_assoc($result)){ 
$femalevalue=$row['total'];

}

 $result = mysqli_query($con, 'SELECT count(id) as total FROM registerresident'); 
while($row =mysqli_fetch_assoc($result)){ 
$totalpopulation=$row['total'];

}



$result = mysqli_query($con, 'SELECT count(age) as total FROM registerresident WHERE age<=15');
while($row =mysqli_fetch_assoc($result)){ 

$childrenvalue=$row['total'];

}


$result = mysqli_query($con, 'SELECT count(age) as total FROM registerresident WHERE age>15 and age<=30');
while($row =mysqli_fetch_assoc($result)){ 

$youngage=$row['total'];

}

$result = mysqli_query($con, 'SELECT count(age) as total FROM registerresident WHERE age>30 and age<=60');
while($row =mysqli_fetch_assoc($result)){ 

$adultage=$row['total'];

}
$result = mysqli_query($con, 'SELECT count(age) as total FROM registerresident WHERE age>60');
while($row =mysqli_fetch_assoc($result)){ 

$oldage=$row['total'];

}


        $totalpopulation = $totalpopulation;
        $male = $malevalue;
        $female = $femalevalue;
        $children = $childrenvalue;
        $young = $youngage;
        $adult = $adultage;
        $old = $oldage;
		

    }
}
    else
    {
    echo "somting went wrong";
 
    }
?>
 
 
<html>
 
<head>
 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css" rel="stylesheet">
 
</head>
<body>
 
 
 
<canvas id="myChart" style="height: 200px; width: 500px;"></canvas>
 
<?php
 
echo "<input type='hidden' id= 'jan' value = '$totalpopulation' >";
echo "<input type='hidden' id= 'feb' value = '$malevalue' >";
echo "<input type='hidden' id= 'march' value = '$female' >";
echo "<input type='hidden' id= 'april' value = '$children' >";
echo "<input type='hidden' id= 'may' value = '$young' >";
echo "<input type='hidden' id= 'june' value = '$adult' >";
echo "<input type='hidden' id= 'july' value = '$old' >";
 
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
 
 
<script>
    var jan = document.getElementById("jan").value;
    var feb = document.getElementById("feb").value;
    var march = document.getElementById("march").value;
    var april = document.getElementById("april").value;
    var may = document.getElementById("may").value;
    var june = document.getElementById("june").value;
    var july = document.getElementById("july").value;
 
    window.onload = function()
    {
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };
        var config = {
            type: 'bar',
            data: {
                borderColor : "#fffff",
                datasets: [{
                    data: [
                        jan,
                        feb,
                        march,
                        april,
                        may,
                        june,
                        july
                    ],
                    borderColor : "#fff",
                    borderWidth : "3",
                    hoverBorderColor : "#000",
 
                    label: 'Population Report',
 
                    backgroundColor: [
                        "#0190ff",
                        "#56d798",
                        "#ff8397",
                        "#6970d5",
                        "#f312cb",
                        "#ff0060",
                        "#ffe400"
 
                    ],
                    hoverBackgroundColor: [
                        "#f384a",
                        "#56b798",
                        "#ff8397",
                        "#6970d5",
                        "#ffe400",
						"#0190ff"
                    ]
                }],
 
                labels: [
                    'Total Population',
                    'Male',
                    'Female',
                    'Children',
                    'Young',
                    'Adult',
                    'Old'
                ]
            },
 
            options: {
                responsive: true
 
            }
        };
        var ctx = document.getElementById('myChart').getContext('2d');
        window.myPie = new Chart(ctx, config);
 
 
    };
</script>
 
</body>
 
</html>