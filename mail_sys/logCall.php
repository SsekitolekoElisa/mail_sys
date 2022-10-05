<?php
include "mail_DB_connect.php";
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $retrieve_query =  "select * from staff where username='$username' and password='$password'";
    $execute_query = mysqli_query($con, $retrieve_query);
    $fetch = mysqli_fetch_assoc($execute_query);
    $row = mysqli_num_rows($execute_query );

 if($row>0){
    // echo matching user types to there corresponding pages;
       if($fetch['role']==="Courier"){
        session_start();
        $_SESSION['USERNAME']=$fetch['username'];
        header("location:Carrier/courier.php?msgsuccess=Login successful");  
       }
       else{
          
        session_start();
        $_SESSION['USERNAME']=$fetch['username'];
           header("location:admin/admin.php?msgsuccess=Login successful"); 
       }
      
   
   } 
   else{
       header("Location: logIn.php?message=Invalid details, Try again!!!");
       exit();
      }
   }



?>