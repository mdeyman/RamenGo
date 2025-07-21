<?php
require_once('../php/Server.php');
$query = $pdo->prepare("SELECT * FROM `category` ");
$query->execute();
$sections = $query->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['value'])) {
} else {
    redir('./index.php');
} 
if (trim($_GET['value'] != '' )){
    $string = '%' . $_GET['value'] . '%';

    $query = $pdo->prepare("SELECT * FROM `dishes` where name like ? ");
    $query->execute(array($string));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    $result = [];
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
</head>

<body>
    <?php
    require('./HEADER.php');
    ?>

    <main>
        <section class="sec__menu">
            <div class="container">
                <div class="menu__description" style="padding-top: 100px">
                    <h1>Search result : "<?= $_GET['value']; ?>"</h1>
                </div>

                <ul class="menu__product-list">

                    <?php foreach ($result as $product) : ?>
                        <a>
                            <li class="menu__product-card">
                                <img src="../assets/product_images/<?= $product['Dishes_img'] ?>" alt="Roll-Dragon" class="menu__product-pic">
                                <div class="menu__product-description">
                                    <div class="menu__product-wrap">
                                        <h2><?= $product['Name'] ?></h2>
                                        <img src="../assets/icons/info.svg" alt="Information">
                                    </div>
                                    <p><?= $product['Description'] ?>
                                    </p>
                                </div>
                                <hr noshade="">
                                <div class="menu__product-footer">
                                    <p><?= $product['Price'] ?>$</p>
                                    <button value="<?= $product['ID_Dishes']; ?>" class="add__card-btn">
                                        Add to cart
                                    </button>
                                </div>
                            </li>
                        </a>
                    <?php endforeach; ?>


                </ul>
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

    <script>
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('add__card-btn')) {
                location.replace(`../php/addToCart.php?id=${e.target.value}`);
            }
        })
    </script>
    
    <script src='https://code.jquery.com/jquery-3.6.0.min.js' defer></script>
    <script src="../js/hidden_text.js" defer></script>
    <script src="../js/burger_menu.js" defer></script>
    <script src="../js/search.js" defer></script>

</body>

</html>