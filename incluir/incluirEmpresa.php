<?php
/* my sql conect conecta o banco onde ele esta o arquivo do banco*/
$conexao = mysqli_connect("localhost","root","","bancocurriculo.sql");
//$sql = "SELECT FROM cad_usuario";
//$rs = mysqli_query($conexao,$sql);
// confere o cadastro se der certo cria as variaveis e as insere, se não der certo apresentará uma mensagem de erro
 if (!empty($_POST["emp_nome"]) && !empty($_POST["emp_email"]) && !empty($_POST["emp_senha"])) { // verifica se estão vazios esses campos
    if ($emp_senha != $empconfir_senha) {
        $errors .= "Você digitou 2 senhas diferentes."; //adiciona o erro caso o usuário digitou 2 senhas diferentes
    } else 
        if ($email == 1) {
            $errors .= "E-mail escolhido já cadastrado."; //se o login já existir, ele adiciona o erro
        }else 
      $CNPJ = $_POST["emp_cnpj"];
      $nome = $_POST["emp_nome"];
      $email = $_POST["emp_email"];
      $senha = $_POST["emp_senha"];
      $fone = $_POST["emp_fone"];
      $fonecontato = $_POST["emp_fonecontato"];
  
        $sql = "insert into cad_empresa(emp_cnpj,emp_nome,emp_email,emp_senha,emp_fone,emp_fonecontato) values ('$CNPJ','$nome','$email','$senha','$fone','$fonecontato')";
        $status = mysqli_query($conexao,$sql);
        if ($errors == "") {
        if ($status == 0){
            echo "Erro ao inserir inscrição.<br>".  mysqli_error($conexao);
           
        }else if($status == 1) {
            echo "Inscrição cadastrada com sucesso.<br>";
            header("Location: ../logins/loginemp.html");
        }
        }
 }
        
        ?>
<!DOCTYPE html>

<!DOCTYPE html>

