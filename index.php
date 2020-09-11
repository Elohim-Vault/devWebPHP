
<?php

if(!isset($_GET['pag'])){
    $conteudo = "home.php";
    $head = "Bem vindo - ";
}else{
    $conteudo = $_GET['pag']. ".php";
    $head = $_GET['pag']. " - ";
}

include("header.php");
include("$conteudo");
?>