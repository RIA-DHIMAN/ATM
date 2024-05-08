<?php
include "script.php";
if(isset($_POST['pin'])){
    $account_no =$_POST['account_no'];
   
    $select="select * from information where account_no = '$account_no'";
    $querry=mysqli_query($con,$select);
    $row= $querry -> fetch_assoc();
    if($row>0){
        while ($ria = $querry->fetch_assoc()) {
            echo $sid = $ria['account_no'];
        }
         $_SESSION['sid'] = $account_no;
         echo $_SESSION['sid'];
        header("Location: display-3.php");
    }else{
        header("Location: notfound.php");
    }
    
}
if(isset($_POST['balance'])){
        header("Location: balance.php");
    }
if(isset($_POST['withdraw'])){
        header("Location: withdraw.php");
    }
    if(isset($_POST['pin-change'])){
            header("Location: pin-change.php");
        }
        if(isset($_POST['fast'])){
            
                header("Location: fast.php");
            }
            if(isset($_POST['statement'])){
                    header("Location: statement.php");
                }
                
                
?>