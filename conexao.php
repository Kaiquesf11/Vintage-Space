<?php
$servidor = "localhost";
$usuario = "root";
$senha = ""; 
$banco = "vintage_space"; 

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro na ligação: " . $conn->connect_error);
}
?>