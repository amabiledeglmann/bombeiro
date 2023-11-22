<?php
include("conecta.php");
$aconteceu=$_POST["periodo"];
$sim=isset($_POST["sim"])? "S" : "N";
$nao=isset($_POST["nao"])? "S" : "N";
$tempo=$_POST["tempo"];
$sim1=isset($_POST["sim1"])? "S" : "N";
$nao1=isset($_POST["nao1"])? "S" : "N";
$quais=$_POST["volante"];
$sim2=isset($_POST["sim2"])? "S" : "N";
$nao2=isset($_POST["nao2"])? "S" : "N";
$medicacao=$_POST["medicacao"];
$quais2=$_POST["quais2"];
$alergico=$_POST["alergico"];
$ingeriu=$_POST["ingeriu"];
$quais3=$_POST["quais3"];

$comando = $pdo->prepare("INSERT INTO anamnese VALUES ('$aconteceu', '$sim', '$nao', '$tempo', '$sim1', '$nao1','$quais','$sim2','$nao2','$medicacao','$quais2','$alergico','$ingeriu','$quais3')");
$resultado = $comando->execute();
header("Location:observacoes.html");
