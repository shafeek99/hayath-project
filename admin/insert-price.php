<?php
//include database configuration file
include("db.php");


$one_gram_rate	= 	mysqli_real_escape_string($mysqli , $_POST['1gram_rate']);
$eight_gram_rate	= 	mysqli_real_escape_string($mysqli , $_POST['8gram_rate']);






$sql		 =   "INSERT INTO gold_rate(1gram_rate,
                                        8gram_rate
										)
		 			VALUES	('$one_gram_rate',
                     $eight_gram_rate
						)";	
				
				
				if (!mysqli_query($mysqli,$sql)) {
die('Error: ' . mysqli_error($mysqli));
}
header('Location:add-gold.php')
?>
