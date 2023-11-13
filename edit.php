<?php
include("db.php");
$getid = $_GET['edit'];
$seledittwo = "SELECT * FROM `custmer` WHERE `id` = '$getid'";
$qry = mysqli_query($cooect, $seledittwo);
$selassoc = mysqli_fetch_assoc($qry);

$id = $selassoc['id'];
$first = $selassoc['first'];
$last = $selassoc['last'];
$email = $selassoc['email'];

if(isset($_POST['updat'])) {
    $upid = $_POST['upid'];
    $upfirst=  $_POST['upfirst'];
	$uplast =  $_POST['uplast'];
	$upemail =  $_POST['upemail'];

	$seleditt = "UPDATE `custmer` SET `first`='$upfirst',`last`='$uplast',`email`='$upemail' WHERE `id` = '$upid'";
	$qry = mysqli_query($cooect,$seleditt);
	if($qry) {
		header("location: home.php");
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css\test2.css">
    <title>edit</title>
</head>
<body>
    <div class="container">
        <div class="page-left">
          <div class="header">
          <div class="header1">Welcome Back</div>
          <div class="header2">Room Rent Price Is (<b>30$</b>)</div>
          </div>
          <div class="form-page">
            <form action="" method="post">         
            <input type="hidden" name="upid" value="<?php echo $id; ?>"/>
            <input class="first" type="text"  name="upfirst"  value="<?php echo $first; ?>" /><br><br>
            <input class="last" type="text"  name="uplast"  value="<?php echo $last; ?>"/><br><br>
            <input class="email-add " type="text" name="upemail"  value="<?php echo $email; ?>"/><br><br>
            <input type="submit" class="login" name="updat" value="Run">  
           </form>
          </div>
        </div>
        <div class="page-right"></div>
    </div> 
</body>
</html>