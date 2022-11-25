<?php
include("db.php");

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="916" border="1" align="center">
  <tr>
    <td width="119">Product Id</td>
    <td width="130">product name</td>
    <td width="78">Availability</td>
    <td width="152">productprice</td>
    <td width="152">purity</td>
    <td width="152">metal Type</td>
    <td width="152">product image</td>
    <td class="text-right" width="152">Action</td>



    <td class="text-right">

<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
  <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-booking.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
</div>
</td>
 
  </tr>
<?php 
$sql = "SELECT * FROM hayathgold";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>  
  <tr>
    <td><?php echo $row['product_id'];?></td>
    <td><?php echo $row['product_name'];?></td>
    <td><?php echo $row['availability'];?></td>
    <td><?php echo $row['product_price'];?></td>
    <td><?php echo $row['purity'];?></td>
    <td><?php echo $row['metal_type'];?></td>
    <td><?php echo $row['product_image'];?></td>
    <td><?php /*?><?php echo $row['address'];?><?php */?></td>
    
    <td class="text-right">

<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
  <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-booking.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
</div>
</td>

    <td align="center"><a href="updates.php?sa=<?php echo $row["id"];?>">update</a></td>
    <td align="center"><a href="delete.php?delete=<?php echo $row["id"];?>">Delete</a></td>
  </tr>
  <?php
}
}
?>
</table>
<div id="delete_asset" class="modal fade delete-modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50" height="46">
							<h3 class="delete_class">Are you sure want to delete this Asset?</h3>
							<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
					</div>
				</div>
			</div>
</body>
</html>