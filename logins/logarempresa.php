<?php

session_start();
session_name("MeuLogin");

// se o cadastro funcionar irá logar com a pagina de empresa se não informara um erro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conexao = mysqli_connect("localhost", "root", ""); //configura os dados do seu MySQL
    $banco = mysqli_select_db($conexao, "bancocurriculo.sql"); //nome do  banco de dados

    $email = $_POST['email'];
    $q_user = mysqli_query($conexao, "SELECT emp_email,emp_senha,emp_cod FROM cad_empresa WHERE emp_email='$email'");
    $dados = mysqli_fetch_array($q_user);

    if (mysqli_num_rows($q_user) == 1) {
        echo "AKI";
//
//   Exibindo conteúdo de array
//echo "<pre>";
//print_r($variavel);
//echo "</pre>";
//
//        $query = mysqli_query("SELECT * FROM cad_usuario WHERE usu_email='$nome'");
//        $dados = mysqli_fetch_array($query);
//        
//        
        //se o email senha der certo irá levar a pagina usuario.html
        if ($_POST['email'] == $dados['emp_email']) {
            if ($_POST['senha'] == $dados['emp_senha']) {
//                session_register("qwert");
                echo "logou";
                $_SESSION["codigo_empresa"] = $dados['emp_cod'];
                $_SESSION["nome_empresa"] = $email;
                header("Location:../adm/index.html");
                exit;
            }
            //senha errada
            else {
                echo "senha errada";
                
                //  exit;
            }
        }
        //usuario invalido
    }
        else {
            echo "usuario errado";
               
        }
    /* if ($_SESSION("nome_usuario") != $nome) {
      header("Location: login_1.html");
      } */
} else {
   
}
//parte que verifica se o login já foi feito
?>

