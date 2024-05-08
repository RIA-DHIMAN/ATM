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
        $id =$_POST['accountn_no'];
       
        $select="select * from information where account_no = '$account_no'";
        $querry=mysqli_query($con,$select);
        if($querry){
            while ($ria = $querry->fetch_assoc()) {
                echo $sid = $ria['account_no'];
            }
            session_start();
            $_SESSION['sid'] = $account_no;
            header("Location: pin-change.php");
        }
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
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $amount = intval($_POST['amount']); // Always sanitize user input
                
                    if ($amount <= 0) {
                        die("Invalid amount. Please enter a positive number.");
                    }
                
                    // Fetch the user's current balance
                    $stmt = $pdo->prepare("SELECT balance FROM accounts WHERE user_id = :user_id");
                    $stmt->bindParam(':user_id', $user_id);
                    $stmt->execute();
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);
                
                    if ($result) {
                        $current_balance = $result['balance'];
                
                        if ($current_balance >= $amount) {
                            // Deduct the amount from the user's balance
                            $new_balance = $current_balance - $amount;
                            $update_stmt = $pdo->prepare("UPDATE accounts SET balance = :new_balance WHERE user_id = :user_id");
                            $update_stmt->bindParam(':new_balance', $new_balance);
                            $update_stmt->bindParam(':user_id', $user_id);
                            $update_stmt->execute();
                
                            echo "Withdrawal successful. Your new balance is: $" . $new_balance;
                        } else {
                            echo "Insufficient funds for withdrawal.";
                        }
                    } else {
                        echo "User not found.";
                    }
                } else {
                    echo "Invalid request method.";
                }
?>