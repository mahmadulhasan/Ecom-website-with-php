<?php 

if(!isset($_SESSION['admin_login']) && $_SESSION['admin_login']!=true){
	header("location:index.php?msg=Please Login First");
}


?>