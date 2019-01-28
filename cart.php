
<?php
	$name = $_GET['name'];
	$contact = $_GET['contact'];
	$gender = $_GET['gender'];
	$address = $_GET['address'];
	$payment = $_GET['payment'];
	$pendrive = $_GET['pendrive'];
	$mouse = $_GET['mouse'];
	$keyboard = $_GET['keyboard'];
	$laptop = $_GET['laptop'];
	
	echo $name.';'.$contact.';'.$gender.';'.$address.';'.$payment.';'.$pendrive.';'.$mouse.';'.$keyboard.';'.$laptop;
?>
