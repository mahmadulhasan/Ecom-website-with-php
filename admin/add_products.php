<?php
include "lib/config.php";
include "lib/header.php";
include "lib/login_check.php";



?>


<div class="col-md-12 col-sm-6 col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                   ADD Product FORM
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="add_products_query.php" enctype="multipart/form-data">
                            
                         <div class="form-group">
                            <label>PRODUCT Name</label>
                            <input class="form-control" name="pname" type="text">
                      
                        </div>

                        <div class="form-group">
                            <label>PRICE</label>
                            <input class="form-control" name="price" type="text">
                      
                        </div>

                        <div class="form-group">
                            <label>DETAILS</label>
                            <input class="form-control" name="details" type="text">
                      
                        </div>

                        <div class="form-group">
                            <label>IMAGE</label>
                            <input class="form-control" name="image" type="file">
                      
                        </div>
                     
                     
                         <div class="form-group">
                            <label>Select Parent Category</label>
                            <select class="form-control" name="cd">
                             <option value=0>Parent Category</option>   
                                <?php
                                $sql ="SELECT * FROM `category` WHERE 1";
                                $res =$db->query($sql);
                                while($row =$res->fetch_object()){

                                
                                ?>
                                <option value="<?php print"$row->cid" ?>"><?php print "$row->cname";?></option>
                               <?php }; ?>
                            </select>
                           
                        </div>

                        
                     
                            <button type="submit" class="btn btn-danger">ADD </button>

                        </form>
                </div>
            </div>
        </div>
<?php
include "lib/footer.php";
?>