<?php

//connecting to mail_deliverydb database.

$con = mysqli_connect("localhost","root","","mail_deliverydb");

if(!$con)
die('Could not connect to database'.mysqli_connect_error());



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