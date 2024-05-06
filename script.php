<?php
session_start();
include "config.php";
$sid = $_SESSION["sid"];
 $insert = "select * from information where account_no = '$sid'"; 
$fetchquery = mysqli_query($con, $insert);
foreach($fetchquery as $data){
$name=$data['name'];
$account_no=$data['account_no'];
$account_type=$data['acc_type'];
$balance=$data['balance'];
$transiction=$data['transction'];
$id=$data['course'];
$bank=$data['bname'];
$branch=$data['loc'];
}
?>
