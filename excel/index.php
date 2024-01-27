<?php require 'config.php'; ?>
 <DOCTYPE html>
<html lang="en" dir="ltr">
	<head> 
		<meta charset="utf-8">
		<title>Import Excel To MySQL</title>
	</head>
	<body>
		
		

		<?php
    
$fileExtension="";
if(isset($_POST["import"])){
    $fileName = $_FILES["excel"]["name"];
    $fileExtension = explode('.', $fileName);
    $fileExtension = strtolower(end($fileExtension));
    
    if(in_array($fileExtension, array('xlsx','xlsm','xlsb','xltx', 'xltm', 'xls', 'xlt', 'xml', 'xlam', 'xla','xlw','xlr'))) {
        $newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

        $targetDirectory = "uploads/" . $newFileName;
        move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

        error_reporting(0);
        ini_set('display_errors', 0);

        require 'excelReader/excel_reader2.php';
        require 'excelReader/SpreadsheetReader.php';

        $reader = new SpreadsheetReader($targetDirectory);

        foreach($reader as $key => $row){
            if ($key === 0) {
                continue;
            }

            $full_name = $row[0];  
            $birth_date = $row[1];  
            $age = $row[2];  
            $Blood_Group = $row[3];  
            $mother_name = $row[4];  
            $house_number = $row[5];
            $ecp = $row[6];  
            $regstration_no  = $row[7];
            $id_no = $row[8];  
            $phone = $row[9];
            $address_of_resident = $row[10];  
            $marital_status  = $row[11];
            $ephone  = $row[12];
            $kebele  = $row[13];
            $gender = $row[14];  
            $role = $row[15];
            $date_of_registration = $row[16]; 

    if(empty($full_name)||empty($birth_date)  ||empty($age) || empty($Blood_Group) || empty($mother_name) || empty($house_number)||  empty($ecp) || empty($regstration_no)||  empty($id_no)||  empty($phone) || empty($address_of_resident)  ||empty($marital_status) || empty($ephone)||  empty($kebele) || empty($gender)||  empty($role)||  empty($date_of_registration)) {
                echo "<script>
                        alert('Data should not be empty');
                        document.location.href = '';
                      </script>";
                exit();
            } else {
                $query=mysqli_query($con, "INSERT INTO registerresident VALUES('', '$full_name', '$birth_date', '$age', '$Blood_Group', '$mother_name', '$house_number', '', '', '', '$ecp', '$regstration_no', '$id_no', '', '$phone', '$address_of_resident', '$marital_status', '$ephone', '$kebele', '', '$gender', '$role', '', '', '', '$date_of_registration', '')");

                if($query){
                    echo "
                        <script>
                            alert('Successfully imported');
                            document.location.href = '../residentinformation.php';
                        </script>
                    ";
                } else {
                    echo "
                        <script>
                            alert('Import failed');
                            document.location.href = '';
                        </script>
                    ";
                }
            }
        }
    } else {
        echo "Incorrect file format";
    }
}
?>
		
		<form class="" action="" method="post" enctype="multipart/form-data">
			<input type="file" name="excel" required value="">
			<button type="submit" name="import">Import</button>
		
		</form>
	</body>
</html>
