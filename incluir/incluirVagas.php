<?php

/* my sql conect conecta o banco onde ele esta o */
$conexao = mysqli_connect("localhost", "root", "", "bancocurriculo.sql");
//$sql = "SELECT FROM cad_usuario";
//$rs = mysqli_query($conexao,$sql);
// confere o cadastro se der certo cria as variaveis e as insere, se não der certo apresentará uma mensagem de erro


if (!empty($_POST["vag_cat"]) && !empty($_POST["vag_descri"]) && !empty($_POST["vag_salario"])) { // verifica se estão vazios esses campos

        $vaga = $_POST["vag_cat"];
        $descricao = $_POST["vag_descri"];
        $salario = $_POST["vag_salario"];

        $sql = "insert into vagas(vag_cat,vag_descri,vag_salario) values ('$vaga','$descricao','$salario')";
        $status = mysqli_query($conexao, $sql);
       


        if ($errors == "") { //checa se houve ou não erros no cadastro
            if ($status == 0) {
                echo "Erro ao inserir vaga.<br>" . mysqli_error($conexao);
            } else if ($status == 1) {
                echo "Vaga cadastrada com sucesso.<br>";
                header("Location: ../adm/vagas.php");
            }
        }
    }

?>
