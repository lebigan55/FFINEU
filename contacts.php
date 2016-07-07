<?php 
include_once "header.php";
?>

<header class="contacts main-header">
    <div class="container clearfix">
        <div class="window">
            <div class="header">
                <div class="burger-container">
                    <div id="burger">
                        <div class="bar topBar"></div>
                        <div class="bar btmBar"></div>
                    </div>
                </div>                
                <div class="icon icon-apple"></div>
                <ul class="menu">
                    <li class="menu-item"><a href="http://freedom.goldpromo.com/">Главная</a></li>
                    <li class="menu-item"><a href="http://freedom.goldpromo.com/about.php">О компании</a></li>
                    <li class="menu-item"><a href="http://freedom.goldpromo.com/services.php">Услуги</a></li>
                    <li class="menu-item"><a href="http://freedom.goldpromo.com/become-customer.php">Стать клиентом</a></li>
                    <li class="menu-item"><a href="http://freedom.goldpromo.com/regulation.php">Регулирование</a></li>
                    <li class="menu-item"><a href="http://freedom.goldpromo.com/contacts.php">Контакты</a></li>                       
                </ul>
                <div class="shop icon icon-bag"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="logo-top">
                    <a href="http://freedom.goldpromo.com/"><img src="images/logo-top.png" alt="logo"></a>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-5">
                <div class="contact-top">
                    <ul>
                        <li>
                            <p>Звоните нам —</p>
                        </li>
                        <li>
                            <a href="tel:88005002020">8 800 500 20 20</a>
                            <span>Мы ответим на все вопросы</span>
                        </li>
                    </ul>                     
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="general-header-wrap become-wrap">
                    <nav class="top-nav desktop-nav general-header-nav">
                        <ul class="top-nav__list general-header__nav-list">
                            <li><a href="http://freedom.goldpromo.com/">Главная</a></li>
                            <li><a href="http://freedom.goldpromo.com/about.php">О компании</a></li>
                            <li><a href="http://freedom.goldpromo.com/services.php">Услуги</a></li>
                            <li><a href="http://freedom.goldpromo.com/become-customer.php">Стать клиентом</a></li>
                            <li><a href="http://freedom.goldpromo.com/regulation.php">Регулирование</a></li>
                            <li><a href="http://freedom.goldpromo.com/contacts.php" class="active">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="head contacts-head">
                    <h2 class="main-headline-white">Наши контакты</h2>
                    <div class="cotacts-content">
                        <p><span>FFINEU Investments Limited</span></p>
                        <p>Aglantzias, 15, 1st floor, Office 101</p>
                        <p>Aglantzia, 2108, Nicosia, Cyprus</p>
                        <div class="contacts-content-item contacts-content-phone">
                            <p>Telephone:</p>
                            <a href="tel:35722282929">+357 22282929</a>
                        </div>
                        <div class="contacts-content-item contacts-content-email">
                            <p>Email:</p>
                            <a href="mailto:info@ffineu.eu">info@ffineu.eu</a>
                        </div>
                    </div>                       
                </div>
            </div>
        </div>
    </div>    
</header>

<div class="map">        
    <div class="map-wrap">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=pd5AaZSSpVlXYr4xRayp0xImM7nUTly8&width=100%&height=720&lang=ru_RU&sourceType=constructor&scroll=true"></script>
        <div class="overlay-map"></div>
    </div>
</div>

<?php include_once "footer.php"; ?>