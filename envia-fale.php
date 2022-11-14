<?
$destinatario = "jessewilliansousa@gmail.com";

$nome = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['message'];
$assunto = $_REQUEST['assunto'];

$body = "=====================================". "\n";
$body = $body . "Envie um email" . "\n";
$body = $body . "=====================================" . "\n\n";
$body = $body . "Nome: " . $name . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $message . "\n\n";
$body = $body . "=====================================" . "\n";

mail($destinatario ,$body, "From: $email\r\n");


?>