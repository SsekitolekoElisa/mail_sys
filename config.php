<?php
session_start();


include "mail_DB_connect.php";
if(isset($_POST['login']))

  {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $retrieve_query =  "select * from staff where username='$username' and password='$password'";
    $execute_query = mysqli_query($con, $retrieve_query);
    $fetch = mysqli_fetch_assoc($execute_query);
    $row = mysqli_num_rows($execute_query );
   // echo($row);
 if($row>0){
   // var_dump($fetch["role"]);

//     // echo matching user types to there corresponding pages;
       if($fetch['role'] == "Courier"){
        $_SESSION["USERNAME"] = $fetch["username"];
        header("location:Carrier/courier.php?msgsuccess=Login successful");  
       }  else{
          var_dump($fetch);

        $_SESSION["USERNAME" ]= $fetch["username"];
           header("location:admin/admin.php?msgsuccess=Login successful"); 
       }
    }  else
    {

      $_alert ="invalid detaile ,Please try again!!!";
  
     header("Location: index.php?message=Invalid details, Try again!!!");
    
     exit();
    }
   }



?>
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBPSTjYYVBk76ffyZEQmifLVPPPOIv20IY",
    authDomain: "mail-system-fcd86.firebaseapp.com",
    projectId: "mail-system-fcd86",
    storageBucket: "mail-system-fcd86.appspot.com",
    messagingSenderId: "921406321829",
    appId: "1:921406321829:web:7644b56134e737ba62094c",
    measurementId: "G-E1M8N2TSKS"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>