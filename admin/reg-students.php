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
    ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | Manage Reg Students</title>
    <!-- CUSTOM STYLE  -->
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

            <li class="right"><a href="index.php">Log Out</a></li>
            <li class="right"><a href="change-password.php">Change Password</a></li>
            <li class="right"><a href="issue-book.php">Issue Book</a></li>
            <li class="right"><a class="active" href="reg-students.php">Reg Students</a></li>
            <li class="right"><a href="dashboard.php">DASHBOARD</a></li>
        </ul>

    </section>
<!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Registered Students</h4>
    </div>


        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Reg Students
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <th class="tableBlock">#</th>
                                            <th class="tableBlock">Student ID</th>
                                            <th class="tableBlock">Student Name</th>
                                            <th class="tableBlock">Email id </th>
                                            <th class="tableBlock">Mobile Number</th>
                                            <th class="tableBlock">Fine Due</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                    <?php $sql = "SELECT * from tblstudents";
                                                    $query = mysqli_query($connect,$sql);

                                                    $cnt=1;
                                                    if(mysqli_num_rows($query) > 0)
                                                    {
                                                    while($result = mysqli_fetch_assoc($query))
                                                    {               ?>                                      
                                        <tr>
                                            <td class="center"><?php echo htmlentities($cnt);?></td>
                                            <td class="center"><?php echo htmlentities($result['StudentId']);?></td>
                                            <td class="center"><?php echo htmlentities($result['StudentName']);?></td>
                                            <td class="center"><?php echo htmlentities($result['EmailId']);?></td>
                                            <td class="center"><?php echo htmlentities($result['MobileNumber']);?></td>
                                            <td class="center"><?php echo htmlentities($cnt*10);?></td>
                                            
                                        </tr>
                                        <?php $cnt=$cnt+1;}} ?>                                      
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>  
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
<?php } ?>