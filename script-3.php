

<?php
include "config.php";
$name=$_POST['name'];
$phone=$_POST['phone'];
$accountno=$_POST['acno'];
$accounttype=$_POST['actype'];
$balance=$_POST['balance'];
$bank=$_POST['bname'];
$branch=$_POST['bran'];
$reg="insert into information values('$name','$phone','$accountno','$accounttype','$balance',' ',' ','$bank','$branch')";
$querry = mysqli_query($con, $reg);
header("Location:reg-display.php");
?>