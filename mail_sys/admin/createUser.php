<?php

include 'mail_DB_connect.php';
include "../Check.php";
$_SESSION['USERNAME']=check_login($con);
session_start();

if( !isset($_GET['edit']))
{
    $fetch['fname'] = "";
    $fetch['lname']= "";
   $fetch['gender']= "";
   $fetch['email']= "";
   $fetch['telnumber']= "";
    $fetch['role']= "";
 $fetch['username']= "";
    $fetch['password']= "";
  $fetch['branchNo']= "";

}else{
    $id = $_GET['edit'];
    
    $retrieve_query = "select fname,lname,gender,email,telnumber,role,username,password,branchNo from staff where email= '$id'";
    $execute_query = mysqli_query($con, $retrieve_query);
    $fetch = mysqli_fetch_assoc($execute_query);

    $fname = $fetch['fname'];
    $lname = $fetch['lname'];
    $gender = $fetch['gender'];
    $email = $fetch['email'];
    $telnumber = $fetch['telnumber'];
    $role = $fetch['role'];
    $username = $fetch['username'];
    $password = $fetch['password'];
    $branchNo = $fetch['branchNo'];
}

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
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/style.css">
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
                            <li><a class="dropdown-item glyphicon glyphicon-das " href="admin.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: msFilter; margin:4px">
                                        <path d="M4 13h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1zm-1 7a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v4zm10 0a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v7zm1-10h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1z"></path>
                                    </svg>Darshboard</a>

                            </li>
                            <li><a class="dropdown-item  glyphicon glyphicon-log-in" href="Profile.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: msFilter ; margin:4px">
                                        <path d="M15 11h7v2h-7zm1 4h6v2h-6zm-2-8h8v2h-8zM4 19h10v-1c0-2.757-2.243-5-5-5H7c-2.757 0-5 2.243-5 5v1h2zm4-7c1.995 0 3.5-1.505 3.5-3.5S9.995 5 8 5 4.5 6.505 4.5 8.5 6.005 12 8 12z"></path>
                                    </svg>Profile</a></li>
                            <li><a class="dropdown-item glyphicon glyphicon-user" href="logOut.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: msFilter; margin:4px">
                                        <path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path>
                                        <path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path>
                                    </svg>Log
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
        <a href="admin.php" class="active"> <span style="min-width:30px ;"></span><i class='bx bxs-dashboard'>
            </i> <span style=" margin:4px"> Darshboard</a></span>
        <a href="createUser.php">
            <span><i class='bx bxs-user-account'></i>
            </span> <span style=" margin:4px"> Create user account</a>
        <div class="nav-item Delivery Progressdropdown">
            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"><span><i class='bx bx-mail-send'></i></span><span style=" margin:4px"> Add new mails</span>
            </a><span class="glyphicon glyphicon-align-justify"></span>
            <ul class="dropdown-menu">
                <li><a id="drop" class="dropdown-item " href="NewMailAdd.php"><span class="text-dark fw-bold"></span>Kampala Branch

                    </a></li>
                <li><a id="drop" class="dropdown-item " href="" NewMailAdd.php"><span class="text-dark fw-bold"></span>Entebbe Branch

                    </a></li>
                <li><a id="drop" class="dropdown-item " href="NewMailAdd.php"><span class="text-dark fw-bold"></i></span>Jinja Branch

                    </a></li>
                <li><a id="drop" class="dropdown-item  " href="NewMailAdd.php"><span class="text-dark fw-bold"></i></span>Gulu Branch

                    </a>
                </li>
                <li><a id="drop" class="dropdown-item " href="NewMailAdd.php"><span class="text-dark fw-bold"></span>Mbarara Branch
                    </a></li>
            </ul>
        </div>
        <a href="addClient.php"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(255, 255, 255, 255);transform: msFilter ;">
                    <path d="M4.5 8.552c0 1.995 1.505 3.5 3.5 3.5s3.5-1.505 3.5-3.5-1.505-3.5-3.5-3.5-3.5 1.505-3.5 3.5zM19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 19h10v-1c0-2.757-2.243-5-5-5H7c-2.757 0-5 2.243-5 5v1h2z"></path>
                </svg>
            </span> <span style=" margin:4px">Add new CLient</a>
        <a href="clientsRecords.php" role="button"><span></span><i class='bx bxs-contact'></i></span> <span style=" margin:4px">Clients</a>
        <a href="staffRecords.php"><span><i class='bx bxs-user-detail'></span></i> <span style=" margin:4px">Staff</a>
        <div class="nav-item Delivery Progressdropdown">
            <a class="nav-link dropdown-toggle " role="button" data-bs-toggle="dropdown"><span><i class='bx bxs-package'></i></span> <span style=" margin:4px">Delivery Progress
            </a><span class="glyphicon glyphicon-align-justify"></span>
            <ul class="dropdown-menu">
                <li><a id="drop" class="dropdown-item  " href="deliveredMails.php"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, );transform: msFilter ; margin:4px">
                                <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                                <path d="M9.999 13.587 7.7 11.292l-1.412 1.416 3.713 3.705 6.706-6.706-1.414-1.414z"></path>
                            </svg></span>
                        Delivered
                        mails
                    </a>
                </li>
                <li><a id="drop" class="dropdown-item " href="undeliveredMails.php"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: msFilter;">
                                <path d="M9.172 16.242 12 13.414l2.828 2.828 1.414-1.414L13.414 12l2.828-2.828-1.414-1.414L12 10.586 9.172 7.758 7.758 9.172 10.586 12l-2.828 2.828z">

                                </path>
                                <path d="M12 22c5.514 0 10-4.486 10-10S17.514 2 12 2 2 6.486 2 12s4.486 10 10 10zm0-18c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8z"></path>
                            </svg></span>
                        Undelivered
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
                <h3>Add User</h3>
            </div>
        </div>
        <div>
            <form action="user.php" method="post" class="form-control form-control-sm|form-control-lg">
                <table>
                    <tr>
                        <td>
                    <tr>
                        <td>First name :</td>
                        <td><input type="text" name="fname" id="name1" value="<?php echo $fetch['fname']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Last name :</td>
                        <td><input type="text" name="lname" id="name2" value="<?php echo $fetch['lname']; ?>"></td>
                    </tr>

                    <tr>

                        <td>Gender :</td>
                        <td>
                            <input type="radio" name="gender" value="M" value="<?php echo $fetch['gender']; ?>">Male <br>
                            <input type="radio" name="gender" value="F"- value="<?php echo $fetch['gender']; ?>">Female
                        </td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td><input type="email" name="email" id="EMAIL" value="<?php echo $fetch['email']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Tellphone Number :</td>
                        <td><input type="phone number" name="telnumber" id="TellNo" value="<?php echo $fetch['telnumber']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Role:</td>
                        <td><input type="radio" name="role" value="Admin" value="<?php echo $fetch['role']; ?>">Adminstrater <br>
                            <input type="radio" name="role" value="Carrier" value="<?php echo $fetch['role']; ?>">Carrier
                        </td>
                        <!-- <td><input type="text" name="role" id="ROLE" default></td> -->
                    </tr>

                    </tr>
                    </td>



                    <td>
                        <tr>
                            <td>Username :</td>
                            <td>
                                <input type="text" name="username" id="user" placeholder="role@job80" value="<?php echo $fetch['username']; ?>">
                            </td>
                        </tr>

                        <tr>
                            <td>Password :</td>
                            <td>
                                <input type="password" name="password" id="password" placeholder="password" required value="<?php echo $fetch['password']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td> Confirm Password :</td>
                            <td>
                                <input type="password" name="cpassword" id="cpassword" placeholder="comfirm password" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Branch Code:</td>
                            <td>
                                <select name="branchNo" id="code" required value="<?php echo $fetch['branchNo']; ?>">
                                    <option>--SELECT BRANCH</option>
                                    <option name="branchNo" value="4">Kampala</option>
                                    <option name="branchNo" value="1">Entebbe</option>
                                    <option name="branchNo" value="3">Jinja</option>
                                    <option name="branchNo" value="5">Mbarara</option>
                                    <option name="branchNo" value="2">Gulu</option>
                                </select>

                            </td>
                        </tr>
                    </td>
                    </tr>



                </table>
                <button type="button" name="reset" value="reset" class="btn btn-danger">RESET</button>
                <button type="submit" name="submit" value="submit" class="btn btn-info">SUBMIT</button>
            </form>
        </div>

    </div>
    <footer class="footer-user">

        <p style="text-align:center; margin-right: 4%; font-size: 14px; margin-top: 6px;">Postal Uganda system ?? 2022</p>

    </footer>
</body>

</html>





<!-- <?php

// include "user.php";
// session_start();
?> -->
