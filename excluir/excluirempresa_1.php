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
$codigo = $_GET['codigo'];
//echo $codigo;
// sql to delete a record

$sql= "DELETE FROM cad_empresa WHERE usu_cod = $codigo";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location: listarusuario.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>