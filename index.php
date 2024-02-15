<?php 
include "library/config.php";
include "library/header.php";
?>



    <!-- Products Start -->

    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Cheapest Products</span></h2>
        <div class="row px-xl-5">

            <!--fetching data through database  -->
        <?php

        $db = new MySQLi("localhost", "root", NULL, "swiggy");

        $sql = "SELECT * FROM `products` ORDER BY `price` ASC LIMIT 0,12";

        $res = $db->query($sql);

        while($row = $res->fetch_array()){

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
           ?> 
       </div>
   </div>
    <!-- Products End -->


    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="img/offer-1.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="img/offer-2.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Latest Products</span></h2>
        <div class="row px-xl-5">
            <!-- fetching data from database -->
        <?php 

        $db = new MySQLi("localhost", "root", NULL, "007_swiggy");

        $sql = "SELECT * FROM `products` ORDER BY `id` DESC LIMIT 0,8";

        $res = $db->query($sql);

        while($row = $res->fetch_array()){

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
        ?>
    </div>
</div>
            
    <!-- Products End -->


    


    <!-- Footer Start -->
    <?php 
include "library/footer.php";
?>

    