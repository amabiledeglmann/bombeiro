<?php
include("conecta.php");
$ficha= $_POST["ficha"];
$fibra= $_POST["fibra"];




$comando = $pdo->prepare("INSERT INTO preenchimento VALUES ('$ficha', '$fibra')");
$resultado = $comando->execute();
header("Location:cinematica.html");



?>