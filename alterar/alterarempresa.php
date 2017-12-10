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
$codigo = $_GET['codigo'];
  $CNPJ = $_POST["emp_cnpj"];
      $nome = $_POST["emp_nome"];
      $email = $_POST["emp_email"];
      $senha = $_POST["emp_senha"];
      $fone = $_POST["emp_fone"];
      $fonecontato = $_POST["emp_fonecontato"];
$sql = "UPDATE cad_empresa SET emp_cnpj='$CNPJ', emp_nome = '$nome', emp_email = '$email', emp_senha = '$senha', emp_fone = '$fone', emp_fonecontato = '$fonecontato' WHERE emp_cod = '$codigo'";

if (mysqli_query($conn, $sql)) {
    echo "Record update successfully";
    header("Location: ../adm/configuracoes.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>