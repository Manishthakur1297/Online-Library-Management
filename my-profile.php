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

        <title>Online Library Management System | Student Signup</title>
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
                <li class="right"><a class="active" href="my-profile.php">My Profile</a></li>
                <li class="right"><a href="dashboard.php">DASHBOARD</a></li>


            </ul>

        </section>
        <!-- MENU SECTION END-->
        <div class="content-wrapper">
            <div class="container">
                <div class="row pad-botm">
                    <div class="col-md-12">
                        <h4 class="header-line">My Profile</h4>

                    </div>

                </div>
                <div class="row">

                    <div class="col-md-9 col-md-offset-1">
                        <div class="panel">
                            <div class="panel-heading">
                                My Profile
                            </div>
                            <div class="panel-body">
                                <form name="signup" method="post">
                                    <?php 
$sid=$_SESSION['stdid'];
$sql="SELECT * from  tblstudents  where StudentId='$sid'";
$query = mysqli_query($connect,$sql);
$cnt=1;
if(mysqli_num_rows($query) > 0)
{   
    $result = mysqli_fetch_assoc($query);
{ ?>

                                        <div class="form-group">
                                            <label>Roll No. : </label>
                                            <?php echo htmlentities($result['StudentId']);?>
                                        </div>
                                        <?php } ?>



                                            <div>
                                                <label>Enter Full Name</label>
                                                <input type="text" name="fullanme" value="<?php echo htmlentities($result['StudentName']);?>" autocomplete="off" required readonly />
                                            </div>


                                            <div>
                                                <label>Mobile Number :</label>
                                                <input type="text" name="mobileno" maxlength="10" value="<?php echo htmlentities($result['MobileNumber']);?>" autocomplete="off" required readonly />
                                            </div>

                                            <div>
                                                <label>Enter Email</label>
                                                <input type="email" name="email" id="emailid" value="<?php echo htmlentities($result['EmailId']);?>" autocomplete="off" required readonly />
                                            </div>
                                            <?php }?>


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