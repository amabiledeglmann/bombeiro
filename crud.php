<?php
include("conecta.php");
$ome= $_POST["Primeiro Nome"];
$Sobrenome = $_POST["Sobrenome"];
$Email = $_POST["Email"];
$Celular = $_POST["Celular"];
$Senha = $_POST["Senha"];
$Confirme = $_POST["Confirme sua Senha"];

if(isset($_POST["gravar"]))

{
    $comando = $pdo->prepare("INSERT INTO cadastro VALUES ($Nome, $Sobrenome, $Email, '$Celular', '$Senha', '$Confirme')");
    $resultado = $comando->execute();
    header("Location:telacadastro.html");

}

if(isset($_POST["excluir"]))
{
    $comando = $pdo->prepare("DELETE FROM alunos WHERE matricula =$matricula");
    $resultado = $comando->execute();
    header("Location:telacadastro.html");
}

if(isset($_POST["alterar"]))
{
    $comando = $pdo->prepare("UPDATE alunos SET nome ='$nome', idade=$idade WHERE matricula=$matricula");
    $resultado = $comando->execute();
    header("Location:telacadastro.html");
}

if(isset($_POST["listar"]))
{
    $comando = $pdo->prepare("SELECT * FROM alunos WHERE matricula = $matricula");
    $resultado = $comando->execute();

    while ($linhas = $comando->fetch())
    {
        $n = $linhas["nome"];
        $m = $linhas["matricula"];
        $i = $linhas["idade"];
        if($i>18)
        {
        echo("<div class = 'D1'> <b>$m</b> $n $i <br> <br>");
        }
        else
        {
            header("Location:cadastro.html");
        }
    }
}
  
?>