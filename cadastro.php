<?php
include("conecta.php");
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$number=$_POST["number"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirmPassword=$_POST["confirmPassword"];

$comando = $pdo->prepare("INSERT INTO usuários VALUES ('$firstname', '$lastname', '$email', '$number', '$password', '$confirmPassword')");
$resultado = $comando->execute();
header("Location:telalogin.html");



?>