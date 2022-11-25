<?php
//include database configuration file
include("db.php");


$metal_type	= 	mysqli_real_escape_string($mysqli , $_POST['metal_type']);






$sql		 =   "INSERT INTO product_data(metal_type
										)
		 			VALUES	('$metal_type'
						)";	
				
				
				if (!mysqli_query($mysqli,$sql)) {
die('Error: ' . mysqli_error($mysqli));
}
header('Location:add-data.php')
?>
