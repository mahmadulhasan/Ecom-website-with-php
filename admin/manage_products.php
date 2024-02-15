<?php

include "lib/config.php";
include "lib/header.php";
include "lib/login_check.php";

?>

<div class="row">
                <div class="col-md-12">
                        <h1 class="page-head-line">MANAGE PRODUCTS</h1>
                        
                    </div>
                </div>

<!-- Table Section -->
<div class="row">


    <div class="col-md-12">
        <!-- <div class="panel panel-danger">
            <div class="panel-heading">PRODUCTS</div>
 -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Sl.No.</th>
                        <th> Name</th>
                        <th> Price</th>
                        <th> Details</th>
                        <th> Image</th>
                        <th> MANAGE</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                $sql="SELECT * FROM `products`";

                $res=$db->query($sql);

                $count=0;
               
                while($row=$res->fetch_object()){

                    $count+=1;
                    $sql2 = "SELECT * FROM `category` WHERE `cid` = $row->cid";
                    $res2 = $db->query($sql2);
                    $row2 = $res2->fetch_object();


                    print'<tr>
                        <td>'.$count.'</td>
                        <td><span> '.$row->name.'</span></td>
                        <td><span> '.$row->price.'</span></td>
                        <td><span> '.$row->details.'</span></td>
                        <td><span><img src=../'.$row->image.' width=100></span></td>
                        <td><span> '.$row2->cname.'</span></td>
                        <td><a href="edit_products.php?e_id='.$row->id.'">EDIT</a></td>
                        <td><a href="delete_products.php?d_id='.$row->cid.'" onclick="return confirm(\'are you sure?\')">DELETE</a></td>
                        
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