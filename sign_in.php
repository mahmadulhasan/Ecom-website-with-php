<?php 
include "library/config.php";
include "library/header.php";


if (isset($_POST["cust_email"])) {
    $sql = "SELECT * FROM customers WHERE `email` = $_POST[cust_email] AND `password`=$_POST[password]";
    $db->query($sql);
    
}


?>


<div class="container-fluid">
        <form method = "post" action ="">
        <div class="row px-xl-5">
        
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">SIGN IN</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="email" placeholder="example@email.com" name="cust_email" required>
                        </div>
                       
                        <div class="col-md-6 form-group">
                            <label>Enter Your Password</label>
                            <input type="text" class="form-control"  placeholder="Enter Password" name ="password" id = "password2" required></input>
                        </div>

                        <button class="btn btn-block btn-primary font-weight-bold py-3" id="mybtn" type="submit">SUBMIT</button>
 
                    </div>
                </div>
                
            </div>


<?php
    include "library/footer.php";
?>
