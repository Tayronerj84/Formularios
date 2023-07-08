<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Configurações de email
    $to = 'tayrone.santos1120@gmail.com'; // Coloque o endereço de email para onde deseja enviar o formulário
    $subject = 'Formulário de Hotel';
    
    // Dados do formulário
    $nomeHotel = $_POST['nome-hotel'];
    $cnpjHotel = $_POST['cnpj-hotel'];
    $enderecoHotel = $_POST['endereco-hotel'];
    $redeHoteleira = $_POST['rede-hoteleira'];
    $responsavelGlobo = $_POST['responsavel-globo'];
    $emailContato = $_POST['email-contato'];
    $telefoneContato = $_POST['telefone-contato'];
    $cargo = $_POST['cargo'];
    
    // Mensagem do email
    $message = "
    <html>
    <head>
    <title>Detalhes do Formulário</title>
    </head>
    <body>
    <h2>Dados do Hotel:</h2>
    <p><strong>Nome do Hotel:</strong> $nomeHotel</p>
    <p><strong>CNPJ do Hotel:</strong> $cnpjHotel</p>
    <p><strong>Endereço Completo:</strong> $enderecoHotel</p>
    <p><strong>Rede Hoteleira:</strong> $redeHoteleira</p>
    <p><strong>Nome do responsável comercial pelo atendimento Globo:</strong> $responsavelGlobo</p>
    <p><strong>E-mail de contato da pessoa acima:</strong> $emailContato</p>
    <p><strong>Telefone de contato:</strong> $telefoneContato</p>
    <p><strong>Cargo:</strong> $cargo</p>
    </body>
    </html>
    ";
    
    // Cabeçalhos do email
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=utf-8';
    $headers[] = 'From: ' . $emailContato;
    
    // Envio do email
    if (mail($to, $subject, $message, implode("\r\n", $headers))) {
        echo 'O formulário foi enviado com sucesso.';
    } else {
        echo 'Ocorreu um erro ao enviar o formulário.';
    }
}
?>
