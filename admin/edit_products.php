<?php
include "lib/config.php";
include "lib/header.php";
include "lib/login_check.php";



$id = $_GET['e_id'];
//PRINT $id;

$sql = "SELECT * FROM `products` WHERE `id` = $id";
$res = $db->query($sql);
$row = $res->fetch_object();

////////////////////////////////////////edit update//////////////////
if(isset($_POST['pname'])){

    $name = $_POST['pname'];
    $filename=$_FILES['image']['name'];
    $location=$_FILES['image']['tmp_name'];


    ////////////////////////////

    $sql2 = "UPDATE `products`  SET `name`='$_POST[pname]',`price`='$_POST[price]',`details`='$_POST[details]',`cid`='$_POST[cid]' WHERE `id`='$id'";

    $res2 = $db->query($sql2);

    $ext = explode(".", $filename);
    $ext=strtolower(end($ext));

    if($ext=='jpeg' || $ext=='png' || $ext=='jpg'){
        
        // $sql3 = "SELECT * FROM `products` WHERE `id`='$id'";
        // $res3 = $db->query($sql3);
        // $row4 = $res3->fetch_object();


        
        $destination="products/".$id.".".$ext ;

        $sql1="UPDATE `products` SET `image`='$destination' WHERE `id`='$id'";

        $db->query($sql1);

        $destination2="../products/".$id.".".$ext ;

        move_uploaded_file($location, $destination2); 

    }

}


?>


<div class="col-md-12 col-sm-6 col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                   EDIT Product FORM
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="" enctype="multipart/form-data">
                            
                         <div class="form-group">
                            <label>PRODUCT Name</label>
                            <input class="form-control" name="pname" type="text" placeholder="<?php print $row->name; ?>">
                      
                        </div>

                        <div class="form-group">
                            <label>PRICE</label>
                            <input class="form-control" name="price" type="text" placeholder="<?php print $row->price; ?>">
                      
                        </div>

                        <div class="form-group">
                            <label>DETAILS</label>
                            <input class="form-control" name="details" type="text" placeholder="<?php print $row->details; ?>">
                      
                        </div>

                        <div class="form-group">
                            <label>IMAGE </label>
                            <img src="../<?php print $row->image;?>" width = 100px>
                            <input class="form-control" name="image" type="file">
                      
                        </div>
                     
                     
                         <div class="form-group">
                            <label>Select Parent Category</label>
                            <select class="form-control" name="cid">
                            <option disabled>Select Catergory</option>   
                                <?php
                                $sql1 ="SELECT * FROM `category` WHERE 1";
                                $res1 =$db->query($sql1);
                                while($row1 =$res1->fetch_object()){
                                    if($row1->cid == $row->cid)
                                        print "<option value = '$row1->cid' selected> $row1->cname</option>";
                                    else 
                                        print "<option value = '$row1->cid' > $row1->cname</option>";

                                }

                                
                                ?>
                                
                            </select>
                           
                        </div>

                        
                     
                            <button type="submit" class="btn btn-danger">UPDATE </button>

                        </form>
                </div>
            </div>
        </div>
<?php
include "lib/footer.php";
?>