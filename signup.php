<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(isset($_POST['signup']))
{
    if(isset($_POST['fullname'])&&isset($_POST['rollno'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['mobileno']))
    {
        $StudentId=$_POST['rollno']; 
        $username=$_POST['fullname'];
        $email_id=$_POST['email'];
        $password=$_POST['password'];
        $mobileno=$_POST['mobileno'];

        if(!empty($StudentId)&&!empty($username)&&!empty($email_id)&&!empty($password)&&!empty($mobileno))
        {
                $query="SELECT * FROM tblstudents WHERE StudentId='$StudentId' || EmailId = '$email_id'";
                $query_run = mysqli_query($connect,$query);
                if(mysqli_num_rows($query_run) > 0)
                {   
                    echo '<script>alert("The User email or Roll No. already exists.")</script>';
                }
                else
                {
                    $sql="INSERT INTO tblstudents(StudentId,StudentName,MobileNumber,EmailId,Password) VALUES ('$StudentId','$username','$mobileno','$email_id','$password')";
                    if(mysqli_query($connect,$sql))
                    {
                        echo '<script>alert("Your Registration successfull and your student id is your Rollno")</script>';
                    }   
                    else 
                    {
                        echo "<script>alert('Something went wrong. Please try again');</script>";
                    }

                }   
        }
    }
    else
    {

        echo '<script>alert("All fields are required")</script>';
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
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Online Library Management System | Student Signup</title>
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <script type="text/javascript">
        function valid() {
            if (document.signup.password.value != document.signup.confirmpassword.value) {
                alert("Password and Confirm Password Field do not match  !!");
                document.signup.confirmpassword.focus();
                return false;
            }
            return true;
        }
    </script>

    <script type="text/javascript">
    function changeColor(color)
    {
        document.getElementById('x').style.background=color;
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
            <li class="right"><a class="active" href="signup.php">User Signup</a></li>
        </ul>

    </section>
    <!-- MENU SECTION END-->
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
                            SIGNUP FORM
                        </div>
                        <div class="panel-body">
                            <form name="signup" method="post" onsubmit="return valid();">

                                <div class="form-group">
                                    <label>Enter Roll Number</label>
                                    <input class="form-control" type="text" name="rollno" autocomplete="off" required />
                                </div>
                                <div class="form-group">
                                    <label>Enter Full Name</label>
                                    <input class="form-control" type="text" name="fullname" autocomplete="off" required />
                                </div>


                                <div class="form-group">
                                    <label>Mobile Number :</label>
                                    <input class="form-control" type="number" name="mobileno" maxlength="10" autocomplete="off" required />
                                </div>

                                <div class="form-group">
                                    <label>Enter Email</label>
                                    <input class="form-control" type="email" name="email" id="emailid autocomplete="off" required />
                                    <span id="user-availability-status" style="font-size:12px;"></span>
                                </div>

                                <div class="form-group">
                                    <label>Enter Password</label>
                                    <input class="form-control" type="password" name="password" autocomplete="off" required />
                                </div>

                                <div class="form-group">
                                    <label>Confirm Password </label>
                                    <input class="form-control" type="password" name="confirmpassword" autocomplete="off" required />
                                </div>

                                <button type="submit" name="signup" id="submit">Register Now </button>

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