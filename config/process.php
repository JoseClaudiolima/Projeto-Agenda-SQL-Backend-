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
} else if ($method === "POST"){
    $type = $_POST['type'];
    $name =  $_POST['name'];
    $phone = $_POST['phone'];
    $obs = $_POST['obs'];

    if($type === 'insert'){
        $stmt = $conn->prepare("INSERT INTO contacts (name,phone,obs) VALUES(:name, :phone, :obs)");
        $stmt->bindParam(":name",$name,PDO::PARAM_STR);
        $stmt->bindParam(":phone",$phone,PDO::PARAM_STR);
        $stmt->bindParam(":obs",$obs,PDO::PARAM_STR);
        $stmt->execute();
    } else if ($type === 'edit'){
        $id = $_POST['id'];

        $stmt = $conn->prepare("UPDATE contacts SET name = :name, phone= :phone, obs = :obs WHERE id = :id");
        $stmt->bindParam(":name",$name,PDO::PARAM_STR);
        $stmt->bindParam(":phone",$phone,PDO::PARAM_STR);
        $stmt->bindParam(":obs",$obs,PDO::PARAM_STR);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
    }


    header("Location:" . $base_url . "../index.php");
}



?>
