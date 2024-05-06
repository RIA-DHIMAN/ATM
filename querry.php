<?php
include "script.php";
if(isset($_POST['pin'])){
    $accountno =$_POST['accountn_no'];
   
    $select="select * from information where account_no = '$accountno'";
    $querry=mysqli_query($con,$select);
    if($querry){
        while ($ria = $querry->fetch_assoc()) {
            echo $sid = $ria['account_no'];
        }
        session_start();
        $_SESSION['sid'] = $account_no;
        header("Location: display-3.php");
    }
}

?>