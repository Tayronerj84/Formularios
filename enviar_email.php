<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeHotel = $_POST['nome-hotel'];
    $cnpjHotel = $_POST['cnpj-hotel'];
    $enderecoHotel = $_POST['endereco-hotel'];
    $redeHoteleira = $_POST['rede-hoteleira'];
    $responsavelGlobo = $_POST['responsavel-globo'];
    $emailContato = $_POST['email-contato'];
    $telefoneContato = $_POST['telefone-contato'];
    $cargo = $_POST['cargo'];

  $destinatario = "tayrone.santos1120@gmail.com"; // Substitua pelo seu endereço de e-mail
  $assunto = "Informações do formulário";
    $mensagem = "Nome do Hotel: $nomeHotel\n";
    $mensagem .= "CNPJ do Hotel: $cnpjHotel\n";
    $mensagem .= "Endereço Completo: $enderecoHotel\n";
    $mensagem .= "Rede Hoteleira: $redeHoteleira\n";
    $mensagem .= "Nome do responsável comercial pelo atendimento Globo: $responsavelGlobo\n";
    $mensagem .= "E-mail de contato da pessoa acima: $emailContato\n";
    $mensagem .= "Telefone de contato: $telefoneContato\n";
    $mensagem .= "Cargo: $cargo\n";

  // Envie o e-mail
  mail($destinatario, $assunto, $mensagem);

  // Redirecione para uma página de confirmação ou exiba uma mensagem de sucesso
  echo "As informações foram enviadas por e-mail!";
}
?>
