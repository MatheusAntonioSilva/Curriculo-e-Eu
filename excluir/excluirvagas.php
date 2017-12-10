<?php
  session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bancocurriculo.sql";
$codigo = $_GET["id"];

// Cria a conexão 
$conn = mysqli_connect("localhost", "root","", "bancocurriculo.sql");

// Confere a conexão, se ela funcionar vai excluir um cadastro se não ira dar menasagem de erro
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//echo $codigo;
// sql to delete a record

$sql= "DELETE FROM vagas WHERE vag_cod = '".$codigo."' limit 1";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location: ../adm/vagas.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>