<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['change']))
{

$email = $_POST['email'];
$mobile = $_POST['mobile'];
$newpassword = $_POST['newpassword'];
  $sql ="SELECT EmailId FROM tblstudents WHERE EmailId='$email' and MobileNumber='$mobile'";
$query= mysqli_query($connect,$sql);
if(mysqli_num_rows($query) > 0)
{
$con="UPDATE tblstudents SET Password='$newpassword' WHERE EmailId='$email' and MobileNumber='$mobile'";
$chngpwd1 = mysqli_query($connect,$con);
echo "<script>alert('Your Password succesfully changed');</script>";
}
else {
echo "<script>alert('Email id or Mobile no is invalid');</script>"; 
}
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | Password Recovery </title>
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <script type="text/javascript">
        function valid() {
            if (document.chngpwd.newpassword.value != document.chngpwd.confirmpassword.value) {
                alert("New Password and Confirm Password Field do not match  !!");
                document.chngpwd.confirmpassword.focus();
                return false;
            }
            return true;
        }
    </script>

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

            <li class="right"><a href="adminLogin.php">Admin Login</a></li>
            <li class="right"><a href="index.php">User Login</a></li>
            <li class="right"><a href="signup.php">User Signup</a></li>
        </ul>

    </section>

<div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">User Signup</h4>

                </div>

            </div>
            <div class="row">

                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            Password Recovery Form
                        </div>
                        <div class="panel-body">
                        <form role="form" name="chngpwd" method="post"  action="" onSubmit="return valid();">

                        <div class="form-group">
                        <label>Enter Reg Email id</label>
                        <input class="form-control" type="email" name="email" required autocomplete="off" />
                        </div>

                        <div class="form-group">
                        <label>Enter Reg Mobile No</label>
                        <input class="form-control" type="text" name="mobile" required autocomplete="off" />
                        </div>

                        <div class="form-group">
                        <label>Enter New Password</label>
                        <input class="form-control" type="password" name="newpassword" required autocomplete="off"  />
                        </div>

                        <div class="form-group">
                        <label>Confirm New Password</label>
                        <input class="form-control" type="password" name="confirmpassword" required autocomplete="off"  />
                        </div> 

                         <button type="submit" name="change" class="btn btn-info">Change Password</button> | <a href="index.php">Login</a>
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