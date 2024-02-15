<?php 
include "library/config.php";
include "library/header.php";


//1 Into Customer
$time =time();

$sql ="INSERT INTO `customers`(`customer_id`, `name`, `email`, `password`, `phone`, `address`, `timestamp`) VALUES ('null','$_POST[cust_name]','$_POST[cust_email]','password','$_POST[cust_phone]','$_POST[cust_address]','$time')";

$db->query($sql);
// password = 'password'

//2 $cust_id = $db->insert_id
	
	$cust_id = $db->insert_id;

//3 Insert order
$sql1 ="INSERT INTO `orders`(`order_id`, `customer_id`, `ship_fullname`, `ship_phone`, `ship_address`, `payment_info`, `timestamp`, `status`) VALUES ('null','$cust_id','$_POST[cust_name]','$_POST[cust_phone]','$_POST[cust_address]','$_POST[payment]','$time','new')";


$db->query($sql1);

//4 $order_id = $db->insert_id
$order_id = $db->insert_id;

//5 Foreach same as viewcart

$cart =$_SESSION['mycart'];

foreach($cart as $pid=>$quantity){

        $sql2 = "SELECT * FROM `products` WHERE `id` = '$pid'";
		$res2 = $db->query($sql2);
		$row2 = $res2->fetch_object();

	$sql3 ="INSERT INTO `cart_items`(`cart_item_id`, `order_id`, `pid`, `quantity`, `product_name`, `product_price`) VALUES (null,'$order_id','$pid','$quantity','$row2->name','$row2->price')";

	$db->query($sql3);
}

//6 if cod print thank you message
if (isset($_POST['payment']) && $_POST['payment']== "cod") {
	print "<h1>Thank you<h1> ";
}

if (isset($_POST['payment']) && $_POST['payment']== "paypal") {

	print '<form name="f1" action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_cart" />
	<input type="hidden" name="upload" value="1">  

	<input type="hidden" name="business" value="ipeg.solutions@gmail.com" />';

	$c = 0;

	
	foreach($_SESSION['mycart'] as $pid=>$quantity) {
		$sql4 = "SELECT * FROM `products` WHERE `id` = '$pid'";
		$res4 = $db->query($sql4);
		$row4 = $res4->fetch_object();

		$shipping = $_POST['shipping'];

		$c++;

		print '
			<input type="hidden" name="item_name_'.$c.'" value="'.$row4->name.'" />
			<input type="hidden" name="amount_'.$c.'"    value="'.$row4->price.'" />
			<input type="hidden" name="quantity_'.$c.'"  value="'.$quantity.'" />
			<input type="hidden" name="shipping_'.$c.'"  value="'.$shipping.'" />
			';
	}


	print'</form>';


}


//7 clear session_cart
	//session_destroy($cart);
	 


unset($_SESSION['mycart']);

?>