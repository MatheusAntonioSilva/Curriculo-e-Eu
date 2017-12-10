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
      $celular = $_POST["cur_celular"];
      $cidade = $_POST["cur_cidade"];
      $endereco = $_POST["cur_endereco"];
      $bairro = $_POST["cur_bairro"];
      $CEP = $_POST["cur_cep"];
      $estadocivil = $_POST["cur_estadocivil"];
      $nascionalidade = $_POST["cur_nascionalidade"];
      $formacoes = $_POST["cur_formacoes"];
      $email = $_POST["cur_email"];
      $escolaridade = $_POST["cur_escolaridade"];
      $perfil = $_POST["cur_perfil"];
      $objetivos = $_POST["cur_objetivos"];
      $UF = $_POST["cur_UF"];
      
  
        $sql = "insert into curriculo (cur_nome, cur_fone, cur_nasc, cur_celular, cur_cidade, cur_endereco, cur_bairro, cur_cep, cur_estadocivil, cur_nascionalidade, cur_formacoes, cur_email, cur_escolaridade, cur_perfil, cur_objetivos, cur_UF) values ('$nome','$fone', '$nascimento', '$celular', '$cidade', '$endereco', '$bairro', '$CEP', '$estadocivil',  '$nascionalidade', '$formacoes', '$email', '$escolaridade', '$perfil','$objetivos','$UF')";
        $status = mysqli_query($conexao,$sql);
        if ($status == 0){
            echo "Erro ao inserir inscrição.<br>".  mysqli_error($conexao);
           
        }else if($status == 1) {
            echo "Inscrição cadastrada com sucesso.<br>";
                header("Location: pdf.php");
        }
        }
        ?>