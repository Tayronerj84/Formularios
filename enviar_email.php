<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
  $idade = $_POST["idade"];

  // Configurações do e-mail
  $to = "seu_email@example.com"; // Insira o endereço de e-mail de destino
  $subject = "Novo formulário enviado";
  $message = "Nome: " . $nome . "\nIdade: " . $idade;

  // Envia o e-mail
  if (mail($to, $subject, $message)) {
    echo "E-mail enviado com sucesso!";
  } else {
    echo "Ocorreu um erro ao enviar o e-mail.";
  }
}
?>
