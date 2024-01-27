<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gender Distribution Bar Chart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 50px;
        }
        .bar {
            height: 18px;
            background-color: blue;
            display: inline-block;
            text-align: right;
            color: white;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gender Distribution</h1>
        <?php
            include('includes/config.php');
            $query = mysqli_query($con, "SELECT gender, count(*) as total FROM registerresident GROUP BY full_name");
            
            while ($row = mysqli_fetch_assoc($query)) {
                $gender = $row['gender'];
                $total = $row['total'];
                echo "<div class='row'>";
                echo "<div class='col-6'>" . $gender . "</div>";
                echo "<div class='col-6'><div class='bar' style='width: " . ($total * 20) . "px'>" . $total . "</div></div>";
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>