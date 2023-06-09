<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Стоматология А - Главная</title>
    <link rel="stylesheet" href="css\style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Подключение библиотеки inputmask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js"></script>
    
</head>
<body>
    <header>
        <div class="header__top">
                <div class="wrap-logo">
                    <a class="logo" href="#">
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
                        <li><a href="#">О клинике</a></li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Цены</a></li>
                        <li><a href="#">Специалисты</a></li>
                        <li><a href="contacts.php">Контакты</a></li>
                    </ul>
                </nav>
        </div>
    </header>

<main>
    <!-- Основной блок слайдера -->
    <div class="slider">
    
        <!-- Первый слайд -->
        <div class="item">
            <a class="zapis__a" href="#"><img src="img\Slider-img1.png"></a>
        </div>
    
        <!-- Второй слайд -->
        <div class="item">
            <a class="zapis__a" href="#"><img src="img\Slider-img2.png"></a>
        </div>
    
        <!-- Третий слайд -->
        <div class="item">
            <a class="zapis__a" href="#"><img src="img\Slider-img3.png"></a>
        </div>
    
        <!-- Кнопки-стрелочки -->
        <a class="previous" onclick="previousSlide()"><img src="svg/arrow.svg" width="32" height="24" alt="Previous slide"></a>
        <a class="next" onclick="nextSlide()"><img class="right-arrow" src="svg/arrow.svg" width="32" height="24" alt="Next slide"></a>
    </div>

    <article class="heading">
        <h1>Стоматологическая клиника «Стоматология А»</h1> <hr>
    </article>
    
    <section class="agitation">
        <div class="agitation__left">
            <div class="agitation__top-left">
                <span class="subheading">Клиника, где здоровье зубов – это сокровище,<br>
                    а цены – это ключ к нему!</span>
                <div class="img-btn">
                    <img src="svg/fluent-mdl2_double-down-arrow.svg" alt="">
                    <button class="zapis zapis--primary">Записаться на приём</button>
                </div>
            </div>

            <div>
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
        </div>

        <div class="doctor__container">
            <img class="doctor" src="img/doctor1_crop.png" alt="Доктор">
        </div>
    </section>

    <article class="heading">
        <h1>Услуги</h1> <hr>
    </article>

    <section class="services">
        
    </section>

    <div class="modal">
        <div class="modal-content">
        <button class="close-btn">&times;</button>
        <h2>Запись на приём</h2>
        <p>Пожалуйста, укажите Ваш номер телефона и мы обязательно свяжемся с Вами</p>
        <form>
            <input type="text" id="name-input" name="name" placeholder="Ваше имя (не обязательно)" autocomplete="text" maxlength="50">
            <input type="tel" id="phone-input" name="phone" placeholder="Номер телефона" autocomplete="tel" maxlength="11" required>
            <button type="submit" class="booking-btn" disabled>Отправить</button>
        </form>
        <p>Нажимая на кнопку вы подтверждаете, что прочитали <br> и соглашаетесь с  <a href="private_police.pdf" target="_blank">политикой обработки</a> персональных данных.</p>
        </div>
    </div>


</main>


<footer>
    <div class="footer__left">
        <a href="">© 2023 ООО «Стоматология А»</a><br><br>
        <a href="private_police.pdf">Политика конфиденциальности</a><br><br>
        <a href="">Лицензия на осуществление мед. деятельности № Л041-01050-61/00629920 от 30.11.2022</a>
    </div>

    <div class="footer__right">
        <a class="logo" href="#">
            <img src="svg/white_logo.svg" width="40px" height="40px" alt="Стоматология А">
        </a>
    </div>
</footer>

<script src="js/slider.js"></script>
<script src="js/modal.js"></script>
</body>
</html>