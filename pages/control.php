<?php

require_once('../php/Server.php');
$query = $pdo->prepare(" SELECT SUM(orders_count) as boughtProducts, ID_Dishes, 
    Name as f from (SELECT products_in_order.*, `order`.`order_date`, Name FROM products_in_order
    JOIN `order` on `order`.ID_Order=products_in_order.ID_Order
    JOIN dishes on dishes.ID_Dishes=products_in_order.ID_Dishes
    ) a
    where order_date<'2022-07-01' and order_date>'2022-06-01'
    GROUP by ID_Dishes
    ORDER BY boughtProducts DESC
    ");


$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dyelog - Japanese food restaurant</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/burger.css">
    <link rel="stylesheet" href="../css/search.css">
</head>

<body>
    <?php
    require('./HEADER.php');
    ?>

    <main>
        <section class="sec__control">
            <div class="container">
                <h1>Control Panel</h1>
                <h2>Create Product</h2>
                <form enctype="multipart/form-data" action="../php/createProduct.php" class="form__control" method="post">
                    <input name="file" type="file" class="form__control-input">
                    <input name="title" type="text" placeholder="Title dishes" class="form__control-input">
                    <input name="additional" type="text" placeholder="Additional information" class="form__control-input">
                    <input name="price" type="text" placeholder="Price" class="form__control-input">
                    <input name="weight" type="number" placeholder="Weight" class="form__control-input">
                    <textarea name="description" type="text" placeholder="Desctiption"></textarea>
                    <button type="submit" class="form__control-btn">Create</button>
                </form>
                <h2>Total Stats</h2>
                <table id="customers">
                    <tr>
                        <th>Dishes Name</th>
                        <th>ID</th>
                        <th>Count</th>
                    </tr>
                    <?php foreach ($result as $item) : ?>
                        <tr>
                            <td><?= $item['f']; ?></td>
                            <td><?= $item['ID_Dishes']; ?></td>
                            <td><?= $item['boughtProducts']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </section>
        <hr>
        <footer class="footer">
            <div class="footer__top">
                <a href="index.html">
                    <img src="../assets/icons/footer_logo.svg" alt="Logo">
                </a>
                <ul class="footer__top-nav">
                    <li>
                        <a href="index.html">Menu</a>
                    </li>
                    <li>
                        <a href="about_us.html">About Us</a>
                    </li>
                    <li>
                        <a href="promotions.html">Promotions & Special Offers</a>
                    </li>
                    <li>
                        <a href="news.html">News</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="footer__bottom">
                <div class="container">
                    <div class="footer__bottom-content">
                        <p>©All rights reserved. 2022</p>
                        <ul class="footer__bottom-social">
                            <li>
                                <a href="#">
                                    <img src="../assets/icons/instagram.svg" alt="Instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="../assets/icons/vk.svg" alt="Instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="../assets/icons/twitter.svg" alt="Instagram">
                                </a>
                            </li>
                        </ul>
                        <div class="footer__bottom-use">
                            <a href="#">Privacy Policy</a>
                            <a href="#">Terms of Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <script src='https://code.jquery.com/jquery-3.6.0.min.js' defer></script>
    <script src="../js/hidden_text.js" defer></script>
    <script src="../js/burger_menu.js" defer></script>
    <script src="../js/search.js" defer></script>

</body>

</html>