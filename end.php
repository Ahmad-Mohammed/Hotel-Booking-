<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css\end.css">
  <title>end</title>
</head>
<body>
  <div class="card-wrap">
    <div class="card">
        <div class="card-back">
            <div class="user-info">
                <div class="username">Operation Accomplished Successfully</div>
                <div class="user-bio">
<?php
$sel = "SELECT * FROM `custmer`";
$qrydisply = mysqli_query($cooect , $sel);
while ($row = mysqli_fetch_array($qrydisply)) { $id = $row['id']; }
   echo " <b>If you want to edit the order, click here</b><br>
   <a href='edit.php?edit=$id'>edit</a><br>
    <b>If you want to delete the order, click here</b><br>
   <a href='delete.php?delete=$id'>delete</a>";
?>  
                </div>
            </div>
        </div>
    </div>
 </div>
</body>
</html>