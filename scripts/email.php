<?php
	header('Content-Type: application/json');
	require_once(__DIR__."/recaptcha.php");
	$secret = "6LeJBiAUAAAAAAThsWqlUVpNzdJBf4r9E14uBPpS";
	$response = null;
	$reCaptcha = new ReCaptcha($secret);
	if ($_POST["g-recaptcha-response"]) {
		$response = $reCaptcha->verifyResponse(
	        $_SERVER["REMOTE_ADDR"],
	        $_POST["g-recaptcha-response"]
	    );
	}

	if (!$response->success){
		echo json_encode(array("status" => false, "code" => "ERR_INVALID_RECAPTCHA", "message" => "RECAPTCHA inválido"));
		return;
	}

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$_replyto = $_POST['_replyto'];
	$message = $_POST['message'];


	$to = "falecom@vistalife.com.br";
	$from = "falecom@vistalife.com.br";
	$headers = "From: falecom@vistalife.com.br"
				."\r\nReply-To: $_replyto"
				."\r\nMIME-Version: 1.0"
				."\r\nContent-type: text/html; charset=UTF-8";
	$subject = "Contato - Site";
	$body = "";


	$body = "Olá! Você recebeu um novo formulário no site!<br/>"
			."Nome: $name<br/>"
			."Telefone: $phone<br/>"
			."Responder para: $_replyto<br/>"
			."Mensagem: $message";
	if (mail($to, $subject, $body, $headers)){
		echo json_encode(array("status" => true, "code" => "SUCCESS", "message" => "E-mail enviado com sucesso!"));
	}else{
		echo json_encode(array("status" => false, "code" => "MAIL_FAILURE", "message" => "Erro interno ao enviar o e-mail"));
	}
?>