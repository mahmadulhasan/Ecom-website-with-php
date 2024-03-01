<?php 
// here add to cart logic is done
session_start();
//session_destroy();

if(isset($_SESSION['mycart']))
	$cart = $_SESSION['mycart'];
else
	$cart = [];

if(isset($_GET['del_id'])){

	$del_id = $_GET['del_id'];
	unset($cart[$del_id]);

}
if(isset($_POST['newcart'])){
	
	$cart = $_POST['newcart'];

	//print_r($_POST['newcart']);

	foreach($_POST['newcart'] as $pid=>$quantity){

		//print $pid;

		if($quantity<1){

		 	unset($cart[$pid]);
		}

	}
}

if(isset($_POST['pid']) ){

	$pid 		= $_POST['pid'];
	$quantity   = $_POST['quantity'];

	$cart[$pid] += $quantity;
}

$_SESSION['mycart'] = $cart;
//print_r($_SESSION);

header("location: viewcart.php");





?>