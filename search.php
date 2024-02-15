<?php 

include "library/config.php";
include "library/header.php";
?>



<div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"><?php print "SEARCH PRODUCTS"?></span></h2>
        <div class="row px-xl-5">

            <!--fetching data through database  -->
            <?php
            if(isset($_POST["search"])) {

                $search = $_POST["search"];
                $sql = "SELECT * FROM `products` WHERE `name` LIKE '%$search'";
                $res = $db->query($sql); 
                $num = $res->num_rows;
                if($num > 0) {
                    while($row = $res->fetch_array()){

                        getData($row);
                    }
                }
                else
                { print "<h1><b>SORRY PRODUCT NOT FOUND</b></h1>";}
            }
            ?> 
       </div>
   </div>


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
?>






<?php
include "library/footer.php";

?>