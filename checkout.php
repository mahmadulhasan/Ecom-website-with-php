<?php 
include "library/config.php";
include "library/header.php";


?>


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Checkout</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Checkout Start -->
    <div class="container-fluid">
        <form method = "post" action ="order.php" name = "myform">
        <div class="row px-xl-5">
        
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing Address</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>FullName</label>
                            <input class="form-control" type="text" placeholder="Your Name" name = "cust_name" required>
                        </div>
                       
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="email" placeholder="example@email.com" name="cust_email">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" placeholder="+123 456 789" name = "cust_phone">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address</label>
                            <textarea class="form-control"  placeholder="123 Street" name ="cust_address"></textarea>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="shipto" onclick = "clone()">
                                <label class="custom-control-label" for="shipto"  >Same As Above</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse mb-5"  style = "display:block;">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Shipping Address</span></h5>
                    <div class="bg-light p-30">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>FullName</label>
                                <input class="form-control" type="text" placeholder="John" name = "ship_name">
                            </div>
                            
                            
                            <div class="col-md-6 form-group">
                                <label>Mobile No</label>
                                <input class="form-control" type="text" placeholder="+123 456 789" name = "ship_phone">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address</label>
                                <textarea class="form-control" type="text" placeholder="123 Street" name = "ship_address"></textarea>
                            </div>
                           
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Total</span></h5>
                <div class="bg-light p-30 mb-5">

                    <div class="border-bottom">
                        <h6 class="mb-3">Products</h6>
                        <?php
                        $subtotal = 0;
                        $total    = 0;
                        $c        = 0;
                        $shipping = 0;

                        foreach($_SESSION['mycart'] as $pid=>$quantity){

                            $c++;

                            $sql = "SELECT * FROM `products` WHERE `id` = '$pid'";
                            $res = $db->query($sql);
                            $row = $res->fetch_object();

                            $subtotal = $row->price * $quantity;
                            $total   += $subtotal; 

                            

                        print '<div class="d-flex justify-content-between">
                            <p>'.$row->name.' X '.$quantity.'</p>
                            <p>&#8377;'.$row->price * $quantity.'</p>
                        </div>'; 

                        if($total>499)
                            $shipping = 0;
                        else
                            $shipping = 50;
                    }


                    ?>
                        
                    </div>

                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>&#8377;<?PHP print $total; ?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <input type = "hidden" name = "shipping" value = "<?php print $shipping ?>">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">&#8377;<?php print $shipping; ?></h6>
                        </div>
                    </div>

                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>&#8377;<?php print $total+$shipping ; ?></h5>
                        </div>
                    </div>

                </div>
                <div class="mb-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Payment</span></h5>
                    <div class="bg-light p-30">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="paypal" value = "paypal">
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="directcheck" value = "cod">
                                <label class="custom-control-label" for="directcheck">Cash on Delivery</label>
                            </div>
                        </div>
                        
                        <button class="btn btn-block btn-primary font-weight-bold py-3">Place Order</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
    </div>
    <!-- Checkout End -->

<script type="text/javascript">
    
    function clone(){
        //alert("Hello")

        var ch = document.getElementById('shipto').checked;
        // alert(ch)
        
        if(ch){
            document.myform.ship_name.value = document.myform.cust_name.value;
            document.myform.ship_phone.value = document.myform.cust_phone.value;
            document.myform.ship_address.value = document.myform.cust_address.value;
        }
        else {
            document.myform.ship_name.value = ""
            document.myform.ship_phone.value = ""
            document.myform.ship_address.value = ""
        }

    }

</script>


<?php
    include "library/footer.php";
?>
