<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
  
$username=$_POST['username'];
$password=$_POST['password'];
$sql ="SELECT Admin,Password FROM admin WHERE Admin='$username' and Password='$password'";
$query= mysqli_query($connect,$sql);
if(mysqli_num_rows($query) > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location ='admin/dashboard.php'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}
?>
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="Online Library Management System" />
        <meta name="author" content="Ajay and Manish" />
        <title>Online Library Management System | </title>

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

                <li class="right"><a class="active" href="adminLogin.php">Admin Login</a></li>
                <li class="right"><a href="index.php">User Login</a></li>
                <li class="right"><a href="signup.php">User Signup</a></li>
            </ul>

        </section>

        <!-- MENU SECTION END-->
        <div class="content-wrapper">
            <div class="container">
                <div class="row pad-botm">
                    <div class="col-md-12">
                        <h4 class="header-line">ADMIN LOGIN FORM</h4>
                    </div>
                </div>

                <!--LOGIN PANEL START-->
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                LOGIN FORM
                            </div>
                            <div class="panel-body">
                                <form role="form" method="post">

                                    <div>
                                        <label>Admin Username</label>
                                        <input type="text" name="username" autocomplete="off" required />
                                    </div>
                                    <div>
                                        <label>Admin Password</label>
                                        <input type="password" name="password" autocomplete="off" required />
                                    </div>

                                    <button type="submit" name="login">LOGIN </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!---LOGIN PABNEL END-->


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