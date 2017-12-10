<?php

/* my sql conect conecta o banco onde ele esta o */
$conexao = mysqli_connect("localhost", "root", "", "bancocurriculo.sql");
//$sql = "SELECT FROM cad_usuario";
//$rs = mysqli_query($conexao,$sql);
// confere o cadastro se der certo cria as variaveis e as insere, se não der certo apresentará uma mensagem de erro


if (!empty($_POST["usu_nome"]) && !empty($_POST["usu_email"]) && !empty($_POST["usu_senha"])) { // verifica se estão vazios esses campos
    if ($usu_senha != $usuconfir_senha) {
        $errors .= "Você digitou 2 senhas diferentes."; //adiciona o erro caso o usuário digitou 2 senhas diferentes
    } else 
       if ($email == 1) {
            $errors .= "E-mail escolhido já cadastrado."; //se o login já existir, ele adiciona o erro
        }else {

        $nome = $_POST["usu_nome"];
        $email = $_POST["usu_email"];
        $senha = $_POST["usu_senha"];
        $nascimento = $_POST["usu_nascimento"];
        $fone = $_POST["usu_fone"];
        $celular = $_POST["usu_celular"];

        $sql = "insert into cad_usuario(usu_nome,usu_email,usu_senha,usu_nascimento, usu_fone,usu_celular) values ('$nome','$email','$senha','$nascimento','$fone','$celular')";
        $status = mysqli_query($conexao, $sql);
       


        if ($errors == "") { //checa se houve ou não erros no cadastro
            if ($status == 0) {
                echo "Erro ao inserir inscrição.<br>" . mysqli_error($conexao);
            } else if ($status == 1) {
                echo "Inscrição cadastrada com sucesso.<br>";
                header("Location: ../logins/loginUsu.html");
            }
        }
    }
}
?>
