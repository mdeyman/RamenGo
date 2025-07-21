<?php
    require_once('./Server.php');
    var_dump($_GET);

    $query = $pdo->prepare("UPDATE `shopping_cart` SET `Count`= ?
                            WHERE ID_Users=? AND `ID_Dishes`=?");
    $query->execute(array(
        $_GET['count'],
        $USER['ID_Users'],
        $_GET['dishes-id'],
    ));
    redir('../pages/cart.php');