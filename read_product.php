<?php
include("admin/db.php");
if (! empty($_POST["keyword"])) {
    $sql = $mysqli ->prepare("SELECT * FROM hayathgold WHERE product_name LIKE  ? ORDER BY product_name");
    $search = "{$_POST['keyword']}%";
    $sql->bind_param("s", $search);
    $sql->execute();
    $result = $sql->get_result();
    if (! empty($result)) {
        ?>
<ul id="country-list">
<?php
        foreach ($result as $hayathgold) {
            ?>
   <li
        onClick="selectCountry('<?php echo $hayathgold["product_name"]; ?>');">
      <?php echo $hayathgold["product_name"]; ?>
    </li>
<?php
        } // end for
        ?>
</ul>
<?php
    } // end if not empty
}
?>
  