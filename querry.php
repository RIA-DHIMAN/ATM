<?php
include "script.php";
if(isset($_POST['pin'])){
     echo $account_no =$_POST['account_no'];
   
    $select="select * from information where account_no = '$account_no'";
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
if(isset($_POST['balance'])){
    // $account_no =$_POST['accountn_no'];
   
    // $select="select * from information where account_no = '$account_no'";
    // $querry=mysqli_query($con,$select);
    // if($querry){
    //     while ($ria = $querry->fetch_assoc()) {
    //         echo $sid = $ria['account_no'];
    //     }
    //     session_start();
    //     $_SESSION['sid'] = $account_no;
        header("Location: balance.php");
    }
if(isset($_POST['withdraw'])){
    // $account_no =$_POST['accountn_no'];
   
    // $select="select * from information where account_no = '$account_no'";
    // $querry=mysqli_query($con,$select);
    // if($querry){
    //     while ($ria = $querry->fetch_assoc()) {
    //         echo $sid = $ria['account_no'];
    //     }
    //     session_start();
    //     $_SESSION['sid'] = $account_no;
        header("Location: withdraw.php");
    }
    if(isset($_POST['pin-change'])){
        // $account_no =$_POST['accountn_no'];
       
        // $select="select * from information where account_no = '$account_no'";
        // $querry=mysqli_query($con,$select);
        // if($querry){
        //     while ($ria = $querry->fetch_assoc()) {
        //         echo $sid = $ria['account_no'];
        //     }
        //     session_start();
        //     $_SESSION['sid'] = $account_no;
            header("Location: pin-change.php");
        }
        if(isset($_POST['fast'])){
            // $account_no =$_POST['accountn_no'];
           
            // $select="select * from information where account_no = '$account_no'";
            // $querry=mysqli_query($con,$select);
            // if($querry){
            //     while ($ria = $querry->fetch_assoc()) {
            //         echo $sid = $ria['account_no'];
            //     }
            //     session_start();
            //     $_SESSION['sid'] = $account_no;
                header("Location: fast.php");
            }
            if(isset($_POST['statement'])){
                // $account_no =$_POST['accountn_no'];
               
                // $select="select * from information where account_no = '$account_no'";
                // $querry=mysqli_query($con,$select);
                // if($querry){
                //     while ($ria = $querry->fetch_assoc()) {
                //         echo $sid = $ria['account_no'];
                //     }
                //     session_start();
                //     $_SESSION['sid'] = $account_no;
                    header("Location: statement.php");
                }

?>