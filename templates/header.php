<?php
include_once("config/url.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!--Fonte Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!--Google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="<?=$base_url?>css/style.css">
</head>
<body>
    
<header>
    <nav>
        <a href="<?=$base_url?>index.php"><img  id="img-agenda" src="<?=$base_url?>img/logo.svg" alt="Agenda"></a>
        <a href="<?=$base_url?>index.php"  class="content-nav">
            <p>Agenda</p>
        </a>
        <a href="#" class="content-nav">
            <p>Adicionar Contato</p>
        </a>
    </nav>
</header>

