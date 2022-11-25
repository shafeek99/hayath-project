<?php
include ('db.php');
$username =  mysqli_real_escape_string($mysqli , $_POST['username']);
$password = mysqli_real_escape_string($mysqli , $_POST['password']);
$qry = "SELECT * FROM login WHERE username = '".$_POST ['username']."'
                              AND password = '".$_POST ['password']."'";

$result   = $mysqli->query($qry);
$num      = mysqli_num_rows($result);
if ($num == 0) 
{
    header("Location:login_form.php?msg=2");
}
else 
{
	if ($row = mysqli_fetch_array($result)) 
	{  
		  $_SESSION['login'] = $row['username'];
		  header("Location:dashboard.php");
	}
}
?>