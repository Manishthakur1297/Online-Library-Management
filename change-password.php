<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
    {   
header('location:index.php');
}
else{ 
if(isset($_POST['change']))
  {
$password=$_POST['password'];
$newpassword=$_POST['newpassword'];
$email=$_SESSION['login'];
$sql ="SELECT Password FROM tblstudents WHERE EmailId='$email' and Password='$password'";
$query= mysqli_query($connect,$sql);
if(mysqli_num_rows($query)== 1)
{
$con="update tblstudents set Password='$newpassword' where EmailId='$email'";
$chngpwd1 = mysqli_query($connect,$con);
$msg="Your Password succesfully changed";
echo "<script>alert('Your Password succesfully changed');</script>";
}
else {
$error="Your current password is wrong";
echo "<script>alert('Your current password is wrong');</script>";  
}
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
    <title>Online Library Management System | </title>
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />

</head>
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
            <li class="right"><a class="active" href="change-password.php">Change Password</a></li>
            <li class="right"><a href="my-profile.php">My Profile</a></li>
            <li class="right"><a href="dashboard.php">DASHBOARD</a></li>


        </ul>

    </section>

    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">User Change Password</h4>
                </div>
            </div>
            <!--LOGIN PANEL START-->
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Change Password
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" onsubmit="return valid();" name="chngpwd">

                                <div class="form-group">
                                    <label>Current Password</label>
                                    <input class="form-control" type="password" name="password" autocomplete="off" required />
                                </div>

                                <div class="form-group">
                                    <label>New Password</label>
                                    <input class="form-control" type="password" name="newpassword" autocomplete="off" required />
                                </div>

                                <div class="form-group">
                                    <label>Confirm Password </label>
                                    <input class="form-control" type="password" name="confirmpassword" autocomplete="off" required />
                                </div>

                                <button type="submit" name="change" class="btn btn-info">Change Password </button>
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