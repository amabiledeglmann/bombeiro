<?php
include("conecta.php");
$asp=isset($_POST["asp"]) ? "S" : "N";
$ini=isset($_POST["ini"])?"S":"N";
$dir=isset($_POST["dir"])?"S":"N";
$cont=isset($_POST["cont"])?"S":"N";
$rautek=isset($_POST["rautek"])?"S":"N";
$guedel=isset($_POST["guedel"])?"S":"N";
$va=isset($_POST["va"])?"S":"N";
$dea=isset($_POST["dea"])?"S":"N";
$riscos=isset($_POST["riscos"])?"S":"N";
$fer=isset($_POST["fer"])?"S":"N";
$cura=isset($_POST["cura"])?"S":"N";
$compr=isset($_POST["compr"])?"S":"N";
$escr=isset($_POST["escr"])?"S":"N";
$ocu=isset($_POST["ocu"])?"S":"N";
$quei=isset($_POST["quei"])?"S":"N";
$sim=isset($_POST["sim"])?"S":"N";
$pont=isset($_POST["pont"])?"S":"N";
$imo=isset($_POST["imo"])?"S":"N";
$infd=isset($_POST["infd"])?"S":"N";
$infe=isset($_POST["infe"])?"S":"N";
$supd=isset($_POST["supd"])?"S":"N";
$supe=isset($_POST["supe"])?"S":"N";
$maca=isset($_POST["maca"])?"S":"N";
$rig=isset($_POST["rig"])?"S":"N";
$pon=isset($_POST["pon"])?"S":"N";
$capa=isset($_POST["capa"])?"S":"N";
$rcp=isset($_POST["rcp"])?"S":"N";
$rola=isset($_POST["rola"])?"S":"N";
$rolam=isset($_POST["rolam"])?"S":"N";
$tom=isset($_POST["tom"])?"S":"N";
$choq=isset($_POST["choq"])?"S":"N";
$canu=isset($_POST["canu"])?"S":"N";
$colar=isset($_POST["colar"])?"S":"N";
$tamanho=isset($_POST["tamanho"])?"S":"N";
$ked=isset($_POST["ked"])?"S":"N";
$ttf=isset($_POST["ttf"])?"S":"N";
$vent=isset($_POST["vent"])?"S":"N";
$oxi=isset($_POST["oxi"])?"S":"N";
$rean=isset($_POST["rean"])?"S":"N";
$auxi=isset($_POST["auxi"])?"S":"N";
$poli=isset($_POST["poli"])?"S":"N";
$samu=isset($_POST["samu"])?"S":"N";
$cit=isset($_POST["cit"])?"S":"N";
$outro=isset($_POST["outro"])?"S":"N";


$comando = $pdo->prepare("INSERT INTO procedimentos VALUES ('$asp', '$ini', '$dir', '$cont', '$rautek', '$guedel','$va', '$dea', '$riscos', '$fer', '$cura', '$compr','$escr', '$ocu', '$quei', '$sim', '$pont', '$imo','$infd', '$infe', '$supd', '$supe', '$maca', '$rig','$pon', '$capa', '$rcp', '$rola', '$rolam', '$tom','$choq', '$canu', '$colar', '$tamanho', '$ked', '$ttf','$vent', '$oxi', '$rean', '$auxi', '$poli', '$samu','$cit', '$outro')");
$resultado = $comando->execute();
header("Location:materiais.html");



?>