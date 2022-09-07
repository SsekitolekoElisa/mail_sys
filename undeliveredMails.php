
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
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Boxiocns CND link -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("mycontent").style.width = "1250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0px";
            document.getElementById("mycontent").style.width = "1500px";
            document.getElementById("mytable").style.center.width = "1500px";
        }
    </script>
</head>

<body background="#000000">
    <!-- nav bar -->

    <div class="container-fluid">


        <nav class="navbar nav-expand-sm bg-danger fixed-top navColor">
            <div class="container-fluid ">
                <span style="font-size:30px;cursor:pointer" onclick="openNav();">&#9776; Menu</span>
                <ul style="list-style-type: none;padding: 0px;" class="nav-bar">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"><span class="text-white mx-2">Ahimbisibwe Job</span><img src="../images/img_avatar1.png" alt="profile image" style="width: 40px;" class="rounded-pill "></a><span class="glyphicon glyphicon-align-justify"></span>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item glyphicon glyphicon-das " href="admin.php"><i class='bx bxs-dashboard'></i>Darshboard</a>

                            </li>
                            <li><a class="dropdown-item  glyphicon glyphicon-log-in" href="Profile.php"><i class='bx bxs-user-detail'></i>Profile</a></li>
                            <li><a class="dropdown-item glyphicon glyphicon-user" href="logOut.php"><i class='bx bx-log-out'>Log
                                        out</i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>


    <!-- The sidebar -->
    <div class="sidebar" id="mySidenav" class="sidenav">
        <!-- <a class="active" href="#home">Home</a> -->
        <button class=" btn-close " style="padding-right: 40px; color: #fff;" onclick="closeNav();"></button><span style="font-size: 20px;">close menu</span>
        <a href="admin.php" class="active"> <span style="min-width:30px ;"><i class='bx bxs-dashboard'>
                </i></span>Darshboard</a>
        <a href="createUser.php">
            <span><i class='bx bxs-user-account'></i>
            </span> Create user account</a>
        <a href="NewMails.php"><span><i class='bx bx-mail-send'></i></span>Add new mails</a>
        <a href="clientsRecords.php" role="button"><span></span><i class='bx bxs-contact'></i></span>Clients</a>
        <a href="staffRecords.php"><span><i class='bx bxs-user-detail'></i></span>Staff</a>
        <div class="nav-item Delivery Progressdropdown">
            <a class="nav-link dropdown-toggle "  role="button" data-bs-toggle="dropdown"><span><i class='bx bxs-package'></i></span>Delivery Progress
            </a><span class="glyphicon glyphicon-align-justify"></span>
            <ul class="dropdown-menu">
                <li><a id="drop" class="dropdown-item " href="delayed_mail.php"><span><i class='bx bxs-user-minus'></i></span>Delayed
                        undelivered
                        mail </a></li>
                <li><a id="drop" class="dropdown-item  " href="undeliveredMails.php"><span><i class='bx bxs-user-x'></i></span>Undelivered
                        mails
                    </a>
                </li>
                <li><a id="drop" class="dropdown-item " href="returnedMails.php"><span><i class='bx bxs-user-minus'></i></span>Returned
                        undelivered
                        mail </a></li>
            </ul>
        </div>
        </a>

    </div>



    <div class="  align-content-center container-fluid  " id="mycontent" style="float: right; margin: 30px; padding: 70px; width: 1250px; ;">
        <!-- Page content -->
        <div class="col-sm-12">
            <div class="card-header">
                <h4>POSTA UGANDA
                </h4>
                <h3>Undelivered Mails</h3>
            </div>
        </div>
        
    </div>
</body>

</html>