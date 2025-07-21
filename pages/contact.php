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
        <section class="sec__contact">
            <div class="container">
                <div class="contact__description">
                    <h1>Contact</h1>
                </div>
                <div class="contact__content">
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3A85010a3eccf9b748f72bea004fdb383149502af8bfe35c6bed319af23c642cfe&amp;source=constructor"
                        class="contact__content-map"></iframe>
                    <div class="contact__content-wrap">
                        <div class="contact__delivery">
                            <h2>Delivery</h2>
                            <p>
                                Dyelog is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard.
                                Dyelog is simply dummy text of the printing and typesetting industry. Lorem.
                            </p>
                        </div>
                        <div class="contact__feedback">
                            <h3>Feedback</h3>
                            <form id="contactform" action="../php/addFeed.php">
                                <input id="name" name="phone" placeholder="Your Number Phone" required="" tabindex="1"
                                    type="text">
                                <input id="email" name="name" placeholder="Your Name" required=""
                                    tabindex="2" type="text">
                                <input id="subject" name="title" placeholder="Subject message" required="" tabindex="2"
                                    type="text">
                                <textarea name="comment" id="comment" tabindex="4" placeholder="Desctiption"></textarea> <br>
                                <input name="submit" id="submit" tabindex="5" value="Send" type="submit">
                            </form>
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

    <script src='https://code.jquery.com/jquery-3.6.0.min.js' defer></script>
    <script src="../js/hidden_text.js" defer></script>
    <script src="../js/burger_menu.js" defer></script>
    <script src="../js/search.js" defer></script>
    
</body>

</html>