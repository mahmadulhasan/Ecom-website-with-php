<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">MY COMPANY</a>
            </div>

            <div class="header-right">
                <a href="logout.php" class="btn btn-danger" title="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div ">
                            <i class="fa fa-user" aria-hidden="true"></i>
                             <?php 
                                    print $_SESSION['username'];

                                ?>   
                        </div>

                    </li>

                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Category <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_category.php"><i class="fa fa-plus"></i>Add Category</a>
                            </li>
                            <li>
                                <a href="manage_category.php"><i class="fa fa-gear "></i>Manage Category</a>
                            </li>  
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Products <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_products.php"><i class="fa fa-plus"></i>Add Products</a>
                            </li>
                            <li>
                                <a href="manage_products.php"><i class="fa fa-gear "></i>Manage Products</a>
                            </li>   
                        </ul>
                    </li>

                      <li>
                        <a href="#"><i class="fa fa-desktop"></i>Orders <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="orders.php?status=new"><i class="fa fa-bell"></i>New Orders</a>
                            </li>
                            <li>
                                <a href="orders.php?status=processing"><i class="fa fa-bell "></i>Processing Orders</a>
                            </li>
                             <li>
                                <a href="orders.php?status=complete"><i class="fa fa-bell "></i>Complete Orders</a>
                            </li>    
                        </ul>
                    </li>

                      <li>
                        <a href="#"><i class="fa fa-user "></i>Customers <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="customer.php"><i class="fa fa-user"></i>Customer Details</a>
                            </li>                                                 
                        </ul>
                    </li>               
                   
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                        
                    </div>
                </div>