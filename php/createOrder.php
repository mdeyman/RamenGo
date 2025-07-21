<?php
    require_once('./Server.php');
    var_dump($_GET);

    if (!$USER){
        redir('../pages/index.php');
    }

    $query = $pdo->prepare("SELECT * FROM `shopping_cart` WHERE `ID_Users`=?");
    $query->execute(array($USER['ID_Users']));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if ($result) {

        //  Получаем стоимость продукции

        $query = $pdo->prepare(
           " SELECT sum(Count*Price) as total FROM shopping_cart
            JOIN dishes ON dishes.ID_Dishes=shopping_cart.ID_Dishes
            WHERE `ID_Users`=?");
        $query->execute(array($USER['ID_Users']));
        $total = $query->fetch()['total'];

        // Пытаемся найти свободного курьера

        $query = $pdo->prepare("SELECT * FROM `personal` WHERE `ID_Position`=1 and personal.available_status is NULL");
        $query->execute();
        $deliver = $query->fetch()['ID_Position'];
        
        // ставим статус занятости курьеру
        if ($deliver){
            $query = $pdo->prepare("UPDATE `personal` SET available_status=1 WHERE ID_Personal=?");
            $query->execute(array($deliver));
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        
        $query = $pdo->prepare(
            "INSERT INTO `order`(`ID_Users`, `ID_Personal`, `Overridden_address`, `Order_status`, `totalPrice`, order_date)
            VALUES (?,?,?,?,?, CURRENT_DATE())");
        $query->execute(array(
            $USER['ID_Users'],
            $deliver,
            $_GET['address'],
            'Создан',
            $total
        ));

        $lastId = $pdo->lastInsertId();

        // Заполняем таблицу продукции в заказе
        $query = $pdo->prepare("SELECT * FROM `shopping_cart` where ID_Users=?");
        $query->execute(array($USER['ID_Users']));
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($result);

        foreach($result as $cardItem){
            // var_dump($cardItem);
            $query = $pdo->prepare("INSERT INTO `products_in_order`( `orders_count`, `ID_Dishes`, `ID_Order`) VALUES (?, ?, ?)");
            $query->execute(array(
                $cardItem['Count'],
                $cardItem['ID_Dishes'],
                $lastId

            ));
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            echo 11232131;
        }

   
        $query = $pdo->prepare("DELETE FROM `shopping_cart` WHERE `ID_Users`=?");
        $query->execute(array( $USER['ID_Users']));
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
      
      




    } else{
        echo 'Корзина пуста';
    }

    redir('../pages/account.php');