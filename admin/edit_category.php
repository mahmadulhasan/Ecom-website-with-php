<?php


include "lib/config.php";
include "lib/header.php";
include "lib/login_check.php";

if(isset($_GET['eid'])){

    $sql="SELECT * FROM `category` WHERE `cid`='$_GET[eid]'";

    $res=$db->query($sql);

    $row=$res->fetch_object();

    
}

if(isset($_POST['category_name'])){


    $sql2="UPDATE `category` SET `cname`='$_POST[category_name]', `parent_id`='$_POST[cd]' WHERE `cid`='$_GET[eid]'";

    $res2=$db->query($sql2);

}

?>


<div class="col-md-12 col-sm-6 col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                   EDIT FORM FOR CATEGORY
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="">
                            
                         <div class="form-group">
                            <label>Enter</label>
                            <input class="form-control" name="category_name" type="text" value="<?php print $row->cname; ?>">
                      
                        </div>
                     
                         <div class="form-group">
                            <label>Select Parent Category</label>
                            <select class="form-control" name="cd">
                             <option value=0>Parent Category</option>   
                                <?php
                                $sql1 ="SELECT * FROM `category` WHERE `parent_id`=0";
                                $res1 =$db->query($sql1);
                                while($row1 =$res1->fetch_object()){
                                      
                                    if ($row1->cid==$row->parent_id){

                                ?>
                                 <option value="<?php print"$row1->cid" ?>" selected><?php print "$row1->cname";?></option>

                                 <?php 
                                }
                                else {
                                 ?>
                               

                                <option value="<?php print"$row1->cid" ?>"><?php print "$row1->cname";?></option>
                               <?php 
                                }
                           } 

                           ?>
                            </select>
                           
                        </div>

                        
                     
                            <button type="submit" class="btn btn-danger">EDIT</button>

                        </form>
                </div>
            </div>
        </div>
<?php
include "lib/footer.php";
?>