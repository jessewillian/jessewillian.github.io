<?
$destinatario = "jessewilliansousa@gmail.com";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['mensagem'];

$body = "=====================================". "\n";
$body = $body . "Envie um email" . "\n";
$body = $body . "=====================================" . "\n\n";
$body = $body . "Nome: " . $name . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $message . "\n\n";
$body = $body . "=====================================" . "\n";

mail($destinatario ,$body, "From: $email\r\n");

?>