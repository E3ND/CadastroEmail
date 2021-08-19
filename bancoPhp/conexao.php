<?php

    $server = "localhost";
    $bank = "bdemail";
    $user = "root";
    $password = "";

    $pdo = new PDO("mysql:host=$server;dbname=$bank",$user,$password);

?>