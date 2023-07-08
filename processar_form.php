<!DOCTYPE html>
<html>
<head>
  <title>Processando Formulário</title>
</head>
<body>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    
    echo "<h2>Dados enviados:</h2>";
    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade . "<br>";
  }
?>

</body>
</html>
