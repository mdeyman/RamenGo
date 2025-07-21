<?php
    require_once('./Server.php');

    if (!$USER){
        redir('../pages/login.php');
    }
    var_dump($USER);

    $query = $pdo->prepare("SELECT * FROM `shopping_cart` WHERE `ID_Users`=? AND ID_Dishes=?");
    $query->execute(
        array(
            $USER['ID_Users'],
            $_GET['id']
        )
       
    );
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if ($result){
        echo 1;
        $query = $pdo->prepare("UPDATE `shopping_cart` SET Count=Count+1 WHERE `ID_Users`=? AND ID_Dishes=?");
        $query->execute( array(
            $USER['ID_Users'],
            $_GET['id']
        ));
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
    } else{
        $query = $pdo->prepare("INSERT INTO `shopping_cart`(`ID_Users`, `ID_Dishes`, Count) VALUES (?,?,1)");
        $query->execute( array(
            $USER['ID_Users'],
            $_GET['id']
        ));
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        
    }

    redir('../pages/index.php');