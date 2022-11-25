<?php
include("db.php");
$id=$_GET['delete'];
$sql	=	"DELETE  FROM product_data WHERE id=$id";
if (mysqli_query($mysqli, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}
header('Location: product_data.php');

?>