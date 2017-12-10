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
$nome = $_POST["usu_nome"];
$email = $_POST["usu_email"];
$senha = $_POST["usu_senha"];
$nascimento = $_POST["usu_nascimento"];
$fone = $_POST["usu_fone"];
$celular = $_POST["usu_celular"];
$sql = "UPDATE cad_usuario SET usu_nome = '$nome', usu_email = '$email', usu_senha = '$senha', usu_nascimento = '$nascimento', usu_fone = '$fone', usu_celular = '$celular' WHERE usu_cod = '$codigo'";

if (mysqli_query($conn, $sql)) {
    echo "Record update successfully";
    header("Location: ../usuario/configuracoes.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>