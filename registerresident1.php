<?php
session_start();
include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}else{	
$msg="";
$query=mysqli_query($con,"SELECT * FROM admin WHERE id='".$_SESSION['id']."'");

$num=mysqli_fetch_array($query);

$rol=$num['role'];


if($rol=="registrar"){
	
	
	
if(isset($_POST['submit']))
{
	
require_once('vendor/autoload.php');

$barcode='images/'.time().".png";
$barimage=time().".png";
$color = [0,0,0];
	
$id_no="J/M/".rand(10000000, 99999999);	


	$full_name=mysqli_real_escape_string($con,$_POST['full_name']);	

$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
file_put_contents($barcode, $generator->getBarcode($id_no."\r\n".$full_name, $generator::TYPE_CODE_128, 3, 50, $color));	
	
$today = date("Y-m-d");
//dreAmaracrack  5577 2023

	$birth_date=mysqli_real_escape_string($con,$_POST['dob']);
	$diff = date_diff(date_create($birth_date), date_create($today));
	$age=$diff->format('%y');	
	$Blood_Group =mysqli_real_escape_string($con,$_POST['blood']);		
	$mother_name=mysqli_real_escape_string($con,$_POST['mother_name']);		
	$house_number=mysqli_real_escape_string($con,$_POST['house_number']);	
	$email=mysqli_real_escape_string($con,$_POST['email']);		
	$username=mysqli_real_escape_string($con,$_POST['username']);	
	$password=md5($_POST['password']);		
	$ecp=mysqli_real_escape_string($con,$_POST['ecp']);		
	$regstration_no="B/M/".rand(100000, 999999);	
	$phone=$_POST['phone'];		
	$address_of_resident=mysqli_real_escape_string($con,$_POST['country']." ".$_POST['region']." ".$_POST['city']);
	$marital_status=mysqli_real_escape_string($con,$_POST['marital_status']);
		
	$ephone=mysqli_real_escape_string($con,$_POST['ephone']);		
	$kebele=mysqli_real_escape_string($con,$_POST['kebele']);
    $image=$_FILES["image"]["name"];
	$gender=mysqli_real_escape_string($con,$_POST['gender']);
	 

		
$s = ucfirst($full_name);
$bar = ucwords(strtolower($s));
$data = preg_replace('/\s+/', '', $bar);

$temp = explode(".", $_FILES["image"]["name"]);
$newfilename = $data.'.'. end($temp);
move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $newfilename);
// check email validation and save information

$chk = mysqli_query($con,"select * FROM registerresident where full_name='$full_name' and mother_name='$mother_name'");
$rs = mysqli_fetch_array($chk);
if($rs == "")
{
$ret=mysqli_query($con,"INSERT INTO registerresident (full_name,birth_date,age,Blood_Group,mother_name,house_number,email,username,password,ecp,regstration_no,id_no,idbarcode,phone,address_of_resident,ephone,marital_status,kebele,image,gender, date_of_registration) VALUES ('$full_name','$birth_date','$age','$Blood_Group','$mother_name','$house_number','$email','$username','$password','$ecp','$regstration_no','$id_no','$barimage','$phone','$address_of_resident','$ephone','$marital_status','$kebele','$newfilename','$gender','$today')");
} 

if($ret)
{

$_SESSION['msg']="Sent Successfully!";
}
else
{
  $_SESSION['msg']="Error : Duplicate entry";
}
	
}


?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Jirata Galmesuu</title>
	<!-- Mobile Specific Metas -->
	<meta birth_date="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
<script src="includes/sweetalert.min.js"></script>



	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?fAmaraily=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
	<style type="text/css">

</style>	
</head>
<body>
	

	<?php if($_SESSION['id']!="");?>
<?php $query=mysqli_query($con,"select * from admin where id='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ ?>
	
			<?php include('includes/header.php'); ?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
			
				<!-- Default Basic Forms Start -->
				
				

				<!-- Form grid Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-center">
							<center><h4 class="text-blue h4">REGISTERATION FORM</h4></center>
							
						</div>
					</div>
					<form name="dept" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
								<label for="full_name">Full name:</label>

<input type="text"  class="form-control" pattern="^[A-Z][a-z]{1,}\s[A-Z][a-z]{1,}(\s[A-Z][a-z]{1,})?$" id="full_name" name="full_name" value="" placeholder="Full Name" minlength="6" maxlength="50"autocomplete="off" required>

								</div>
							</div> 
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
			<label for="phone">Phone Number:</label>
<input class="form-control" type="tel" id="phone" name="phone" value="+251" oninput="this.value = /^\+251\d{0,9}$/.test(this.value) ? this.value : '+251';" pattern="^\+251\d{9}$" maxlength="13" autocomplete="off"  required>
								</div>
							</div>
							
							
														<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Kebele:</label>
							<select class="form-control" name="kebele"required  >
								<option disabled selected style="display:none;">Select Kebele</option>
								<option value="B/C/01">B/C/01</option>
								<option value="B/C/02">B/C/02</option>
								<option value="B/C/03">B/C/03</option>
								<option value="B/C/04">B/C/04</option>
								<option value="B/C/05">B/C/05</option>
								<option value="B/C/06">B/C/06</option>
								<option value="B/C/07">B/C/07</option>
								<option value="B/C/08">B/C/08</option>
							</select>
						</div>
						</div>
								
							
							
							</div>
							
								<div class="row">
  <div class="col-md-4 col-sm-12">
    <div class="form-group">
      <label for="country">Country:</label>  <span><button id="add-country-button">Add Country</button></span>
      <select id="country" class="form-control" name="country" required >
        <option value="" style="display:none;">Select a country</option>
        <option value="Ethiopia">Ethiopia</option>
      </select>
	
    </div>
  </div>

  <div class="col-md-4 col-sm-12">
    <div class="form-group">
      <label for="region">Region:</label>
      <select id="region" class="form-control" name="region" required >
        <option value="" disabled style="display:none;">Select a region</option>
      </select>
    </div>
  </div>

  <div class="col-md-4 col-sm-12">
    <div class="form-group">
      <label for="city">City:</label>
      <select id="city" class="form-control" name="city" required >
        <option value="" disabled style="display:none;">Select a city</option>
      </select>
    </div>
  </div>
</div>
							
							
							
							
							
							<div class="row">
						<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="" autocomplete="off" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
								</div>                                                           
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Username</label>
									<input type="text" class="form-control" id="username" name="username" value="" placeholder="Username" autocomplete="off"  required >
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control"  id="myInput" name="password" value="" placeholder="Password" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$">
                                    
								</div>
							</div>
						</div>
							
							<div class="row"> 
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Mother name</label>
							<input type="text" name="mother_name"  class="form-control" pattern="^[A-Z][a-z]{1,}\s[A-Z][a-z]{1,}(\s[A-Z][a-z]{1,})?$" id="full_name" value="" placeholder="Mother name" minlength="6" maxlength="50" autocomplete="off"  required>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
								
									<label>Date Of Birth</label>
									<input type="date" class="form-control" id="birth_date" name="dob" max="<?php echo htmlentities(date("Y-m-d"));?>" value="" placeholder="Birth Date" autocomplete="off"  required>							</div>
							</div>
							<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Blood Group:</label>
							<select class="form-control" name="blood"required  >
								<option disabled selected style="display:none;">Select Blood Group</option>
								<option value="A+ve">A RhD positive (A+)</option>
								<option value="A-ve">A RhD negative (A-)</option>
								<option value="B+ve">B RhD positive (B+)</option>
								<option value="B-ve">B RhD negative (B-)</option>
								<option value="O+ve">O RhD positive (O+)</option>
								<option value="O-ve">O RhD negative (O-)</option>
								<option value="AB+ve">AB RhD positive (AB+)</option>
								<option value="AB-ve">AB RhD negative (AB-)</option>
							</select>
						</div>
						</div>
				</div> 
					
						
						
						
						<div class="row">
				           <div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>House Number</label>
									<input type="text" autocomplete="off"  class="form-control" id="house_number" name="house_number" value="" required placeholder="House Number" >
								</div>
							</div>
							
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Emeregcy Contact Person</label>
				<input type="text" name="ecp"  class="form-control" pattern="^[A-Z][a-z]{1,}\s[A-Z][a-z]{1,}(\s[A-Z][a-z]{1,})?$" id="full_name"  value=""autocomplete="off" placeholder="Full name" minlength="6" maxlength="50" required>
								</div>
							</div>
						
							<div class="col-md-4 col-sm-12">
								<div clasSs="form-group">
							<label> Emergcy Phone Number</label>
<input class="form-control" type="tel" id="phone" name="ephone" value="+251" oninput="this.value = /^\+251\d{0,9}$/.test(this.value) ? this.value : '+251';" pattern="^\+251\d{9}$" maxlength="13"autocomplete="off"  required>					</div>
							</div>
						 
							<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Marital Status :</label>
											<select class="form-control" name="marital_status"required  >
												
					<option disabled selected style="display:none;">Select Marital Status</option>
												<option value="Single">Single</option>
												<option value="married">married</option>
												<option value="Unmarried">Unmarried</option>
												<option value="Divorce">Divorce</option>
												<option value="Divorce">Widdow</option>
											</select>
										</div>
									</div>
							
						
							
							<div class="col-md-4 col-sm-12">
						<div class="form-group">
						<label>Upload Profile Picture</label>
						<input type="file" class="form-control form-control-lg" id="image" name="image" class="form-control"  value="selected" required  accept="image/*" />
						</div>
						</div>
						</div>
			
						
					<div class="form-group">
						<label>Gender</label>
						<div class="d-flex"> 
						<div class="custom-control custom-radio mb-5 mr-20">
							<input type="radio" id="customRadio4" class="custom-control-input"  name="gender" value="Male" required>
							<label class="custom-control-label weight-400" for="customRadio4">Male</label>
						</div>
						<div class="custom-control custom-radio mb-5">
							<input type="radio" id="customRadio5" class="custom-control-input"  name="gender" value="Female" required>
							<label class="custom-control-label weight-400" for="customRadio5">Female</label>
						</div>
						
						<div class="custom-control custom-radio mb-5">
							<input type="radio" id="customRadio6" class="custom-control-input"  name="gender" value="Other" required>
							<label class="custom-control-label weight-400" for="customRadio6">Other</label>
						</div>
						</div>
						
						
					</div> 			
<input type="submit" class="btn btn-primary"  name="submit"  value="Save Information">

					
              </form>
					
				</div>
					
				</div>
				
		<?php
if(isset($_POST['submit']))
{
?> 
<?php if($_SESSION['msg']=="Sent Successfully!"){?>
<script>
	swal({
  title: "Good job!",
  text: "<?php echo htmlentities($_SESSION['msg']);?>",
  icon: "success",
	});
	</script>
<?php }else{ ?>
	<script>
	swal({
  title: "Oops...",
  text: "<?php echo htmlentities($_SESSION['msg']);?>",
  icon: "error",
	});
	</script>
<?php } }?>
		
		

<!-- Input Validation End -->

			</div>
			<?php include('includes/footer.php'); ?> 
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	
	<!-- add sweet alert js & css in footer -->
  <script src="includes/sweetalert2.all.js"></script>
  <script src="includes/sweet-alert.init.js"></script>
  
  
  
  
  
<script>const regionsByCountry = {
  Ethiopia: [
    { value: 'Oromia', label: 'Oromia' },
    { value: 'Sumale', label: 'Sumaleale' },
    { value: 'Afar', label: 'Afar' },
    { value: 'SidAmaraa', label: 'SidAmaraa' },
    { value: 'SNNP', label: 'SNNPNP' },
    { value: 'GAmarabela', label: 'GAmarabela' },
    { value: 'Benishangul', label: 'Benishangul' },
    { value: 'Finfine', label: 'Finfine' },
    { value: 'Harar', label: 'Harar' },
    { value: 'Amara', label: 'Amaraara' },
    { value: 'Tigiry', label: 'Tigiry' }
  ]
};

const citiesByRegion = {
  Oromia: [
    { value: 'Finfine', label: 'Finfine' },
    { value: 'Burayu', label: 'Burayu' },
    { value: 'Bishoftu', label: 'Bishoftu' },
	{ value: 'Sebata', label: 'Sebata' },
    { value: 'Sululta', label: 'Sululta' },
    { value: 'Lega Tefo', label: 'Lega Tefo' },
	{ value: 'Amarabo', label: 'Amarabo' },
    { value: 'Holota', label: 'Holota' },
    { value: 'Bule Hora', label: 'Bule Hora' }
  ],
  Sumale: [
    { value: 'houston', label: 'jijiga' },
    { value: 'austin', label: 'kabirdar' },
    { value: 'dallas', label: 'dalo' }
  ],
  Afar: [
    { value: 'Awsi Rasu', label: 'Awsi Rasu' },
    { value: 'Kilbet Rasu', label: 'Kilbet Rasu' },
    { value: 'Gabi Rasu', label: 'Gabi Rasu' },
    { value: 'Fanti Rasu', label: 'Fanti Rasu' },
    { value: 'Hari Rasu', label: 'Hari Rasu' },
    { value: 'Mahi Rasu', label: 'Mahi Rasu' },
    { value: 'Argobba', label: 'Argobba' }
  ],
  SidAmaraa: [
    { value: 'Aleta Chuko', label: 'Aleta Chuko' },
    { value: 'Alete Wendo', label: 'Alete Wendo' },
    { value: 'Hawassa', label: 'Hawassa' },
    { value: 'Aroresa', label: 'Aroresa' },
    { value: 'Bensa', label: 'Bensa' },
    { value: 'Bursa', label: 'Bursa' },
    { value: 'Wondo Genet', label: 'Wondo Genet' }
  ],
  SNNP: [
    { value: 'Arba Minch', label: 'Arba Minch' },
    { value: 'Sodo', label: 'Sodo' },
    { value: 'Jinka', label: 'Jinka' },
    { value: 'Dila', label: 'Dila' },
    { value: 'Butajira', label: 'Butajira' },
    { value: 'Welkite', label: 'Welkite' },
    { value: 'Bonga', label: 'Bonga' },
    { value: 'Hosaena', label: 'Hosaena' }
  ],
  GAmarabela: [
    { value: 'AAfarwaa', label: 'AAfarwaa' },
    { value: 'Majang', label: 'Majang' },
    { value: 'Nuer', label: 'Nuer' },
    { value: 'Itang', label: 'Itang' }
  ],
  
  Benishangul: [
    { value: 'Assosa', label: 'Asosa' },
    { value: 'Kamaraashi', label: 'KAmaraashi' },
    { value: 'Metekel', label: 'Metekel' },
    { value: 'Bamarabasi', label: 'Bamarabasi' }
  ],
  Finfine: [
    { value: 'Addis Ketema', label: 'Addis Ketema' },
    { value: 'Akaky Kaliti', label: 'Akaky Kaliti' },
    { value: 'Bole ', label: 'Bole' },
    { value: 'Arada', label: 'Arada' },
    { value: 'Gullale', label: 'Gullale' },
    { value: 'Lideta', label: 'Lideta' }
  ],
   Amara: [
    { value: 'Bahir Dara', label: 'Bahir Dara' },
    { value: 'Gondor', label: 'Gondor' },
    { value: 'Dese', label: 'Dese' },
    { value: 'Kombolcha', label: 'Kombolcha' },
    { value: 'KAmaraise', label: 'KAmaraise' },
    { value: 'Debre Tabor', label: 'Debre Tabor' }
  ],
  Tigiry: [
    { value: 'Mekelle', label: 'Mekelle' },
    { value: 'Adgrat', label: 'Adgrat' },
    { value: 'AkSumale', label: 'AkSumale' },
    { value: 'Shire', label: 'Shire' },
    { value: 'Humera', label: 'Humera' },
    { value: 'Shiraro', label: 'Shiraro' }
  ],
   Harar: [
    { value: 'Amarair Nur', label: 'Amarair Nur' },
    { value: 'Abadir', label: 'Abadir' },
    { value: 'Shenkur ', label: 'Shenkur' },
    { value: 'Jin Elaa', label: 'Jin Elaa' },
    { value: 'Aboker', label: 'Aboker' },
    { value: 'Hakim', label: 'Hakim' }
  ]
};


const countrySelect = document.getElementById('country');
const regionSelect = document.getElementById('region');
const citySelect = document.getElementById('city');

const addCountryButton = document.getElementById('add-country-button');
addCountryButton.addEventListener('click', addCountry);

// Function to add a new country with its regions and cities
function addCountry() {
  const newCountryValue = prompt('Enter the name of the new country:');
  const  newregionValue = prompt('Enter the name of the new region:');
  const newCityValue = prompt('Enter the name of the new city:');
  if (newCountryValue) {
    regionsByCountry[newCountryValue] = [];
    const newCountryOption = document.createElement('option');
    newCountryOption.value = newCountryValue;
    newCountryOption.text = newCountryValue;
    countrySelect.add(newCountryOption);
    countrySelect.value = newCountryValue;
    countrySelect.dispatchEvent(new Event('change'));
  }
   if (newregionValue) {
    regionsByCountry[newregionValue] = [];
    const newregionOption = document.createElement('option');
    newregionOption.value = newregionValue;
    newregionOption.text = newregionValue;
    regionSelect.add(newregionOption);
    regionSelect.value = newregionValue;
    regionSelect.dispatchEvent(new Event('change'));
  }
   if (newCityValue) {
    regionsByCountry[newCityValue] = [];
    const newCityOption = document.createElement('option');
    newCityOption.value = newCityValue;
    newCityOption.text = newCityValue;
    citySelect.add(newCityOption);
    citySelect.value = newCityValue;
    citySelect.dispatchEvent(new Event('change'));
  }
}

countrySelect.addEventListener("change", function() {
  const selectedCountry = countrySelect.value;

  if (selectedCountry) {
    regionSelect.disabled = false;
    regionSelect.innerHTML = '<option value="">--Please select a region--</option>';
    regionsByCountry[selectedCountry].forEach((region) => {
      const option = document.createElement('option');
      option.value = region.value;
      option.text = region.label;
      regionSelect.add(option);
    });
  } else {
    regionSelect.disabled = true;
    citySelect.disabled = true;
    regionSelect.innerHTML = '<option value="">--Please select a region--</option>';
    citySelect.innerHTML = '<option value="">--Please select a city--</option>';
  }
});

regionSelect.addEventListener("change", function() {
  const selectedRegion = regionSelect.value;

  if (selectedRegion) {
    citySelect.disabled = false;
    citySelect.innerHTML = '<option value="">--Please select a city--</option>';
    citiesByRegion[selectedRegion].forEach((city) => {
      const option = document.createElement('option');
      option.value = city.value;
      option.text = city.label;
      citySelect.add(option);
    });
  } else {
    citySelect.disabled = true;
    citySelect.innerHTML = '<option value="">--Please select a city--</option>';
  }
});



</script>
</body>
</html>
<?php } ?><?php }else{
	header('location:index.php');
}} ?>