<?php
session_start();

function check_login($con){

if (isset($_SESSION['USERNAME'])){
   $username = $_SESSION['USERNAME'];
   $query = "select * from users where username ='USERNAME' limit 1";


   $result = mysqli_query($con, $query);

   if($result && mysqli_num_rows( $result ) > 0){
    $USERNAME = mysqli_fetch_assoc($result);
    return $USERNAME;
   }
    
}

 header("location:logIn.php");
 die;
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