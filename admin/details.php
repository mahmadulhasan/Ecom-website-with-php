<?php

include "lib/config.php";
include "lib/header.php";
include "lib/login_check.php";
$order_id = $_GET['order_id'];

?>


<div class="row">


    <div class="col-md-12">
       <div class="panel panel-danger">
            <div class="panel-heading">ORDER DETAIL</div>



        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Order Status</th>
                        <th> Date</th>
                        <th>  Total Price</th>
                        <th>  Shipment Address</th>
                        <th>  Billing Address</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                $sql="SELECT * FROM `orders` WHERE `order_id` = '$order_id '";

                $res=$db->query($sql);

                $count=0;
               
                while($row=$res->fetch_object()){

                    
                    $price = 0;
                    $sql2 = "SELECT * FROM `cart_items` WHERE `order_id` = '$row->order_id'";
                    $res2 = $db->query($sql2);

                    while($row2 = $res2->fetch_object()){
                        $price = $price + $row2->product_price;
                    }


                    $sql2 = "SELECT * FROM `customers` WHERE `customer_id` = '$row->order_id'";
                    $res2 = $db->query($sql2);
                    $row2 = $res2->fetch_object();


                    $date = date('m/d/Y H:i', $row->timestamp);

                    print'<tr>
                        
                        <td><span>
                         
                        <form method = "post" action="">
                            <select name="status" id="status">
                            <option value="new">New</option>
                            <option value="processing">Processing</option>
                            <option value="completed">Completed</option>

                            <button class="btn btn-danger">Update</button>
                        </form>
                       
                        </select>
                        </span></td>
                        <td><span> '.$date.'</span></td>
                        <td><span> '.$price.'</span></td>
                        <td><span> '.$row->ship_address.'</span></td>
                        <td><span>'.$row->ship_address.'</span></td>
                        
                    </tr>';

                   
                }

            ?>
                </tbody>
            </table>
        </div>
    </div>
    
</div>


<!-- ////////////////////////////////////////////////////order item details/////////////////////////////////////////////////////// -->


<div class="row">


    <div class="col-md-12">
       <div class="panel panel-danger">
            <div class="panel-heading">ORDER DETAILS</div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Sl.No.</th>
                        <th> Prodeuct Name</th>
                        <th>  Image </th>
                        <th> Quentity</th>
                        <th> Price</th>
                        <th> Total Price</th>
                        
                    </tr>
                </thead>
                <tbody>

                <?php

                $sql="SELECT * FROM `orders` WHERE `status` = '$status'";

                $res=$db->query($sql);

                $count=0;
               
                while($row=$res->fetch_object()){

                    $count+=1;
                    $price = 0;
                    $sql2 = "SELECT * FROM `cart_items` WHERE `order_id` = '$row->order_id'";
                    $res2 = $db->query($sql2);

                    while($row2 = $res2->fetch_object()){
                        $price = $price + ($row2->product_price * $row2->quantity);
                    }


                    $sql2 = "SELECT * FROM `customers` WHERE `customer_id` = '$row->order_id'";
                    $res2 = $db->query($sql2);
                    $row2 = $res2->fetch_object();


                    $date = date('m/d/Y H:i', $row->timestamp);

                    print'<tr>
                        <td>'.$count.'</td>
                        <td><span> '.$row->ship_fullname.'</span></td>
                        <td><span> '.$row->ship_fullname.'</span></td>
                        <td><span> '.$price.'</span></td>
                        <td><span> '.$date.'</span></td>
                        <td><span> <a href="details.php?order_id='.$row->order_id.'"><button class="btn btn-danger">DETAILS</button></a>
                       </span></td>
                        
                    </tr>';

                   
                }

            ?>
                </tbody>
            </table>
        </div>
    </div>
    
</div>
</div>



<?php
include "lib/footer.php";
?>