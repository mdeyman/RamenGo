<?php

require_once('../php/Server.php');

if (!$USER) {
    redir('./login.php');
}

$query = $pdo->prepare(
    "SELECT * FROM shopping_cart
        JOIN dishes on dishes.ID_Dishes=shopping_cart.ID_Dishes
        WHERE ID_Users=?"
);
$query->execute(array($USER['ID_Users']));
$result = $query->fetchAll(PDO::FETCH_ASSOC);



$total = 0;

foreach ($result as $item) {
    $total += (int)$item['Count'] * (int)$item['Price'];
}



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
    <link rel="stylesheet" href="../css/cart_count.css">
</head>

<body>
    <?php
    require('./HEADER.php');
    ?>

    <main>
        <section class="sec__cart">
            <div class="container">
                <h1>Cart</h1>
                <div class="sec__cart-wrap">

                    <?php if (!count($result)) : ?>
                        <h2>Cart is empty</h2>
                    <?php endif; ?>

                    <ul class="card__product-list">
                        <?php foreach ($result as $cartItem) : ?>
                            <li class="cart__product-item">
                                <img src="../assets/product_Images/<?= $cartItem['Dishes_img']; ?>" alt="california_light" class="card__product-img">
                                <div class="cart__product-description">
                                    <h2><?= $cartItem['Name']; ?></h2>
                                    <p>
                                        <?= $cartItem['Description']; ?>
                                    </p>
                                    <div class="cart__count-price">
                                        <div class="quantity__price">
                                            <p> <?= $cartItem['Price']; ?> $</p>
                                        </div>
                                        <form action="../php/update_cart_count.php" class="quantity_inner">
                                            <button type="submit" class="bt_minus">
                                                <svg viewBox="0 0 24 24">
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                </svg>
                                            </button>
                                            <input type="hidden" name="dishes-id" value="<?= $cartItem['ID_Dishes']; ?>">
                                            <input name="count" type="number" value="<?= $cartItem['Count']; ?>" size="2" class="quantity" data-max-count="20" min="0" max="20" />
                                            <button type="submit" class="bt_plus">
                                                <svg viewBox="0 0 24 24">
                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <button class="bt_favorites">
                                    To Favorites
                                </button>
                                <a class="bt_delete" href="../php/deleteFromCart.php?id=<?= $cartItem['ID_Shopping_cart']; ?>">
                                    Delete
                                </a>
                            </li>

                        <?php endforeach; ?>

                    </ul>
                    <div class="cart__order">
                        <div class="cart__order-description">
                            <p class="cart__order-total">
                                <span>Total</span>
                                <span><?= $total; ?> $</span>
                            </p>
                            <p class="cart__order-delivery">
                                <span>Delivery: </span>
                                <span class="cart__choose-delivery">Choose delivery address</span>
                            </p>

                            <form action="../php/createOrder.php" class="hide" id="form" action="" style="margin-bottom: 30px; ">
                                <input id="input" name="address" type="text" placeholder="Adress">
                            </form>
                            <button class="cart__order-btn">
                                Order
                            </button>
                            <div class="cart__order-access">
                                <p>I agree with the terms of the Rules for using the trading platform and the return policy</p>
                            </div>
                        </div>
                    </div>
                </div>
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

    <style>
        .hide {
            display: none;
        }
    </style>

    <script src='https://code.jquery.com/jquery-3.6.0.min.js' defer></script>
    <script src="../js/hidden_text.js" defer></script>
    <script src="../js/burger_menu.js" defer></script>
    <script src="../js/search.js" defer></script>

    <script>

        Number.prototype.clamp = function(min, max) {
        return Math.min(Math.max(this, min), max);
        };

        document.querySelector('.cart__choose-delivery').onclick = () => [
            document.querySelector('#form').classList.toggle('hide')
        ]

        document.querySelector('.cart__order-btn').onclick = (e) => {
            e.preventDefault()
            const address = document.querySelector('#input').value;

            console.log(address);

            if (address !== '') {
                document.querySelector('#form').submit()
                return
            }
            alert('Введите адрес')
        }

        document.querySelectorAll('.bt_plus').forEach(e => {
            e.onclick = (event) => {
                event.currentTarget.parentNode.querySelector('.quantity').value = 
                (Number(event.currentTarget.parentNode.querySelector('.quantity').value) + 1).clamp(1,20)
            }
        })

        document.querySelectorAll('.bt_minus').forEach(e => {
            e.onclick = (event) => {
                event.currentTarget.parentNode.querySelector('.quantity').value = 
                (Number(event.currentTarget.parentNode.querySelector('.quantity').value) - 1).clamp(1,20)
            }
        })
        
        const inputs = document.querySelectorAll('input[type=number]');
    Array.from(inputs).forEach(input => {
        const min = +input.min;
        const max = +input.max;

    input.addEventListener('input', (e) => {
        const value = +input.value;
        if (value > max) { input.value = max }
        else if (value < min) { input.value = min }
    }
    )});

    </script>

</body>

</html>