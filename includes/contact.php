<?php

	require_once("functions.php");
	//get email params
	$name= $_REQUEST['name'] ;
	$comments = $_REQUEST['comments'] ;
	$email = $_REQUEST['email'] ;
	$mobile = $_REQUEST['mobile'] ;
	
	
	
	//Create email
	$subject = "Message from Prabhav Contact Form ";
	$content = " Name: " . $name . "\nMessage: " . $comments . " \nMobile Number: " . $mobile."\nEmail: ".$email;
	
	if(mail('info.prabhav@gmail.com',$subject,$content, "From:".$email)){
		echo "Message Sent Successfully. <br /> Please wait! Redirecting in 2 seconds...";
		redirect_to("http://prabhav.info");	
	}else{
		$error = error_get_last();
		echo "Message could not be sent at this time. :- ".$error['type'].":".$error['message'];
	}

?>


