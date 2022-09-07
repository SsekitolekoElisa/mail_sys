<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>courier</title>
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
        <!-- Page content -->
        <div class=" container ">
            <div class="col-sm-9">
                <div class="well">
                    <h4>Dashboard</h4>
                    <p>Some text..</p>
                </div>
                
              
                </div>
                <div class="insights">
                    <div class="new">
                        <span><i class="fa fa-list-ul" aria-hidden="true"></i></span>
                        <div class="middle">
                            <div class="left">
                                <h3>New Mails</h3>
                                <h1>17</h1>
                            </div>
                            <div class="progress">

                                <div class="number">
                                    <p>33%</p>
                                </div>
                            </div>
                        </div>
                        <small>Last 24 hours</small>
                    </div>
                    <!-- End of task -->
                    <div class="open">
                        <span><i class="fa fa-tasks" aria-hidden="true"></i></span>
                        <div class="middle">
                            <div class="left">
                                <h3> Mails to delivered</h3>
                                <h1>21</h1>
                            </div>
                            <div class="progress">

                                <div class="number">
                                    <p>46%</p>
                                </div>
                            </div>
                        </div>
                        <small>Last 24 hours</small>
                    </div>
                    <!-- End of task -->
                    <div class="Completed">
                        <span><i class='bx bx-task-x'></i></span>
                        <div class="middle">
                            <div class="left">
                                <h3>Undelivered mails</h3>
                                <h1>8</h1>
                            </div>
                            <div class="progress">

                                <div class="number">
                                    <p>15%</p>
                                </div>
                            </div>
                        </div>
                        <small>Last 24 hours</small>
                    </div>
                    

                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="well">
                            <h4>Users</h4>
                            <p>1 Million</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="well">
                            <h4>Pages</h4>
                            <p>100 Million</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="well">
                            <h4>Sessions</h4>
                            <p>10 Million</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="well">
                            <h4>Bounce</h4>
                            <p>30%</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="well">
                            <p>Text</p>
                            <p>Text</p>
                            <p>Text</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="well">
                            <p>Text</p>
                            <p>Text</p>
                            <p>Text</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="well">
                            <p>Text</p>
                            <p>Text</p>
                            <p>Text</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="well">
                            <p>Text</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="well">
                            <p>Text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div>
        <div>
            <table>
                <tr class="bg-info">
                    <td>

                    </td>
                </tr>

                <tr  class="bg-primary">
                    <td>
                        
                    </td>
                </tr>

                <tr  class="bg-info">
                    <td>
                        
                    </td>
                </tr>

                <tr  class="bg-primary">
                    <td>
                        
                    </td>
                </tr>
            </table>
        </div>
</body>

</html>