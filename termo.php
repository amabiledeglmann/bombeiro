<?php
include("conecta.php");
$nome= $_POST["nome"];
$identidade= $_POST["identidade"];
$ass= $_POST["ass"];
$testemunha= $_POST["testemunha"];
$doc= $_POST["doc"];
$testemunha2= $_POST["testemunha2"];
$doc2= $_POST["doc2"];

$comando = $pdo->prepare("INSERT INTO termo VALUES ('$nome','$identidade', '$ass', '$testemunha', '$doc', '$testemunha2', '$doc2')");
$resultado = $comando->execute();
header("Location:cinematica.html");