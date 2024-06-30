<?php
include_once("conn.php");

function getName($conn, $id){
    $stmt = $conn->prepare("SELECT name FROM contacts WHERE id = :id");
    $stmt->bindParam(":id", $id,PDO::PARAM_INT);
    $stmt->execute();
    $name = $stmt->fetch();
    return $name['name'];
}

function getPhone($conn, $id){
    $stmt = $conn->prepare("SELECT phone FROM contacts WHERE id = :id");
    $stmt->bindParam(":id", $id,PDO::PARAM_INT);
    $stmt->execute();
    $phone = $stmt->fetch();
    return $phone['phone'];
}

function getObs($conn, $id){
    $stmt = $conn->prepare("SELECT obs FROM contacts WHERE id = :id");
    $stmt->bindParam(":id", $id,PDO::PARAM_INT);
    $stmt->execute();
    $obs = $stmt->fetch();
    return $obs['obs'];
}

$method = $_SERVER['REQUEST_METHOD'];

if ($method === "GET"){
    $stmt = $conn->prepare("SELECT * FROM contacts");
    $stmt->execute();
    $contacts = $stmt->fetchAll();
}



?>
