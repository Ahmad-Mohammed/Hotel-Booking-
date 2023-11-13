<?php
include("db.php");
$getid = $_GET['delete'];
$sel = "DELETE FROM `custmer` WHERE id =$getid";
$qry = mysqli_query($cooect , $sel);
if ($qry) {
    header("location: home.php");
}
?>
