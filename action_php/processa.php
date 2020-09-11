<?php
session_start();
include_once("conexao.php");

if(!empty($_POST['estrela'])){  
    $estrela = $_POST['estrela'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $comentario = $_POST['comentario'];

    $queryInsert = "INSERT INTO avaliacoes (qtd_estrela, nome, sobrenome, email, comentario) VALUES 
    ('$estrela', '$nome', '$sobrenome', '$email', '$comentario')";

    $resultado = mysqli_query($conexao, $queryInsert);

    if(mysqli_insert_id($conexao)){
        header("Location: ../avaliacoes.php");
    }else{
        $_SESSION['msg'] = "Erro ao enviar a avaliação";
        header("Location: ../comente.php");
    }
}else{
    $_SESSION['msg'] = "Você precisa nos dar pelo menos uma estrela!";
    header("Location: ../comente.php");
}

?>