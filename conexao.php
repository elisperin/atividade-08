<?php 

$host = "192.168.10.16";
$senha = "50358440807";
$usuario = "postgres";
$banco = "lojasegundo";


$pdo = new PDO(
    "pgsql:$host;port=5432;dbname=$banco",
    $usuario,
    $senha
)


?>