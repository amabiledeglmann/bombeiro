<?php
include("conecta.php");
$periodo= $_POST["periodo"];
$natal=isset($_POST["natal"])? "S" : "N";
$medico=$_POST["medico"];
$complicacoes=isset($_POST["complicacoes"])? "S" : "N";
$primeiro=isset($_POST["primeiro"])? "S" : "N";
$quantos=$_POST["quantos"];
$contracoes=$_POST["contracoes"];
$tempo=$_POST["tempo"];
$intervalo=$_POST["intervalo"];
$evacuar=isset($_POST["evacuar"])? "S" : "N";
$bolsa=isset($_POST["bolsa"])? "S" : "N";
$visual=isset($_POST["visual"])? "S" : "N";
$parto=isset($_POST["parto"])? "S" : "N";
$nascimento=$_POST["nascimento"];
$sexo=isset($_POST["sexo"])? "S" : "N";
$nome=$_POST["nome"];



$comando = $pdo->prepare("INSERT INTO gestacional VALUES ('$periodo', '$natal', '$medico', '$complicacoes', '$primeiro', '$quantos','$contracoes', '$tempo', '$intervalo', '$evacuar', '$bolsa', '$visual','$parto', '$nascimento', '$sexo', '$nome')");
$resultado = $comando->execute();
header("Location:cinematica.html");



?>