<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$_replyto = $_POST['_replyto'];
	$message = $_POST['message'];


	$to = "hi@bruno.works";
	$from = "hi@bruno.works";
	$headers = "From: hi@bruno.works"
				."\r\nReply-To: $_replyto"
				."\r\nMIME-Version: 1.0"
				."\r\nContent-type: text/html; charset=UTF-8";
	$subject = "Contato - Site";
	$body = "";


	$body = "Nome: $name<br/>"
			."Telefone: $phone<br/>"
			."Responder para: $_replyto<br/>"
			."Mensagem: $message";
	mail($to, $subject, $body, $headers);
?>