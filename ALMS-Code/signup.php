<?php
if(isset($_POST["Signup"]))
{

require 'dbc.inc.php';

$uname=$_POST['uname'];
$email=$_POST['ename'];
$password=$_POST['password'];
$conformpassword=$_POST['repeatpassword'];

if(empty($uname)||empty($email)||empty($password)||empty($conformpassword)){
header("Location: ../tarp/sign.php?error=emptydfields&uname");
exit();
}

else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&& !preg_match("/^[a-zA-Z0-9]*$/",$uname)){
header("Location: ../tarp/sign.php?error=invalidename&duname");
exit();
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
header("Location:../tarp/sign.php?error=invalidemail&uname");
exit();
}
else if(!preg_match("/^[a-zA-Z0-9]*$/",$uname)){
header("Location: ../tarp/sign.php?error=invaliduname&ename");
exit();
}
else if($password!==$conformpassword){
header("Location: ../tarp/sign.php?error=passwordcheck&funame");
exit();
}
   else{
      $sql="SELECT userid FROM users WHERE userid=?";
      $stmt=mysqli_stmt_init($conn);

      if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location: ../tarp/sign.php?error=sqlerror");
       exit();
        }
      else {
      mysqli_stmt_bind_param($stmt,"s",$uname);
       mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
       $checkresult=mysqli_stmt_num_rows($stmt);
   if($checkresult >0){
    header("Location: ../tarp/sign.php?error=usertaken&ename");
    exit();
    }
   else
   {
     $sql="INSERT INTO users(userid,emailuser,passuser) VALUES(?,?,?)";
    $stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
     header("Location: ../tarp/sign.php?error=sqlerror");
     exit();
      }
     else {
      $hashedpassword=password_hash($password,PASSWORD_DEFAULT);
      mysqli_stmt_bind_param($stmt,"sss",$uname,$email,$hashedpassword);
      mysqli_stmt_execute($stmt);
       header("Location: ../tarp/login.php?signup=success");
       exit();
      }

    }

   }

}

mysqli_stmt_close($stmt);
mysqli_close($conn);

}
else{
header("Location../tarp/sign.php");
exit();
}
