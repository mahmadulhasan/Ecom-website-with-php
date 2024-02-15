<?php

include "lib/config.php";
include "lib/header.php";
include "lib/login_check.php";

$status = $_GET['status'];
//print $status;

?>


<div class="row">


    <div class="col-md-12">
       <div class="panel panel-danger">
            <div class="panel-heading">ORDER DETAILS</div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Sl.No.</th>
                        <th> Customer Name</th>
                        <th>  Shipment Name</th>
                        <th> Price</th>
                        <th> Date of Order</th>
                        <th> Details</th>
                        
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
                        $price = $price + $row2->product_price;
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


<?php
include "lib/footer.php";
?>