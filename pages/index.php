<?php
    require_once('../php/Server.php');
    $query = $pdo->prepare("SELECT * FROM `category` ");
    $query->execute();
    $sections = $query->fetchAll(PDO::FETCH_ASSOC);
  
    if (isset($_GET['category'])){
        $query = $pdo->prepare("SELECT * FROM `dishes` WHERE ID_Category=? ");
        $query->execute(array(
            $_GET['category']
        ));
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
    } else{
        $query = $pdo->prepare("SELECT * FROM `dishes` ");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
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
        <section class="intro">
            <div class="container">
                <div class="intro__content">
                    <div class="intro__description">
                        <h1><strong>Japanese </strong>Food Restaurant</h1>
                        <button class="intro__address-btn">
                            <img src="../assets/icons/map_label.svg" alt="Map label" class="map__label-icon">
                            Enter your address
                        </button>
                    </div>
                    <a href="promotions.php">
                        <div class="intro__bestseller">
                            <img src="../assets/img/bestseller.png" alt="Bestseller">
                            <div class="intro__bestseller-description">
                                <p>Deal of the week - <b>2 in 1</b></p>
                                <button class="bestseller__line">-------></button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="sec__menu">
            <div class="container">
                <div class="menu__description">
                    <h1>Menu</h1>
                </div>
                <div class="menu__categories">
                    <div class="menu__categories-filter">
                        <img src="../assets/icons/filter.svg" alt="Filter">
                        <p>Filter</p>
                    </div>
                    <ul class="menu__categories-list">
                        <?php foreach($sections as $section) :?>
                            <li>
                                <a href="./index.php?category=<?= $section['ID_Category'] ;?>" 
                                class="menu__categories-btn <?= $section['ID_Category'] == $_GET['category'] ? 'menu__categories-btn_active' : '';?>">
                                    <?= $section['Name'] ;?>
                                </a>
                             </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <ul class="menu__product-list">

                    <?php foreach($result as $product) :?>
                        <a >
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
                                <button value="<?=$product['ID_Dishes'];?>" class="add__card-btn">
                                    Add to cart
                                </button>
                            </div>
                        </li>
                    </a>
                    <?php endforeach; ?>
                 
                    <!-- <a href="#">
                        <li>
                            <img src="../assets/img/philadelphia_light.png" alt="Philadelphia Light"
                                class="menu__product-pic">
                            <div class="menu__product-description">
                                <div class="menu__product-wrap">
                                    <h2>Philadelphia Light</h2>
                                    <img src="/assets/icons/info.svg" alt="Information">
                                </div>
                                <p>Cream cheese, perch, chuka, Japanese omelet "Tomago", nut sauce, sesame</p>
                            </div>
                            <hr noshade="">
                            <div class="menu__product-footer">
                                <p>9,99$</p>
                                <button class="add__card-btn">
                                    Add to cart
                                </button>
                            </div>
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <img src="/assets/img/prime_light.png" alt="Prime Light" class="menu__product-pic">
                            <div class="menu__product-description">
                                <div class="menu__product-wrap">
                                    <h2>Prime Light</h2>
                                    <img src="/assets/icons/info.svg" alt="Information">
                                </div>
                                <p>Salmon, tuna, crab mix, cream cheese, cucumber, avocado, Unagi sauce, sesame,
                                    toaster
                                    che</p>
                            </div>
                            <hr noshade="">
                            <div class="menu__product-footer">
                                <p>9,99$</p>
                                <button class="add__card-btn">
                                    Add to cart
                                </button>
                            </div>
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <img src="/assets/img/arigato.png" alt="Arigato" class="menu__product-pic">
                            <div class="menu__product-description">
                                <div class="menu__product-wrap">
                                    <h2>Arigato</h2>
                                    <img src="/assets/icons/info.svg" alt="Information">
                                </div>
                                <p>Tiger shrimp, cream cheese, cucumber, salmon, tuna, Unagi sauce, sesame</p>
                            </div>
                            <hr noshade="">
                            <div class="menu__product-footer">
                                <p>9,99$</p>
                                <button class="add__card-btn">
                                    Add to cart
                                </button>
                            </div>
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <img src="/assets/img/kogase.png" alt="Kogase" class="menu__product-pic">
                            <div class="menu__product-description">
                                <div class="menu__product-wrap">
                                    <h2>Kogase</h2>
                                    <img src="/assets/icons/info.svg" alt="Information">
                                </div>
                                <p>Eel, Japanese omelet "Tamago", cream cheese, chuka, white sesame, Unagi sauce
                                </p>
                            </div>
                            <hr noshade="">
                            <div class="menu__product-footer">
                                <p>8,99$</p>
                                <button class="add__card-btn">
                                    Add to cart
                                </button>
                            </div>
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <img src="/assets/img/cheddar.png" alt="Cheddar" class="menu__product-pic">
                            <div class="menu__product-description">
                                <div class="menu__product-wrap">
                                    <h2>Cheddar</h2>
                                    <img src="/assets/icons/info.svg" alt="Information">
                                </div>
                                <p>Cream cheese, perch, chuka, Japanese omelet "Tomago", nut sauce, sesame</p>
                            </div>
                            <hr noshade="">
                            <div class="menu__product-footer">
                                <p>8,99$</p>
                                <button class="add__card-btn">
                                    Add to cart
                                </button>
                            </div>
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <img src="/assets/img/california_light.png" alt="California Light"
                                class="menu__product-pic">
                            <div class="menu__product-description">
                                <div class="menu__product-wrap">
                                    <h2>California Light</h2>
                                    <img src="/assets/icons/info.svg" alt="Information">
                                </div>
                                <p>Salmon, tuna, crab mix, cream cheese, cucumber, avocado, Unagi sauce, sesame,
                                    toaster
                                    che</p>
                            </div>
                            <hr noshade="">
                            <div class="menu__product-footer">
                                <p>8,99$</p>
                                <button class="add__card-btn">
                                    Add to cart
                                </button>
                            </div>
                        </li>
                    </a> -->
                </ul>
            </div>
        </section>
        <section class="sec__latest-news">
            <div class="container">
                <div class="latest__news-description">
                    <h1>Latest News</h1>
                </div>
                <ul class="latest__news-list">
                    <a href="#">
                        <li>
                            <img src="../assets/img/parties_in_the_yershe.png" alt="Parties in the Yershe">
                            <div class="latest__news_list-description">
                                <div class="latest__news_list-wrap">
                                    <p>01.06.2022</p>
                                    <h2 class="news__truncate-text">Parties in the "Yershe"</h2>
                                </div>
                                <button class="read__btn">
                                    Read
                                </button>
                            </div>
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <img src="../assets/img/permanent_promotions.png" alt="Parties in the Yershe">
                            <div class="latest__news_list-description">
                                <div class="latest__news_list-wrap">
                                    <p>30.05.2022</p>
                                    <h2 class="news__truncate-text">Permanent promotions and</h2>
                                </div>
                                <button class="read__btn">
                                    Read
                                </button>
                            </div>
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <img src="../assets/img/parties_moscow.png" alt="Parties in the Yershe">
                            <div class="latest__news_list-description">
                                <div class="latest__news_list-wrap">
                                    <p>30.05.2022</p>
                                    <h2 class="news__truncate-text">Parties in the "Yershe"</h2>
                                </div>
                                <button class="read__btn">
                                    Read
                                </button>
                            </div>
                        </li>
                    </a>
                   
                </ul>
            </div>
        </section>
        <section class="sec__download">
            <div class="container">
                <div class="download__wrap">
                    <div class="download__desciption">
                        <h1>Download Our App</h1>
                        <p>
                            Download our app to your phone and get a promo
                            code hova lorem ipsum dollar!
                        </p>
                        <div class="download__on">
                            <div class="download__on-wrap">
                                <a href="#">
                                    <img src="../assets/img/google_play.png" alt="Get It On Google Play">
                                </a>
                                <a href="#">
                                    <img src="../assets/img/app_store.png" alt="Download On The App Store">
                                </a>
                            </div>
                            <img src="../assets/img/qr_code.png" alt="QR Code">
                        </div>
                    </div>
                    <div class="download__mobile-app">
                        <img src="../assets/img/our_app.png" alt="Our App">
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

    <script>
        document.addEventListener('click', (e) =>{
            if (e.target.classList.contains('add__card-btn')){
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