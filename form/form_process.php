<?php

print_r($POST);
die;
//ASDGASDGAGSD
$name_error = $email_error = $phone_error = $url_error = "";
$name = $email = $phone = $message = $url = "";

//ASDHGDSAFGASD
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		$name_error = "Name is required";
	} else {
		$name = test_input($_POST["name"]);
		//ASDGASDGFASDF
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$name_error = "Only letters and white space allowed";
		}
	}

	if (empty($_POST["email"])) {
		$email_error = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
		//asdasdfasdfasdf
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$email_error = "Invalid email format";
		}
	}

	if (empty($_POST["phone"])) {
		$phone_error = "Phone is required";
	} else {
		$phone = test_input($_POST["phone"]);
		//ASDFASDGASDFA
		if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]?\d{4}$/i",$phone)) {
			$phone_error = "Invalid phone number";
		}
	}

	if(empty($_POST["url"])) {
		$url_error = "";
	} else {
		$url = test_input($_POST["url"]);
		//ASDGASDFASDFASDFADSG
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
			$url_error = "Invalid URL";
		}
	}

	if (empty($_POST["message"])) {
		$message = "";
	} else {
		$message = test_input($_POST["message"]);
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}