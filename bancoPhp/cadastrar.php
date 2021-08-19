<?php
    
    $nameUser = $_POST['txtUser'];
    $nameEmail = $_POST['txtEmail'];
    $chatText = $_POST['txtAssunto'];
    $text = $_POST['txtTexto'];

    if (ctype_alpha($nameUser)) {
        $userVerification = "Tem";
    } else {
        $userVerification = "";
    }

    if($nameUser == "" || $nameEmail == "" || $chatText == "" || $text == "" || $userVerification == "") {
       
        header("Location: ../validacao.php");

    } else {
        include("conexao.php");

    try {
        $stmt = $pdo->prepare("insert into tbdescemail values(null,'$nameUser','$nameEmail','$chatText','$text')");

        $stmt -> execute();

        $pdo = null;

        header("Location: ../index.php");

    }catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    }
    
    

?>