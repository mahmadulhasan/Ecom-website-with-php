<?php
include "lib/config.php";
include "lib/login_check.php";
include "lib/header.php";


?>

<div class="row">

                    <div class="col-md-12">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">

                            	<?php 
                            	$sql = "SELECT * FROM `admin_login_history` WHERE 1";
                            	$res = $db->query($sql);
                            	
                            	$num = $res->num_rows;

                            	 ?>

                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Admin_Id</th>
                                        <th>Ip Address</th>
                                        <th>User Agent</th>
                                        <th>Time Stam</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php
                                	 while($row = $res->fetch_object()){
                                	 	$date = date('m/d/Y,H:i:s',$row->timestamp);
                                	  ?>
                                    <tr>
                                    	<td><?php print "$row->admin_login_history_id";  ?></td>
                                    	<td><?php print "$row->admin_id"; ?></td>
                                    	<td><?php print "$row->ip"; ?></td>
                                    	<td><?php print "$row->user_agent"; ?></td>
                                    	<td><?php print $date; ?></td>
                                    </tr>

                                    <?php
                                	};
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>


<?php 
include "lib/footer.php";


?>