<?php
include "script.php";
if(isset($_POST['pin'])){
    $accountno =$_POST['accountn_no'];
   
    $select="select * from information where accounont = '$accountno'";
    $querry=mysqli_query($con,$select);
    if($querry){
        while ($ria = $querry->fetch_assoc()) {
            echo $sid = $ria['account_no'];
        }
        session_start();
        $_SESSION['sid'] = $accountno;
        header("Location: account.php");
    }
}
// if(isset($_POST['create-ac'])){
//     $sname=$_POST['name'];
//     $email=$_POST['email'];
//     $roll=$_POST['rollnumber'];
//     $dob=$_POST['dob'];
//     $fname=$_POST['fathername'];
//     $course=$_POST['course'];
//     $contact=$_POST['contact'];
//     $add=$_POST['address'];
//     $password=md5($_POST['password']);
//      echo $insertQuery="insert into student_info values('$sname','$email','$roll','$dob','$fname','$course','$contact','$add','$password','')";
//     $query=mysqli_query($con,$insertQuery);
//     if($query){
//         session_start();
//         $_SESSION['sid']=$email;
       
//        header("Location: account.php");
//     }else{
//         echo "account not created".mysqli_error($con);
//     }
// }
?>