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
if(isset($_POST['new-submit'])){
    $old_pin=$_POST['old-pin'];
    $new_pin=$_POST['new-pin'];
    $c_pin=$_POST['c-pin'];
    $new_phone=$_POST['phon_eno'];
    if($new_phone==$phone){
        if($old_pin==$account_no){
        if($new_pin==$c_pin){
            $updatequerry="update information set account_no = '$new_pin' where account_no='$account_no'";
            $updatesql=mysqli_query($con,$updatequerry);
            header("location:change.php");
        }else{
            echo "new pin mismatch";
        }
    }else{
        echo "old pin mismatch";
    }
    }
    else {
        echo "phone mismatch";
    }
}
?>