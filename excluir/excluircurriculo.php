<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bancocurriculo.sql";


// Cria a conexão 
$conn = mysqli_connect("localhost", "root","", "bancocurriculo.sql");

// Confere a conexão, se ela funcionar vai excluir um cadastro se não ira dar menasagem de erro
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$codigo = $_GET['cur_cod'];
//echo $codigo;
// sql to delete a record

$sql= "DELETE FROM curriculo WHERE cur_cod = $codigo";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location: ../adm/listarcurriculos.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>