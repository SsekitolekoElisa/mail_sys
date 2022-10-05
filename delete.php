 <!-- html bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
session_start();

if (isset($_SESSION['USERNAME'])) {
    // include "admin/adminNav.php";
    include 'mail_DB_connect.php';


    $retrieve_query = "select fname,lname,gender, email,telnumber,role,username from staff";

    $execute_query = mysqli_query($con, $retrieve_query);

    $fetch = mysqli_fetch_assoc($execute_query);

?>
<body>
    
 
    <div class="container-fluid bg-grey " id="main" style=" padding: 90px 20px  0px 60px; ">
        <div id="root">
            <div class="Toastify"></div>
            <div class="text-primary overflow-auto">
                <div class="container-fluid">
                    <div class="min-vh-100 justify-content-center py-4 g-0 row">
                        <div class="my-auto mx-center col-lg-3 col-md-4 col-sm-6">
                            <div class="mx-auto text-center">
                              

                            </div>
                         
                            <!-- <div class="bg-white rounded shadow-sm card"> -->
                                <div class="card-body text-center">
                                    <form action="" method="post">
                                        <div class="alert alert-danger">
                                            <input type="hidden" name="id" value="" />
                                            <p>Are you sure you want to delete this driver record?</p>
                                            <p>
                                                <a href="../time.php?delete=<?php echo $fetch['email']; ?>" class="btn btn-danger">yes</a>
                                                <!-- <input type="submit" value="Yes" class="btn btn-danger"> -->
                                                <a href="admin/staffRecords.php" class="btn btn-success">No</a>
                                            </p>
                                        </div>

                                    </form>
                                </div>
                            <!-- </div> -->
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

<?php
} else {
    header("location:../index.php");
}
?>

