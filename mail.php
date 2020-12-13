<!DOCTYPE html>
<html>
<head>
  <title>Contacted</title>
</head>
<body>
<center>
<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];

		$to='thecoderaptors@gmail.com'; //Your Email Address
		$subject='[example.com] Contact'; //Your site domain in the place of example.com
		$message="Name :".$name."\n	Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
		    echo '<h1 style="background: rgba(0, 225, 20, 0.4); color: forestgreen; padding: 10px 30px;">Sent Successfully! Thank you' . $name . ', Mahfuzul Hasan will contact you shortly!</h1>';
		}
		else{
		    echo '<h1 style="background: rgba(225, 20, 20, 0.4); color: red; padding: 10px 30px;">Something went wrong! Try again later...</h1>';
		}
	}
?>
<b>
<a href="index.html">Return to Homepage</a>
</center>
</body>
</html>
