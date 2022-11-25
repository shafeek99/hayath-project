<?php
include("db.php");
?>
<!DOCTYPE >
<html >
<head>

</head>

<body>
<?php
$id=$_GET['sa'];
$sql="SELECT *  FROM student_data WHERE id='$id'";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
	
	?>       

<table width="500" border="1" align="center">
  <tr>
    <td><form action="update_back.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="500" border="1">
        <tr>
          <td width="195">stud id</td>
          <td width="289"><label for="stud_name"></label>
            <input type="text" name="stud_id" id="stud_id" value="<?php echo $row['student_id'];?>" /></td>
        </tr>
        <tr>
          <td>stud name</td>
          <td><label for="stud_name"></label>
            <input type="text" name="stud_name" id="stud_name" value="<?php echo $row['student_name'];?>" /></td>
        </tr>
        <tr>
          <td>bh time</td>
          <td><input type="text" name="bt_time" id="bt_time" value="<?php echo $row['bh_time'];?>" /></td>
        </tr>
        <tr>
          <td>Image</td>
          <td><label for="bt_time"></label>
            <label for="fileField"></label>
            <input type="file" name="img1" id="fileField"></td>
        </tr>
        <tr>
          <td><input name="id" type="hidden" id="id" value="<?php echo $row['id'];?>" /></td>
          
          <td><input type="submit" name="button" id="button" value="Submit" /></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<?php
}
}
?>
</body>
</html>