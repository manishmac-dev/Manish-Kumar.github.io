<?php
// variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];

//check input fields
if(empty($name) || empty($email) || empty($phone) || empty($message))
{

}
else
{
	mail("mkrg102@gmail.com", "Manish Kumar", $message);
	echo"<script type='text/javascript'>alert('your message sent seccessfully');
	window.history.log(-1);
	</script>";
}
?>
