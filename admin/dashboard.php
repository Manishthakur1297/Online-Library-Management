<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Online Library Management System | Admin DashBoard</title>

    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>

    <div class="navbar">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand">

                    <img src="assets/img/olms.jpg" />
                </a>

            </div>
        </div>
    </div>

    <section class="menu-section">

        <ul class="topnav">

            <li class="right"><a href="logout.php">Log Out</a></li>
            <li class="right"><a href="change-password.php">Change Password</a></li>
            <li class="right"><a href="issue-book.php">Issue Book</a></li>
            <li class="right"><a href="reg-students.php">Reg Students</a></li>
            <li class="right"><a class="active" href="dashboard.html" 9>Dashboard</a></li>
        </ul>

    </section>

    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">ADMIN DASHBOARD</h4>

                </div>

            </div>

            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="alert">
                        <?php
$sql ="SELECT StudentId from tblstudents";
$query =mysqli_query($connect,$sql);
$count = mysqli_num_rows($query);
?>
                            <h3><?php echo htmlentities($count);?></h3> Student Registered
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="alert">
                        <?php 
$sql1 ="SELECT id from tblbooks ";
$query1 = mysqli_query($connect,$sql1);
$count1 = mysqli_num_rows($query1);
?>


                            <h3><?php echo htmlentities($count1);?></h3> Total Books
                    </div>
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </div>
    </div>
    
       <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2017 Online Library Management System | Designed by : Ajay Rana & Manish
                </div>

            </div>
        </div>
    </section>

</body>

</html>