<?php
include("conecta.php");
$disturbio=isset($_POST["periodo"])? "S" : "N";
$capacete=isset($_POST["capacete"])? "S" : "N";
$cinto=isset($_POST["cinto"])? "S" : "N";
$compr=isset($_POST["compr"])? "S" : "N";
$cena=isset($_POST["cena"])? "S" : "N";
$painel=isset($_POST["painel"])? "S" : "N";
$volante=isset($_POST["volante"])? "S" : "N";




$comando = $pdo->prepare("INSERT INTO cinematica VALUES ('$disturbio', '$capacete', '$cinto', '$compr', '$cena', '$painel','$volante')");
$resultado = $comando->execute();
header("Location:anamnese.html");



?>