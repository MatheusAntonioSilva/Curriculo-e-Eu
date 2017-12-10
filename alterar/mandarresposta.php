<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bancocurriculo.sql";

// Cria a conexão
$conn = mysqli_connect("localhost","root","","bancocurriculo.sql");
// confere a conexão se esta certa ou não, se estiver certa ele vai poder alterar as informações se não irá aparecer mensagem de erro
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$codigo = $_POST['codigo'];     
$resposta = $_POST["cur_resposta"];

      
      $sql = "UPDATE curriculo SET  cur_resposta = '$resposta' WHERE cur_cod = '$codigo'";
if (mysqli_query($conn, $sql)) {
    echo "Record update successfully";
    header("Location: ../adm/listarcurriculos.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>