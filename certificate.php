<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $file = 'log.txt';
	$iname = "Name: ";
	$iemail = "		Email: ";
	$iphone = "		Contact No: ";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	$fp = fopen($file, 'a');

	fwrite($fp, $iname);
	fwrite($fp, $name);
	fwrite($fp, $iemail);
	fwrite($fp, $email);
	fwrite($fp, $iphone);
	fwrite($fp, $phone);
	fwrite($fp, "\n");

	fclose($fp);
}
?>

