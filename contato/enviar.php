<?php
date_default_timezone_set('America/Sao_Paulo');
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nome = isset($_POST['nome']) ? $_POST['nome'] : 'Não informado';
$email = isset($_POST['email']) ? trim($_POST['email']) : 'Não informado';
$assunto = isset($_POST['assunto']) ? utf8_decode($_POST['assunto']) : 'Não informado';
$mensagem = isset($_POST['mensagem']) ? trim($_POST['mensagem']) : 'Não informado';
$data = date('d/m/Y H:i:s');



if($email && $mensagem) {
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = 'smtp.titan.email';
	$mail->SMTPAuth = true;
	$mail->Username = 'contato@dharmaproducao.com';
	$mail->Password = 'Gracinha123';
	$mail->Port = 465;

	$mail->setFrom('contato@dharmaproducao.com');
	$mail->addAddress('contato@dharmaproducao.com');
	

	$mail->isHTML(true);
	$mail->Subject = $assunto;
	$mail->Body = "Nome: {$nome}<br>
				   Email: {$email}<br>
				   Mensagem: {$mensagem}<br>
				   Data/hora: {$data}";
	

	if($mail->send()) {
		// echo 'Email enviado com sucesso.';
		echo '<script>location.assign("/?enviado=true");</script>';
	} else {
		// echo 'Email nao enviado.';
		echo '<script>location.assign("/?enviado=false");</script>';
	}


} else {
	echo 'Email não enviado: informar o email e a mensagem.';
}
