<?php
    require_once('./Server.php');

    var_dump($_GET);

    $query = $pdo->prepare("INSERT INTO `feedback`( `phone`, `title`, `Description`, `name`) VALUES (?,?,?,?)");
    $query->execute(array(
        $_GET['phone'],
        $_GET['title'],
        $_GET['comment'],
        $_GET['name'],
    ));
   redir('../pages/index.php');