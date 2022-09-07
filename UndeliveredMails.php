<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>undelevered</title>
    <link url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap')>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/style.css">
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

<body>
    <!-- nav bar -->

    <div class="container-fluid">

    </div>
    <nav class="navbar nav-expand-sm bg-info fixed-top">
        <div class="container-fluid ">
            <span style="font-size:30px;cursor:pointer" onclick="openNav();">&#9776; Menu</span>
            <ul style="list-style-type: none;padding: 0px;" class="nav-bar">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"><img
                            src="images/img_avatar1.png" alt="profile image" style="width: 40px;"
                            class="rounded-pill "></a><span class="glyphicon glyphicon-align-justify"></span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item glyphicon glyphicon-das " href="#"> <span><i
                                        class='bx bxs-dashboard'></i></span> Darshboard</a>

                        </li>
                        <li><a class="dropdown-item  glyphicon glyphicon-log-in" href="#"><span><i
                                        class='bx bxs-user-detail'></i></span>Profile</a></li>
                        <li><a class="dropdown-item glyphicon glyphicon-user" href="#"><span><i
                                        class='bx bx-log-out'></i></span>Log out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    </div>


    <!-- The sidebar -->
    <div class="sidebar" id="mySidenav" class="sidenav">
        <!-- <a class="active" href="#home">Home</a> -->
        <button class=" btn-close " style="padding-right: 40px;" onclick="closeNav();"></button><span
            style="font-size: 20px;">close menu</span>
        <a href="courier.php" class="active">Darshboard

        </a>
        <a href="mailsToDeliver.php">Mails to deliver

        </a>
        <a href="#new mails">Confirm Delivery

        </a>
        <a href="#Clients" role="button">Undelivered Mail

        </a>
        <a href="#about">Calender
            r</a>
        <a class="nav-link " href="#about"></a>
        </ul>


    </div>


    <!-- Page content -->
    <div class="   content align-content-center container  " id="mycontent"
        style="float: right; margin: 30px; padding: 70px; width: 1250px; background-color:#fff ;">
        <h1>Undelivered mails</h1>
        
    </div>
</body>

</html>