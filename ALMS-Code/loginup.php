<?php

if(isset($_POST['login-submit'])){

require 'dbc.inc.php';

$mailuid=$_POST['mailuid'];
$password=$_POST['pwd'];

  if(empty($mailuid)||empty($password)){
   header("Location: ../includes/index.php?error=emptyfields");
   exit();
   }
   else{
     $sql = "SELECT *FROM users WHERE userid=? OR emailuser=?;";
     $stmt = mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location: ../includes/index.php?error=sqlerror");
      exit();       
      }
     else{
      
      mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if($row = mysqli_fetch_assoc($result)){
        $passwordcheck = password_verify($password,$row['passuser']);
         if($passwordcheck == false){
         header("Location: ../includes/index.php?error=passwordwrong");
          exit(); 
         }
        else if($passwordcheck == true){
        session_start();
        $_SESSION['idu'] = $row['iduser'];
        $_SESSION['uid'] = $row['userid'];
         
        header("Location: ../tarp/order.php?login=success");
        exit();
    
       }     

        }
    else{
       header("Location: ../includes/index.php?error=nouser");
       exit();

     }

      }
   }
}
else{
     header("Location: ../includes/index.php");
     exit();
}