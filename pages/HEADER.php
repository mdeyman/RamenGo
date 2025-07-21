<header class="header ">
    <div class="container">
        <nav class="header__nav">
            <ul class="header__nav-list">
                <li>
                    <div class="menu__burger">
                        <div class="menu-burger__header">
                            <span></span>
                        </div>
                    </div>
                    <nav class="header__nav-mob">
                        <div class="header__menu-container">
                            <ul class="menu header__menu">

                                <?php if (!$USER) : ?>
                                    <li class="header__menu-li"><a href="../pages/login.php" class="menu__item">Login</a>
                                    </li>
                                <?php else : ?>
                                    <li class="header__menu-li"><a href="../pages/account.php" class="menu__item">Account</a>
                                    </li>
                                <?php endif; ?>
                                <li class="header__menu-li"><a href="../pages/control.php" class="menu__item">Control Panel</a>
                                </li>

                                <li class="header__menu-li"><a href="../pages/index.php" class="menu__item">Menu</a>
                                </li>
                                <li class="header__menu-li"><a href="../pages/about_us.php" class="menu__item">About
                                        Us</a>
                                </li>
                                <li class="header__menu-li"><a href="../pages/promotions.php" class="menu__item">Promotions
                                        & Special Offers</a></li>
                                <li class="header__menu-li"><a href="../pages/news.php" class="menu__item">News</a>
                                </li>
                                <li class="header__menu-li"><a href="../pages/contact.php" class="menu__item">Contacts</a>

                                    <?php if ($USER) : ?>
                                <li class="header__menu-li"><a href="../php/logout.php" class="menu__item">Exit</a>
                                </li>
                            <?php endif; ?>

                            </ul>
                        </div>
                    </nav>
                </li>
                <li>
                    <div class="search">
                        <img src="../assets/icons/search.svg" alt="Menu">
                    </div>
                </li>
                <li>
                    <a href="cart.php">
                        <img src="../assets/icons/shopping_bag.svg" alt="Menu" class="shopping_bag-icon">
                    </a>
                </li>
            </ul>
            <div class="header__logo">
                <a href="./index.php">
                    <img src="../assets/icons/logo.svg" alt="Logo">
                </a>
            </div>
            <ul class="header__social-list">
                <li>
                    <a href="control.html">
                        <img src="../assets/icons/instagram.svg" alt="Instagram">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../assets/icons/vk.svg" alt="Vkontakte">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../assets/icons/twitter.svg" alt="Twitter">
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<div class="search__main hidden">
    <form action="./found.php" class="search__form">
        <input type="text" name="value" placeholder="Search dishes..." class="search__input">
        <button type="button" class="search__form-btn">Close</button>
    </form>
</div>