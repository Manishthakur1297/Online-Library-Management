<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
{   
header('location:index.php');
}
else
{ 

if(isset($_POST['issue']))
{
$studentid=$_POST['studentid'];
$bookid=$_POST['booikid'];
$sql="SELECT * FROM tblstudents WHERE StudentId = '$studentid'";
$querycheck = mysqli_query($connect,$sql);
        if(mysqli_num_rows($querycheck)==1)
        {
                $sql="SELECT * FROM tblbooks WHERE ISBNNumber = '$bookid'";
                $querycheck = mysqli_query($connect,$sql);
            if(mysqli_num_rows($querycheck)==1)
            {
                $_SESSION['msg']="Book issued successfully";
                echo "<script>alert('Book issued successfully');</script>";
            }
            else
            {
                $_SESSION['error']="Invalid ISBN Number. Please try again";
                echo "<script>alert('Invalid ISBN Number. Please try again');</script>";
            }
        }
        else
        {
            $_SESSION['error']="Invalid Student Id. Please try again";
            echo "<script>alert('Invalid Student Id. Please try again');</script>";
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
    <title>Online Library Management System | Issue a new Book</title>
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" /> 
<style type="text/css">
  .others{
    color:red;
}

</style>


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
            <li class="right"><a class="active" href="issue-book.php">Issue Book</a></li>
            <li class="right"><a href="reg-students.php">Reg Students</a></li>
            <li class="right"><a href="dashboard.php">DASHBOARD</a></li>
        </ul>

    </section>

 <div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Issue a New Book</h4>
                
            </div>

        </div>
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
<div class="panel panel-info">
<div class="panel-heading">
Issue a New Book
</div>
<div class="panel-body">
<form role="form" method="post">

<div class="form-group">
<label>Student id<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="studentid"  autocomplete="off"  required />
</div>

<div class="form-group">
<label>ISBN Number<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="booikid"   required="required" />
</div>

 <div class="form-group">

  <button type="submit" name="issue" id="submit" class="btn btn-info">Issue Book </button>
 </div>


                                    </form>
                            </div>
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
