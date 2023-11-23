<?php
    include("conecta.php");

    $data =$_POST["data"];
    $sexo =$_POST["sexo"];
    $hospital =$_POST["hospital"];
    $nome =$_POST["nome"];
    $idade =$_POST["idade"];
    $rg =$_POST["rg"];
    $phone =$_POST["phone"];
    $local_ocorrencia =$_POST["local_ocorrencia"];
    $acompanhante =$_POST["acompanhante"];
    $nome_acompanhante =$_POST["nome_acompanhante"];
    $idade_acompanhante =$_POST["idade_acompanhante"];

    if(isset($_POST["inserir"]))
    {
        $comando = $pdo->prepare("INSERT INTO dados1 VALUES ('$data', '$sexo', '$hospital','$nome','$idade','$rg','$phone','$local_ocorrencia','$acompanhante', '$nome_acompanhante', '$idade_acompanhante')");
        $resultado = $comando->execute();
    
        // para voltar no forms
        header("Location: listagem2.php");
    }
    if(isset($_POST["excluir"]))
    {
        $comando = $pdo->prepare("DELETE FROM dados1 where rg='$rg'");
        $resultado = $comando->execute();
        header("Location: listagem2.php");
        }
    if(isset($_POST["alterar"]))
    {
        $comando = $pdo->prepare("UPDATE dados1 SET data='$data', sexo='$sexo', hospital='$hospital', nome='$nome', idade='$idade',rg='$rg', phone='$phone', local_ocorrencia='$local_ocorrencia', nome_acompanhante='$nome_acompanhante', idade_acompanhante='$idade_acompanhante' WHERE rg='$rg'");
        $resultado = $comando->execute();
        header("Location: listagem2.php");
        }
?>