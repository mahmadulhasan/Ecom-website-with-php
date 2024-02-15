<?php

include "lib/config.php";
include "lib/login_check.php";

if(isset($_POST['pname'])){

    $name = $_POST['pname'];
    $filename=$_FILES['image']['name'];
    $location=$_FILES['image']['tmp_name'];

    $ext = explode(".", $filename);
    $ext=strtolower(end($ext));

    if($ext=='jpeg' || $ext=='png' || $ext=='jpg'){
        $sql ="INSERT INTO `products`(`id`, `name`, `price`, `details`, `cid`) VALUES (NULl,'$_POST[pname]','$_POST[price]','$_POST[details]','$_POST[cd]')";

        $res = $db->query($sql);

        // last inserted id

        $id=$db->insert_id;


        $destination="products/".$id.".".$ext ;

        $sql1="UPDATE `products` SET `image`='$destination' WHERE `id`='$id'";

        $db->query($sql1);

        $destination="../products/".$id.".".$ext ;

        move_uploaded_file($location, $destination);
        
        header("location:add_products.php?msg=Inserted Successfully");

    }

}
?>