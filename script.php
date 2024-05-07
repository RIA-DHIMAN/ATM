<?php
session_start();
include "config.php";
$sid = $_SESSION["sid"];
 $insert = "select * from information where account_no = '$sid'"; 
$fetchquery = mysqli_query($con, $insert);
foreach($fetchquery as $data){
$name=$data['name'];
$phone=$data['phone'];
$account_no=$data['account_no'];
$account_type=$data['account_type'];
$balance=$data['balance'];
$transiction=$data['trans_id'];
$date=$data['trans_date'];
$bank=$data['bank_name'];
$branch=$data['branch'];
}
?>
