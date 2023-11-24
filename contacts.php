<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Вместо "device-width" написать значение -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#D9EFF2">

    <title>Контакты</title>
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\map.css">

    <!-- Подключение шрифта Raleway -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Подключение шрифта Open Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Подключение библиотеки JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Подключение библиотеки inputmask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js"></script>
</head>
<body>
    <header>
        <div class="header__top">
                <div class="wrap-logo">
                    <a class="logo" href="/index.php">
                        <img src="svg/white_logo.svg" width="40px" height="40px" alt="Стоматология А">
                    </a>
                </div>
                <div class="header-contact">
                    <a class="phone-number" href="tel:+79885880007">+7 (988) 588-00-07</a>
                    <button class="zapis">Записаться на приём</button>
                </div>
        </div>

        <div class="header__bottom">
                <nav>
                    <ul>
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="services.php">Услуги</a></li>
                        <li><a href="specialists.php">Специалисты</a></li>
                        <li><a href="contacts.php">Контакты</a></li>
                    </ul>
                </nav>
        </div>
    </header>

<main class="Site-content">
    <article class="heading">
        <h1>Контакты</h1> <hr>
    </article>
    
    <section class="agitation" style="height: 400px;">
        <div class="agitation__left">
            <span><img class="location" src="/svg/location.svg" alt="Местоположение">г. Батайск, ул. Московская 156 д.</span>
            <span><a class="phone-number" href="tel:+79885880007"><img class="phone" src="/svg/phone.svg" alt="Номер телефона">+7 (988) 588-00-07</a></span>
                <article class="working-time">
                    <table>
                        <thead>
                            <tr>
                                <td>График работы:</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10:00 - 20:00</td>
                              </tr>
                              <tr>
                                <td>Пн. - Субб.</td>
                              </tr>
                              <tr>
                                <td>Вс – выходной</td>
                              </tr>
                        </tbody>
                    </table>
                </article>
                <article class="adress">
                    <table>
                        <thead>
                            <tr>
                                <td>Адрес:</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>г. Батайск, ул. Московская 156 д.</td>
                              </tr>
                        </tbody>
                    </table>

                </article>
        </div>

        <div id="map" class="map">
            <iframe class="map__frame" src="https://yandex.ru/map-widget/v1/?um=constructor%3A755e293a634d0ca334fbcec6e82d65f8479088ad9b4980dc3ae93ca7fd688a37&amp;source=constructor" frameborder="0"></iframe>
        </div>
    </section>

    <div class="modal">
        <div class="modal-content">
        <button class="close-btn">&times;</button>
        <h2>Запись на приём</h2>
        <p>Пожалуйста, укажите Ваш номер телефона и мы обязательно свяжемся с Вами</p>
        <form>
            <input type="text" id="name-input" name="name" placeholder="Ваше имя (не обязательно)" autocomplete="text" maxlength="20">
            <input type="tel" id="phone-input" name="phone" placeholder="Номер телефона" autocomplete="tel" maxlength="18" required>
            <button type="submit" class="booking-btn">Отправить</button>
        </form>
        <p>Нажимая на кнопку вы подтверждаете, что прочитали <br> и соглашаетесь с  <a href="private_police.pdf" target="_blank">политикой обработки</a> персональных данных.</p>
        </div>
    </div>


</main>


<footer>
    <div class="footer__left">
        <a href="index.php">© 2023 ООО «Стоматология А»</a><br><br>
        <a href="private_police.pdf" target="_blank">Политика конфиденциальности</a><br><br>
        <a href="">Лицензия на осуществление мед. деятельности № Л041-01050-61/00629920 от 30.11.2022</a>
    </div>

    <div class="footer__right">
        <a class="logo" href="index.php">
            <img src="svg/white_logo.svg" width="40px" height="40px" alt="Стоматология А">
        </a>
    </div>
</footer>

<script src="js/modal.js"></script>
</body>
</html>