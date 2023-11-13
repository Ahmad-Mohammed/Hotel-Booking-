<?php
include('db.php');
if(isset($_POST['login'])){
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    if (!empty($first) && !empty($last) && !empty($email)) {

    $sql ="INSERT INTO `custmer`(`first`, `last`, `email`) VALUES ('$first',' $last',' $email ')";
    $qry = mysqli_query($cooect,$sql );
    if ($qry) {
        header("location: end.php");
    }

    }else{
       
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\test2.css">

    <title>test2</title>
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
            <input class="first" type="text" placeholder="First Name" name="first" /><br><br>
            <input class="last" type="text" placeholder="Last Name" name="last" /><br><br>
            <input class="email-add " type="text" placeholder="Your Email" name="email" /><br><br>
            <input type="submit" class="login" name="login" value="Run">
           </form>
            
          </div>
        </div>
          <div class="page-right"></div>
        </div>
    
</body>
</html>