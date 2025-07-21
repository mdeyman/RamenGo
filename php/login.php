<?php
    require_once('./Server.php');

    $query = $pdo->prepare("SELECT * FROM `users` WHERE `Phone`=?");
    $query->execute(array(
        $_GET['phone'],
    ));
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if (!$result){
        echo 'Пользователя не существует';
    }

    if (password_verify($_GET['password'], $result['Password'])){
            $_SESSION['USER'] = $result;
            redir('../pages/index.php');        
    }