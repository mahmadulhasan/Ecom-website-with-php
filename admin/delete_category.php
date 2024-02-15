<?php

include "lib/config.php";
include "lib/login_check.php";

$sql="UPDATE `category` SET `is_this_deleted`='Yes' WHERE `cid`='$_GET[did]'";

$res=$db->query($sql);

header("location:manage_category.php?msg=deleted successfully");



?>