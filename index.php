<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['login']!='')
{
    $_SESSION['login']='';
}
if(isset($_POST['login']))
{
    $email=$_POST['emailid'];
    $password=$_POST['password'];
    $sql ="SELECT EmailId,Password,StudentId FROM tblstudents WHERE EmailId='$email' and Password='$password'";
	$query= mysqli_query($connect,$sql);
    if(mysqli_num_rows($query) > 0)
    {   
        $result = mysqli_fetch_assoc($query);
        $_SESSION['stdid']=$result['StudentId'];
        $_SESSION['login']=$_POST['emailid'];
        echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
    }
    else
    {
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

    <body background="assets/img/img4.jpg">

        <div class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand">

                        <img src="assets/img/logo.jpg" />
                    </a>

                </div>
            </div>
        </div>

        <section class="menu-section">

            <ul class="topnav">

                <li class="right"><a href="adminLogin.php">Admin Login</a></li>
                <li class="right"><a class="active" href="index.php">User Login</a></li>
                <li class="right"><a href="signup.php">User Signup</a></li>
            </ul>

        </section>

        <!-- MENU SECTION END-->
        <div class="content-wrapper">
            <div class="container">
                <div class="row pad-botm">
                    <div class="col-md-12">
                        <h4 class="header-line">USER LOGIN FORM</h4>
                    </div>
                </div>

                <!--LOGIN PANEL START-->
                <div class="row">
                    <div class="col-md-6 col-xs-12 col-md-offset-3">
                        <div class="panel">
                            <div class="panel-heading">
                                LOGIN FORM
                            </div>
                            <div class="panel-body">
                                <form role="form" method="post">

                                    <div>
                                        <label>Enter Email id</label>
                                        <input type="text" name="emailid" required autocomplete="off" />
                                    </div>
                                    <div>
                                        <label>Enter Password</label>
                                        <input type="password" name="password" required autocomplete="off" />
                                        <p class="help-block"><a href="user-forgot-password.php">Forgot Password</a></p>
                                    </div>

                                    <button type="submit" name="login">LOGIN </button>
                                    <p class="help-block"><a href="signup.php">Not Register Yet</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!---LOGIN PABNEL END-->


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