<?php
include("conecta.php");
$data= $_POST["data"];
$sexo= $_POST["sexo"];
$hospital= $_POST["hospital"];
$nome= $_POST["nome"];
$idade= $_POST["idade"];
$rg= $_POST["rg"];
$phone= $_POST["phone"];
$local_ocorrencia= $_POST["local_ocorrencia"];
$acompanhante=isset($_POST["acompanhante"])? "S" : "N";
$nome_acompanhante= $_POST["nome_acompanhante"];
$idade_acompanhante= $_POST["idade_acompanhante"];

$comando = $pdo->prepare("INSERT INTO dados1 VALUES ('$data', '$sexo', '$hospital','$nome','$idade','$rg','$phone','$local_ocorrencia','$acompanhante', '$nome_acompanhante', '$idade_acompanhante')");
$resultado = $comando->execute();
header("Location:procedimentos.html");



?>