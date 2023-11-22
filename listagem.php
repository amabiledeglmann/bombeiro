<?php
// Receber os dados do formulário
$nome = $_POST['nome'] ?? '';
$data = $_POST['data'] ?? '';

// Conectar ao banco de dados (simulado)
$conexao = new mysqli("bombeiro", "usuario", "senha", "bombeiro_amab");

// Checar conexão
if ($conexao->connect_error) {
  die("Erro na conexão: " . $conexao->connect_error);
}

// Inserir nova ocorrência no banco de dados
$sql = "INSERT INTO dados1 (nome, data) VALUES ('$nome', '$data')";
if ($conexao->query($sql) === TRUE) {
  // Redirecionar para a página inicial após adicionar a ocorrência
  header('Location: listagem.php');
} else {
  echo "Erro ao adicionar ocorrência: " . $conexao->error;
}

$conexao->close();
?>