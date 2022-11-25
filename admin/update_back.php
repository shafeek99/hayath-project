<?php
//include database configuration file
include("db.php");
$product_id	= 	mysqli_real_escape_string($mysqli , $_POST['product_id']);
$product_name	= 	mysqli_real_escape_string($mysqli , $_POST['product_name']);
$availability	= 	mysqli_real_escape_string($mysqli , $_POST['availability']);
$product_price	= 	mysqli_real_escape_string($mysqli , $_POST['product_price']);
$purity	= 	mysqli_real_escape_string($mysqli , $_POST['purity']);
$metal_type	= 	mysqli_real_escape_string($mysqli , $_POST['metal_type']);
$id	= 	mysqli_real_escape_string($mysqli , $_POST['id']);


// $img1='';

if(!empty($_FILES["product_image"]['tmp_name'])){
  $temp1 = explode(".",$_FILES["product_image"]["name"]);
  $newfilename1 = rand(). "_".date('m-d-Y_hia') . '.' .end($temp1);
  move_uploaded_file($_FILES['product_image']['tmp_name'],"./product_img/".$newfilename1);
  $product_image=$newfilename1;
}

$sql		         =	"UPDATE hayathgold SET 
product_id	     =  '$product_id',
product_name	         = '$product_name',
availability				 =	'$availability',
product_price	         = '$product_price',
purity				 =	'$purity	',
metal_type				 =	'$metal_type',
product_image				 =	'$product_image'
WHERE id='$id'"; 
 if (!mysqli_query($mysqli,$sql)) {
  die('Error: ' . mysqli_error($mysqli));
}
header('Location:tables-basic.php')
?>