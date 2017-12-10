<?php
/* my sql conect conecta o banco onde ele esta o */
$conexao = mysqli_connect("localhost","root","","bancocurriculo.sql");
//$sql = "SELECT FROM cad_usuario";
//$rs = mysqli_query($conexao,$sql);
// confere o cadastro se der certo cria as variaveis e as insere, se não der certo apresentará uma mensagem de erro
  if(!empty($_POST["cur_nome"])&& !empty($_POST["cur_email"])&& !empty($_POST["cur_fone"])){ // verifica se estão vazios esses campos

      $nome = $_POST["cur_nome"];
      $fone = $_POST["cur_fone"];
      $nascimento = $_POST["cur_nasc"];
      $descricao = $_POST["cur_descri"];
      $formacoes = $_POST["cur_formacoes"];
      $email = $_POST["cur_email"];
      $escolaridade = $_POST["cur_escolaridade"];
      $perfil = $_POST["cur_perfil"];
      $objetivos = $_POST["cur_objetivos"];
      
  
        $sql = "insert into curriculo (cur_nome, cur_fone, cur_nasc, cur_descri, cur_formacoes, cur_email, cur_escolaridade, cur_perfil, cur_objetivos) values ('$nome','$fone', '$nascimento', '$descricao', '$formacoes', '$email', '$escolaridade', '$perfil','$objetivos')";
        $status = mysqli_query($conexao,$sql);
        if ($status == 0){
            echo "Erro ao inserir inscrição.<br>".  mysqli_error($conexao);
           
        }else if($status == 1) {
            echo "Inscrição cadastrada com sucesso.<br>";
                header("Location: pdf.php");
        }
        }
        ?>