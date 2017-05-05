<?php
	$to = "hi@bruno.works";
	$from = "hi@bruno.works";
	$subject = "Contato - Site";
	$body = "";

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$_replyto = $_POST['_replyto'];
	$message = $_POST['message'];

	$body = "Nome: $name\nTelefone: $phone\nResponder para: $_replyto\nMensagem: $message";
	mail($to, $subject, $body);
?>