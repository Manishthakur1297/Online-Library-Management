<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
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
        <title>Online Library Management System | User Dash Board</title>
        <!-- CUSTOM STYLE  -->
        <link href="assets/css/style.css" rel="stylesheet" />

    </head>

    <body>
        <!------MENU SECTION START-->
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

                <li class="right"><a href="logout.php">LOG ME OUT</a></li>
                <li class="right"><a href="issued-books.xml">Issued Books</a></li>
                <li class="right"><a href="change-password.php">Change Password</a></li>
                <li class="right"><a href="my-profile.php">My Profile</a></li>
                <li class="right"><a class="active" href="dashboard.php">DASHBOARD</a></li>


            </ul>

        </section>

        <!-- MENU SECTION END-->
        <div class="content-wrapper">
            <div class="container">
                <div class="row pad-botm">
                    <div class="col-md-12">
                        <h4 class="header-line">USER DASHBOARD</h4>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-6 col-md-offset-3">
                        <div class="alert">

                            <center>
                                <h3>10</h3> <b>Book Issued</b></center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="alert">

                            <center>
                                <h3>4</h3><b> Books Not Returned Yet</b></center>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!-- CONTENT-WRAPPER SECTION END-->
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