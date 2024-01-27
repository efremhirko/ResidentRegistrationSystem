<?php
require_once(config.php);
require_once('vendor/autoload.php');
$barcode = 'images/'.time().".png";
$color = [255,0,0];
if(isset($_REQUEST['sbt-btn']))
{
	$bartext= $_REQUEST['bartext']'
	$query = mysqli_query(con, "insert into barcode set bartext='$bartext',barimage='$barimage'")
	if($query){?>
	<script>
	alert("data save successfully");
	</script>
		<?php
		
	}
}
$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
file_put_contents('barcode', $generator->getBarcode('$bartext', $generator::
TYPE_CODE_128, 3, 50,$color));
echo"<center><image src ='".$barcode"'></center>";
?>