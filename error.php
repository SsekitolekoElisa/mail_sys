<?php
// Process delete operation after confirmation
    // Include config file
    
    // Prepare a delete statement
    
        // Bind variables to the prepared statement as parameters
        
        // Set parameters
        
        // Attempt to execute the prepared statement
            // Records deleted successfully. Redirect to landing page
            // echo "Oops! Something went wrong. Please try again later.";
     
    // Close statement
    
    // Close connection
    // Check existence of id parameter
        // URL doesn't contain id parameter. Redirect to error page
?>

<?php 
include "admin/adminNav.php";

?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 mb-3">Delete Record</h2>
                    <form action="" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value=""/>
                            <p>Are you sure you want to delete this driver record?</p>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="admin/staffRecords.php" class="btn btn-secondary">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
