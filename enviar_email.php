<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    $to = 'tayrone.santos1120@gmail.com';
    $subject = 'Novo contato pelo formulário';
    $message = "Nome: $nome\n";
    $message .= "Idade: $idade\n";

    // Enviar o email
    $result = mail($to, $subject, $message);

    if ($result) {
        echo 'Email enviado com sucesso!';
    } else {
        echo 'Ocorreu um erro ao enviar o email.';
    }
}
?>
