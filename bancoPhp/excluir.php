<?php

    $idmensageAll = $_GET['id'];
    
    
    include("conexao.php");

    try {
        $stmt = $pdo->prepare("delete from tbdescemail where idEmail=('$idmensageAll')");

        $stmt -> execute();

        $pdo = null;

        header("Location: ../index.php");

    }catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

?>