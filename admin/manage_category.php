<?php 

include "lib/config.php";
include "lib/header.php";
include "lib/login_check.php";

?>



                <!-- Table Section -->
                <div class="row">


                    <div class="col-md-12">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl.No.</th>
                                        <th> Category Name</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php

                                $sql="SELECT * FROM `category` WHERE `parent_id`='0'";

                                $res=$db->query($sql);
                                $count=0;
                               
                                while($row=$res->fetch_object()){
                                	$count+=1;

                                    print'<tr>
                                        <td>'.$count.'</td>
                                        <td><span> '.$row->cname.'</span></td>
                                        <td><a href="edit_category.php?eid='.$row->cid.'">EDIT</a></td>
                                        <td><a href="delete_category.php?did='.$row->cid.'" onclick="return confirm(\'are you sure?\')">DELETE</a></td>
                                        
                                    </tr>';

                                    $sql1="SELECT * FROM `category` WHERE `parent_id`='$row->cid'";

                                   $res1=$db->query($sql1);
                                   While($row1=$res1->fetch_object())
                                   {
                                   	$count++;
                                   	print'<tr>
                                        <td>'.$count.'</td>
                                        <td><span> &nbsp;&nbsp;&nbsp;>>>'.$row1->cname.'</span></td>
                                        <td><a href="edit_category.php?eid='.$row1->cid.'">EDIT</a></td>
                                        <td><a href="delete_category.php?did='.$row1->cid.'" onclick="return confirm(\'are you sure?\')">DELETE</a></td>
                                        
                                    </tr>';

                                   
                                   }
                                  

                                   
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