<?php 
    //variaveis
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');

    //campo e-mail
    $arquivo = "
        <html>
            <p><b>Nome:</b>$nome</p>
            <p><b>Email:</b>$nome</p>
            <p><b>Mensagem:</b>$nome</p>
            <p>Este email foi enviado em <b>$data_envio</b> as <b>$hora_envio</b></p>
        </html>
    ";

    //emails para quem será enviado o formulário
    $destino = "jessewilliansousa@gmail.com";
    $assunto = "Email";

    //este sempre deverá existir para garantir a exibição correta dos caracteres
    $headers = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    $headers .= "From: $nome <$email>";

    //enviar
    mail($destino, $assunto, $arquivo, $headers);

    echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";
    
?>