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
		    echo "
    <img class=\"lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded\" alt=\"successful\" src=\"https://photonscienceclub.000webhostapp.com/img/bat-thanks.png\">";
			echo "<h1 class=\"text-lg text-green-500\">Sent Successfully! Thank you".$name.", We will contact you shortly!</h1>\n";
		}
		else{
		    echo "
    <img class=\"lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded\" alt=\"successful\" src=\"https://photonscienceclub.000webhostapp.com/img/something-went-wrong.png\">";
			
			echo "<h1 class=\"text-red-500\">Something went wrong!</h1>";
		}
	}
?>
