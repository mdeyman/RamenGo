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
        <section class="sec__about-us">
            <div class="container">
                <div class="about__us-wrap">
                    <div class="about__us-desciption">
                        <h1>About Us</h1>
                        <p>
                            Dyelog is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of.</p>
                    </div>
                    <ul class="about__advantages">
                        <li>
                            <img src="../assets/icons/birthday_party.svg" alt="Birthday party">
                            <h1>Birthday party</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
                            </p>
                        </li>
                        <li>
                            <img src="../assets/icons/events_party.svg" alt="Events party">
                            <h1>Events party</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
                            </p>
                        </li>
                        <li>
                            <img src="../assets/icons/private_dinning.svg" alt="Private dinning">
                            <h1>Private dinning</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
                            </p>
                        </li>
                        <li>
                            <img src="../assets/icons/charity_events.svg" alt="Charity events">
                            <h1>Charity events</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="faq">
                    <a class="faq-page">How do I register on the site?</a>
                    <div class="faq-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
                        </p>
                    </div>
                </div>
                <div class="faq">
                    <a class="faq-page">How to set up a personal account?</a>
                    <div class="faq-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
                        </p>
                    </div>
                </div>
                <div class="faq">
                    <a class="faq-page">How to use the product?</a>
                    <div class="faq-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
                        </p>
                    </div>
                </div>
                <div class="faq">
                    <a class="faq-page">How to place an order?</a>
                    <div class="faq-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
                        </p>
                    </div>
                </div>
                <div class="faq">
                    <a class="faq-page">What are the delivery options?</a>
                    <div class="faq-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
                        </p>
                    </div>
                </div>
                <div class="faq">
                    <a class="faq-page">How do I check the location of the parcel?</a>
                    <div class="faq-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
                        </p>
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

    <script src='https://code.jquery.com/jquery-3.6.0.min.js' defer></script>
    <script src="../js/hidden_text.js" defer></script>
    <script src="../js/faq.js" defer></script>
    <script src="../js/burger_menu.js" defer></script>
    <script src="../js/search.js" defer></script>

</body>

</html>