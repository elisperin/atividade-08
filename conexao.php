<?php 

$host = "192.168.10.16";
$senha = "SUA_SENHA";
$usuario = "postgres";
$banco = "lojasegundo";


$pdo = new PDO(
    "pgsql:$host;port=5432;dbname=$banco",
    $usuario,
    $senha
)


?>
