<?xml version="1.0" encoding="ISO-8859-1"?>

    <xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
        <xsl:template match="/">
            <html>

            <head>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
                <meta name="description" content="" />
                <meta name="author" content="" />
                <title>Online Library Management System | Manage Issued Books</title>
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

                        <li class="right"><a href="index.php">LOG ME OUT</a></li>
                        <li class="right"><a class="active" href="issued-books.xml">Issued Books</a></li>
                        <li class="right"><a href="change-password.php">Change Password</a></li>
                        <li class="right"><a href="my-profile.php">My Profile</a></li>
                        <li class="right"><a href="dashboard.php">DASHBOARD</a></li>


                    </ul>

                </section>

                <div class="content-wrapper">
                    <div class="container">
                        <div class="row pad-botm">
                            <div class="col-md-12">
                                <h4 class="header-line">Manage Issued Books</h4>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Issued Books
                                        </div>
                                        <div class="panel-body">
                                            <table width="100%">
                                                <tr bgcolor="#9acd32">
                                                    <th>Id</th>
                                                    <th>Book name</th>
                                                    <th>ISBN</th>
                                                    <th>Issued</th>
                                                    <th>Status</th>
                                                    <th>Fine</th>
                                                </tr>
                                                <xsl:for-each select="books/book">
                                                    <tr>
                                                        <td class="center">
                                                            <xsl:value-of select="id" />
                                                        </td>
                                                        <td class="center">
                                                            <xsl:value-of select="bookname" />
                                                        </td>
                                                        <td class="center">
                                                            <xsl:value-of select="isbn" />
                                                        </td>
                                                        <td class="center">
                                                            <xsl:value-of select="issued" />
                                                        </td>
                                                        <td class="center">
                                                            <xsl:value-of select="return" />
                                                        </td>
                                                        <td class="center">
                                                            <xsl:value-of select="fine" />
                                                        </td>
                                                    </tr>
                                                </xsl:for-each>
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
                                Online Library Management System | Designed by : Ajay Rana and Manish
                            </div>

                        </div>
                    </div>
                </section>

            </body>

            </html>
        </xsl:template>
    </xsl:stylesheet>