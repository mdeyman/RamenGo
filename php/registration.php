<?php
    require_once('./Server.php');

    $query = $pdo->prepare("SELECT * FROM `users` WHERE `Phone`=? ");
    $query->execute(array(
        $_GET['phone'],
    ));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if (!count($result)){
        echo 1;
        $query = $pdo->prepare("INSERT INTO `users`(`ID_Access_rights`, `Phone`, `Password`) VALUES (2, ?, ?)");
        $query->execute(array(
            $_GET['phone'],
        password_hash($_GET['password'], PASSWORD_DEFAULT)
        ));
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        redir('../pages/index.php');     
    }