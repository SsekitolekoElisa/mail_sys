<?php
include 'mail_DB_connect.php';

$retrieve_query = "SELECT client.boxnumber,client.clientNo,client.fname,client.lname,client.telnumber, mail.addedTime FROM client inner join mail on client.clientNo=mail.clientNo where deliTimedate is null;";

$execute_query = mysqli_query($con, $retrieve_query);

$fetch = mysqli_fetch_assoc($execute_query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap')>
    <!-- html bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- javaSCRIPT bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Boxiocns CND link -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script>
    </script>

</head>

<body>
    <div class="container">
        <table class="  table table-bordered">
            <thead>
                <tr class="table-bordered">
                    <td rowspan="2">P.O Box</td>
                    <td colspan="4">Recipient</td>
                    <td rowspan="2">Added Time</td>
                    <td rowspan="2">Confirmation</td>
                </tr>
                <!-- <tr>
                <hr>
            </tr> -->

                <tr>
                    <td>Client Id</td>
                    <td>lname</td>
                    <td>first name</td>
                    <td>Phone number</td>
                </tr>
            </thead>
            <tbody>


                <!--  -->

                <?php

                while ($fetch = mysqli_fetch_assoc($execute_query)) { ?>
                    <tr bgcolor="#d9dbdb">
                        <td><?php echo $fetch['boxnumber']; ?></td>
                        <td><?php echo $fetch['clientNo']; ?></td>
                        <td><?php echo $fetch['fname']; ?></td>
                        <td><?php echo $fetch['lname']; ?></td>
                        <td>0<?php echo $fetch['telnumber']; ?></td>
                        <td><?php echo $fetch['addedTime']; ?></td>
                    
                        <td><button type="submit" class="text-uppercase text-white text-sm w100 fw-normal btn btn-success btn3-sm" name="submit">confirm</button> </td>
                    </tr>
                <?php } ?>



            </tbody>


        </table>

    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>





    <table width="100%" border="1">
        <tbody>
            <tr>
                <td width="1587" height="41" align="center" bgcolor="#dc143c" style="color: #FDF3F3">Copyright &copy; Dream Home Limited 2022. All rights reserved -- Dream Home &trade; </td>
            </tr>
        </tbody>

    </table>

</body>

</html>