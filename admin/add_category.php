<?php
include "lib/config.php";
include "lib/header.php";
include "lib/login_check.php";

if(isset($_POST['ctgname'])){


    $sql1 ="INSERT INTO `category`(`cid`, `cname`, `parent_id` ) VALUES (null,'$_POST[ctgname]','$_POST[cd]')";

    $res1 = $db->query($sql1);
    }


?>


<div class="col-md-12 col-sm-6 col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                   ADD CATEGORY FORM
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="">
                            
                         <div class="form-group">
                            <label>Enter</label>
                            <input class="form-control" name="ctgname" type="text">
                      
                        </div>
                     
                         <div class="form-group">
                            <label>Select Parent Category</label>
                            <select class="form-control" name="cd">
                             <option value=0>Parent Category</option>   
                                <?php
                                $sql ="SELECT * FROM `category` WHERE `parent_id`=0";
                                $res =$db->query($sql);
                                while($row =$res->fetch_object()){

                                
                                ?>
                                <option value="<?php print"$row->cid" ?>"><?php print "$row->cname";?></option>
                               <?php }; ?>
                            </select>
                           
                        </div>

                        
                     
                            <button type="submit" class="btn btn-danger">Submit </button>

                        </form>
                </div>
            </div>
        </div>
<?php
include "lib/footer.php";
?>