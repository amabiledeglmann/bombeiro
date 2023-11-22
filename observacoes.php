<?php
include("conecta.php");
$caixaobserva= $_POST["caixaobserva"];




$comando = $pdo->prepare("INSERT INTO observacoes VALUES ('$caixaobserva')");
$resultado = $comando->execute();
header("Location:preenchimento.html");



?>