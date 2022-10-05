
<?php
 include 'mail_DB_connect.php';
if(isset($_GET['confirm'])){
    $id = $_GET['confirm'];
     $deliTimedate = date("Y-m-d h:i:s");
    

 $insert_query = "update mail set deliTimedate =' $deliTimedate ' WHERE clientNo ='$id'";
        $execute_query = mysqli_query($con, $insert_query);
    header("location:Carrier/confirmDelivery.php");
 } else{
   // echo" <script>alert('Unable to Confirm');</script> ";
 }

 if(isset($_GET['Undo'])){
    $id = $_GET['Undo'];

    $insert_query = "update mail set deliTimedate = null WHERE clientNo ='$id'";
    $execute_query = mysqli_query($con, $insert_query);
header("location:Carrier/deliveredMails.php");
} else{

    //echo" <script>alert('Unable to Undo');</script> ";

}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    // delete from staff where email ="kemitano@gmail.com";
    $insert_query = "delete from staff  WHERE email ='$id'";
    $execute_query = mysqli_query($con, $insert_query);
header("location:admin/staffRecords.php");
} else{

    //echo" <script>alert('Unable to Undo');</script> ";

}




?>
