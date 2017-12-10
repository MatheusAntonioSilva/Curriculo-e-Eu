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
  $vaga = $_POST['vag_cat'];
        $descricao = $_POST['vag_descri'];
        $salario = $_POST['vag_salario'];
     
$sql = "UPDATE vagas SET vag_cod = '$codigo', vag_cat = '$vaga', vag_descri = '$descricao', vag_salario = '$salario' WHERE vag_cod = '$codigo'";

if (mysqli_query($conn, $sql)) {
    echo "Record update successfully";
 //   header("Location: ../adm/vagas.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>