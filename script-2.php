<?php
include "script.php";
if(isset($_POST['with'])){
    $take=$_POST['withdraw-amt'];
$newamt=$balance-$take;
$updatesql= "update information set balance = '$newamt' where account_no='$account_no'";
$updatequerry= mysqli_query($con,$updatesql);
header("Location:amt-withdrawn.php");
}
if(isset($_POST['cash'])){
    $take=$_POST['cash'];
    $newamt=$balance-$take;
    $updatesql= "update information set balance = '$newamt' where account_no='$account_no'";
    $updatequerry= mysqli_query($con,$updatesql);
    header("Location:amt-withdrawn.php");
}
?>