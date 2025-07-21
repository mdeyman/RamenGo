<?php
    require_once('./Server.php');
    var_dump($_GET);

    $query = $pdo->prepare("DELETE FROM `shopping_cart` WHERE `ID_Shopping_cart`=?");
    $query->execute(array($_GET['id']));
    redir('../pages/cart.php');