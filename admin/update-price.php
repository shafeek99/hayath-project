<?php
//include database configuration file
include("db.php");

$one_gram_rate	= 	mysqli_real_escape_string($mysqli , $_POST['1gram_rate']);
$eight_gram_rate	= 	mysqli_real_escape_string($mysqli , $_POST['8gram_rate']);

$id	= 	mysqli_real_escape_string($mysqli , $_POST['id']);


// $img1='';



$sql =	"UPDATE gold_rate SET 1gram_rate =	'$one_gram_rate',
                               8gram_rate =	'$eight_gram_rate'
WHERE id='$id'"; 
 if (!mysqli_query($mysqli,$sql)) {
  die('Error: ' . mysqli_error($mysqli));
}
header('Location:gold_price.php')
?>