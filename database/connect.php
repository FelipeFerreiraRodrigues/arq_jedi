<?php
//seleciona as informaões do banco de dados para se conectar
$host = "192.168.10.47";
$dbname = "jediarch";
$user = "jediarch";
$pass = "I1D46A";

try{
    $conexao = new PDO(
        "pgsql:host=$host;dbname=$dbname",
        $user,
        $pass
    );
    echo "";
} catch (PDOException $e) {
    echo "Erro " . $e->getMessage();
}
?>