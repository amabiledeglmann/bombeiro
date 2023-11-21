<?php
include("conecta.php");
$ata=isset($_POST["ata"]) ? "S" : "N";
$cate=isset($_POST["cate"])?"S":"N";
$compr=isset($_POST["compr"])?"S":"N";
$kits=isset($_POST["kits"])?"S":"N";
$luvas=isset($_POST["luvas"])?"S":"N";
$comu=isset($_POST["comu"])?"S":"N";
$masc=isset($_POST["masc"])?"S":"N";
$base=isset($_POST["base"])?"S":"N";
$colar1=isset($_POST["colar1"])?"S":"N";
$colar2=isset($_POST["colar2"])?"S":"N";
$coxin=isset($_POST["coxin"])?"S":"N";
$ked=isset($_POST["ked"])?"S":"N";
$maca=isset($_POST["maca"])?"S":"N";
$ttf=isset($_POST["ttf"])?"S":"N";
$tirantea=isset($_POST["tirantea"])?"S":"N";
$tirantec=isset($_POST["tirantec"])?"S":"N";
$canula=isset($_POST["canula"])?"S":"N";


$comando = $pdo->prepare("INSERT INTO materiais VALUES ('$ata', '$cate', '$compr', '$kits', '$luvas', '$comu','$masc', '$base', '$colar1', '$colar2', '$coxin', '$ked','$maca', '$ttf', '$tirantea', '$tirantec', '$canula')");
$resultado = $comando->execute();
header("Location:gestacional.html");



?>