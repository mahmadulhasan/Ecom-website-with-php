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
                    <span class="breadcrumb-item active">Shopping Cart</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
        <?php 

            if(isset($_SESSION['mycart']) && count($_SESSION['mycart'])>0){
        ?>

            <div class="col-lg-12 table-responsive mb-5">

                <form method = "post" action = "add.php">

                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Sl. No.</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">

                    <?php
                        $subtotal = 0;
                        $total    = 0;
                        $c        = 0;

                        foreach($_SESSION['mycart'] as $pid=>$quantity){

                            $c++;

                            $sql = "SELECT * FROM `products` WHERE `id` = '$pid'";
                            $res = $db->query($sql);
                            $row = $res->fetch_object();

                            $subtotal = $row->price * $quantity;
                            $total   += $subtotal; 

                            print '<tr>
                            <td class="align-middle">'.$c.'</td>
                            <td class="align-middle"><img src="'.$row->image.'" alt="" style="width: 50px;"> </td>
                            <td class="align-middle">'.$row->name.'</td>
                            <td class="align-middle">&#8377; '.$row->price.'</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" type = "button">
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" name = "newcart['.$pid.']" value="'.$quantity.'">
                                    <div class="input-group-btn">
                                        <button type = "button" class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">&#8377;'.$subtotal.'</td>
                            <td class="align-middle"><a href = "add.php?del_id='.$pid.'" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>
                        </tr>';

                        }
                   
                  ?>
                   
                    </tbody>
                </table>

                <center>
                    <button class="btn btn-primary font-weight-bold my-3 py-3 " type = "submit">Update</button>
                    &nbsp;&nbsp;
                </center>

            </form>
            </div>
            <div class = "mx-auto px-3" >

                <a class="btn btn-primary font-weight-bold my-3 py-3 " href = "index.php">Continue Shopping</a>
                &nbsp;&nbsp;
                
                <a class="btn btn-primary font-weight-bold my-3 py-3" href = "checkout.php">Proceed To Checkout</a>

            </div>
        <?php
        }

        else {

            //print "<center>";
            print '<div class = "container" >
                    <center>
                        <h3>EMPTY CART,PLEASE ADD TO CART FIRST</h3>
                        <a class="btn btn-primary font-weight-bold my-3 py-3 mx-auto" href = "index.php">Continue Shopping</a>
                    </center>

                    </div>';
        }
    ?>
            
        </div>
    </div>

    
    <!-- Cart End -->


    <!-- Footer Start -->
<?php 
include "library/footer.php";

?>