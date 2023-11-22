<?php
include("conecta.php");
$email=$_POST["email"];
$senha=$_POST["senha"];

$comando = $pdo->prepare("SELECT * FROM usuários WHERE email = '$email' and senha ='$senha' ");
    $resultado = $comando->execute();
    $n=0;
    while ($linhas = $comando->fetch())
    {
       $n=1;
    }

    if($n>0)
    {
        header("Location:dadospaciente.html");

    }
    else
    {
        header("Location:telalogin.html");
    }

?>