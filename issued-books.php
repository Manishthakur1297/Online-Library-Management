<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
    {   
header('location:index.php');
}
?>


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | Manage Issued Books</title>
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    
    <script type="text/javascript">
function changeColor(color)
{
document.getElementById('x').style.background=color;
}
</script>

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

            <li class="right"><a href="index.php">LOG ME OUT</a></li>
            <li class="right"><a class="active" href="issued-books.xml">Issued Books</a></li>
            <li class="right"><a href="change-password.php">Change Password</a></li>
            <li class="right"><a href="my-profile.php">My Profile</a></li>
            <li class="right"><a href="dashboard.php">DASHBOARD</a></li>


        </ul>

    </section>

    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">Manage Issued Books</h4>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Issued Books
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <th class="tableBlock">#id</th>
                                                <th class="tableBlock">Book Name</th>
                                                <th class="tableBlock">ISBN </th>
                                                <th class="tableBlock">Issued Date</th>
                                                <th class="tableBlock">Return Date</th>
                                                <th class="tableBlock">Fine in(USD)</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td class="center">1</td>
                                                <td class="center">Physics</td>
                                                <td class="center">1111</td>
                                                <td class="center">06/11/17</td>
                                                <td class="center">
                                                    <span style="color:red">
                                             Not Yet Return!
                                                </span>
                                                </td>
                                                <td class="center">100</td>

                                            </tr>
                                            <tr>
                                                <td class="center">2</td>
                                                <td class="center">Maths</td>
                                                <td class="center">2222</td>
                                                <td class="center">06/11/17</td>
                                                <td class="center">
                                                    <span style="color:red">
                                             Not Yet Return!
                                                </span>
                                                </td>
                                                <td class="center">100</td>

                                            </tr>
                                            <tr>
                                                <td class="center">3</td>
                                                <td class="center">Web Technology</td>
                                                <td class="center">3333</td>
                                                <td class="center">06/11/17</td>
                                                <td class="center"  >
                                                    <span style="color:springgreen">
                                             Returned!
                                                </span>
                                                </td>
                                                <td class="center">100</td>

                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!--End Advanced Tables -->
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