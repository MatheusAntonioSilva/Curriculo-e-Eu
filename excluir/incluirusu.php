<?php
/* my sql conect conecta o banco onde ele esta o */
$conexao = mysqli_connect("localhost","root","","bancocurriculo.sql");
//$sql = "SELECT FROM cad_usuario";
//$rs = mysqli_query($conexao,$sql);

  if(!empty($_POST["usu_nome"])&& !empty($_POST["usu_email"])&& !empty($_POST["usu_senha"])){

      $nome = $_POST["usu_nome"];
      $email = $_POST["usu_email"];
      $senha = $_POST["usu_senha"];
      $nascimento = $_POST["usu_nascimento"];
      $fone = $_POST["usu_fone"];
      $celular = $_POST["usu_celular"];
  
        $sql = "insert into cad_usuario(usu_nome,usu_email,usu_senha,usu_nascimento, usu_fone,usu_celular) values ('$nome','$email','$senha','$nascimento','$fone','$celular')";
        $status = mysqli_query($conexao,$sql);
        if ($status == 0){
            echo "Erro ao inserir inscrição.<br>".  mysqli_error($conexao);
           
        }else if($status == 1) {
            echo "Inscrição cadastrada com sucesso.<br>";
        }
        }
        ?>
<!DOCTYPE html>

<!DOCTYPE html>

