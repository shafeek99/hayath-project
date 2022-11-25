<?php
//include database configuration file
include("db.php");

$metal_type	= 	mysqli_real_escape_string($mysqli , $_POST['metal_type']);
$id	= 	mysqli_real_escape_string($mysqli , $_POST['id']);


// $img1='';



$sql =	"UPDATE product_data SET metal_type =	'$metal_type'
WHERE id='$id'"; 
 if (!mysqli_query($mysqli,$sql)) {
  die('Error: ' . mysqli_error($mysqli));
}
header('Location:product_data.php')
?>