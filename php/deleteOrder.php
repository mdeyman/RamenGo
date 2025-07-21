<?php
    require_once('./Server.php');

    var_dump($_GET);

    $query = $pdo->prepare("DELETE FROM `products_in_order` WHERE `ID_Order`=?");
    $query->execute(array($_GET['order']));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    $query = $pdo->prepare("DELETE FROM `order` WHERE `ID_Order`=?");
    $query->execute(array($_GET['order']));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    header('Location: ../pages/index.php');