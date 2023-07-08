<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
  $idade = $_POST["idade"];

  $destinatario = "tayrone.santos1120@gmail.com"; // Substitua pelo seu endereço de e-mail
  $assunto = "Informações do formulário";
  $mensagem = "Nome: " . $nome . "\n" .
              "Idade: " . $idade;

  // Envie o e-mail
  mail($destinatario, $assunto, $mensagem);

  // Redirecione para uma página de confirmação ou exiba uma mensagem de sucesso
  echo "As informações foram enviadas por e-mail!";
}
?>
