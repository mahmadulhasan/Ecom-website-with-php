<?php 
include "library/config.php";
include "library/header.php";

$sql = "SELECT * FROM `category` WHERE `cid` = '$_GET[cid]'";
$res = $db->query($sql);
$row = $res->fetch_object();

?>


    <!-- Products Start -->

    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"><?php print $row->cname ?></span></h2>
        <div class="row px-xl-5">

            <!--fetching data through database  -->
            <?php

            $sql = "SELECT * FROM `products` WHERE `cid` = '$_GET[cid]'";

            $res = $db->query($sql);

            while($row = $res->fetch_array()){

                getData($row);
            }
            ?> 
       </div>
   </div>


   <!-- Sub Category -->
<?php
$sqla ="SELECT * FROM `category` WHERE `parent_id`='$_GET[cid]'";

$resa = $db->query($sqla);
 while($rowa = $resa->fetch_object()){
    
    print'  <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">'.$rowa->cname.'</span></h2>
        <div class="row px-xl-5">';      

            $sql = "SELECT * FROM `products` WHERE `cid` = '$rowa->cid'";

            $res = $db->query($sql);

            while($row = $res->fetch_array()){

                getData($row);
            }
            
        print '</div>
           </div>';
 }   

?>

  


    <!-- Footer Start -->
<?php 
function getData($row){

    $double = $row['price']*2;
     print '<div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <a href = "details.php?did='.$row['id'].'"><img class="img-fluid w-100" src="'.$row['image'].'" alt=""></a>
                        
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="details.php?did='.$row['id'].'">'.$row['name'].'</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>&#8377;'.$row['price'].'</h5><h6 class="text-muted ml-2"><del>&#8377;'.$double.'</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>';

}



include "library/footer.php";
?>

    