<!-- HEADER starts here -->


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


</nav>

</div>
<div style = " width: 300px;" class = "container-fluid text-center">
    <?php 
    if(isset($_GET['msg'])){
        print "<h1>$_GET[msg]</h1>";
    }

    ?>
</div>


<!-- LOG IN Section  -->

<div id="page1-inner1" style = "overflow:auto;height:50%; position:relative; margin: 50px;">
            
        <div class="col-md-12 col-sm-6 col-xs-12">

            <div class="panel panel-danger">

                <div class="panel-heading">
                   LOG IN HERE 
                </div>

                <div class="panel-body">
                    <form role="form" method= "post" action ="verify.php">
                            
                         <div class="form-group">
                            <label>Enter Username</label>
                            <input class="form-control" type="text" name="username">
                         <p class="help-block">Help text here.</p>
                        </div>

                        <div class="form-group">
                                <label>Enter Password</label>
                                <input class="form-control" type="password" name="password">
                         <p class="help-block">Help text here.</p>
                        
                        </div>
                
                            <button type="submit" class="btn btn-danger" name="button">LOG IN </button>

                        </form>
                </div>
         </div>
    </div>    
</div>

<!-- footer section -->


<div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    


</body>
</html>