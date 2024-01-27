<?php
require_once(config.php);
require_once('vendor/autoload.php');
$barcode = 'images/'.time().".png";
$color = [255,0,0];
if(isset($_REQUEST['variable']))

$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
file_put_contents('barcode', $generator->getBarcode('081231723897', $generator::
TYPE_CODE_128, 3, 50,));
?>