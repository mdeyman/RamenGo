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
        <section class="sec__news">
            <div class="container">
                <div class="news__description">
                    <h1>News</h1>
                </div>
                <div class="news__main">
                    <p>01.06.2022</p>
                    <div class="news__main-header">
                        <h2>Parties in the "Yershe"</h2>
                        <img src="../assets/img/share.svg" alt="Share">
                    </div>
                    <div class="news__main-content">
                        <img src="../assets/img/main_news.jpg" alt="Main News">
                        <p>
                            Dyelog is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown
                            printer took a galley of type and scrambled it to make a type specimen book. Dyelog is
                            simply
                            dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                            standard
                            dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                            it
                            to make a type specimen book. Lorem Ipsum has been the industry's standard dummy text ever
                            since
                            the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book.
                        </p>
                    </div>
                </div>
                <div class="news__another">
                    <h3>Another News</h3>
                    <ul class="news__another-list">
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
                                <img src="../assets/img/lol_1.jpg" alt="Parties in the Yershe">
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
                                <img src="../assets/img/parties_moscow.png" alt="Parties in the Yershe">
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
                                <img src="../assets/img/lol_2.jpg" alt="Parties in the Yershe">
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
                                <img src="../assets/img/lol_3.jpg" alt="Parties in the Yershe">
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
                    </ul>
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

    <script src='https://code.jquery.com/jquery-3.6.0.min.js' defer></script>
    <script src="../js/burger_menu.js" defer></script>
    <script src="../js/hidden_text.js" defer></script>
    <script src="../js/search.js" defer></script>

</body>

</html>