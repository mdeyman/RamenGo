<?php
    require_once('../php/Server.php');
    
    $query = $pdo->prepare("SELECT * from (SELECT MAX(ID_Order) AS MAXorder FROM `order` WHERE ID_Users =?) a
    JOIN `order` on `order`.ID_Order=MAXorder");
    $query->execute(array($USER['ID_Users']));
   
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

   
    if (!count($result)){
        header('Location: ./index.php');
    }
    $result = $result[0];

  

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
    <link rel="stylesheet" href="../css/account.css">
</head>

<body>
    <?php
    require('./HEADER.php');
    

    ?>

    <main>
        <section class="sec__account">
            <div class="container">
                <h1>Status Order</h1>
                <div class="account__order-status">
                    <div class="account__status-desciption">
                        <h2>Order <span>#<?= $result['MAXorder'];?></span></h2>
                        <!-- <p class="dishe__pcs">Philadelphia Light: <span>4 pcs</span></p> -->
                        <p class="delivery__date">Will be delivered: on <?= $result['order_date'];?></p>
                        <?php if( $result['ID_Personal'] == null) :?>
                            <p class="delivery__phone-number">Search deliverer...</p>
                        <?php else :?>
                            <p class="delivery__phone-number">Delivery phone number: <span>+7(905)222-33-11</span></p>
                        <?php endif; ?>
                      
                        <h3>Total: <span> <?= $result['totalPrice'];?>$</span></h3>
                    </div>
                    <form class="account__status-btns" action="../php/deleteOrder.php">
                        <button class="tracking__order-btn">
                            Tracking
                        </button>
                        <button name="order" value="<?= $result['MAXorder'];?>" class="cancel__order-btn">
                            Cancel
                        </button>
                    </form>
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