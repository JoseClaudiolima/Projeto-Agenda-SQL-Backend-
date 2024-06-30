<?php

$host = 'localhost';
$db = 'agenda_treino';
$user = 'root';
$pass =  '';

try{
    $conn = new PDO("mysql:host={$host};dbname={$db}",$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

}catch (PDOException $e){
    echo 'Erro: ' . $e;
    die();
}

?>