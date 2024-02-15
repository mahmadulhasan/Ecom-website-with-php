<?php 
include "library/config.php";
include "library/header.php";

$time = time();

if (isset($_POST["cust_name"])) {
    $sql = "INSERT INTO `customers`(`customer_id`, `name`, `email`, `password`, `phone`, `address`, `timestamp`) VALUES ('','$_POST[cust_name]','$_POST[cust_email]','$_POST[password1]','$_POST[cust_phone]','$_POST[cust_address]','$time')";
    $db->query($sql);

    header("sign_in.php");
}





?>


<div class="container-fluid">
        <form method = "post" action ="">
        <div class="row px-xl-5">
        
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Register Here</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>FullName</label>
                            <input class="form-control" type="text" placeholder="Your Name" name = "cust_name" required>
                        </div>
                       
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="email" placeholder="example@email.com" name="cust_email" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" placeholder="+123 456 789" name = "cust_phone" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address</label>
                            <input type="text" class="form-control"  placeholder="123 Street" name ="cust_address" required></input>
                        </div>


                        <div class="col-md-6 form-group">
                            <label>Chose Password</label>
                            <input type="text" class="form-control"  placeholder="Chose Password" name ="password1" id="password1" required></input>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Re-Enter Password</label>
                            <input type="text" class="form-control"  placeholder="Re-Enter Password" name ="password2" id = "password2" onkeyup="myfunction()" required></input>
                        </div>

                        <button class="btn btn-block btn-primary font-weight-bold py-3" id="mybtn" type="submit" disabled>SUBMIT</button>
 
                    </div>
                </div>
                
            </div>



<script>
   function myfunction(){
    var password1 = document.getElementById("password1").value;
    var password2 = document.getElementById("password2").value;

    if(password1 == password2 )
    {
        document.getElementById("mybtn").disabled =false;
    }
    else
    {
        document.getElementById("mybtn").disabled =true;
    }
   }
</script>






<?php
    include "library/footer.php";
?>
