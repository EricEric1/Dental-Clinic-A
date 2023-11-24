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

    <title>Стоматология А - Главная</title>
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\map.css">

    <!-- Подключение шрифта Raleway -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Подключение шрифта Open Sans -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet"> -->

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
        <table>
            <thead>
                <tr >
                    <th>Наименование услуг</th>
                    <th>Цена, руб.</th>
                </tr>
            </thead>
            <tr>
                <th ><i>Терапевтические услуги</i></th>
            </tr>
            <tr class="str">
                <td>Консултация стоматолога-терапевта</td>
                <td>0</td>
            </tr>
            <tr class="str">
                <td>Лечение средненго кариеса (всё включено)</td>
                <td>3500</td>
            </tr>
            <tr class="str">
                <td>Лечение глубокого кариеса (всё включено)</td>
                <td>5500</td>
            </tr>
            <tr class="str">
                <td>Реставрация зуба</td>
                <td>4500</td>
            </tr>
            <tr class="str">
                <td>Лечение пульпита 1-канального (всё включено)</td>
                <td>7500</td>
            </tr>
            <tr class="str">
                <td>Лечение пульпита 2-канального (всё включено)</td>
                <td>8500</td>
            </tr>
            <tr class="str">
                <td>Лечение пульпита 3-канального (всё включено)</td>
                <td>9500</td>
            </tr>
            <tr class="str">
                <td>Полировка пломбы</td>
                <td>800</td>
            </tr>
            <tr class="str">
                <td>Фиксация анкерного штифта (титан)</td>
                <td>800</td>
            </tr>
            <tr class="str">
                <td>Фиксация стекловолоконного штифта</td>
                <td>1200</td>
            </tr>
            <tr class="str">
                <td>Распломбировка корневого канала</td>
                <td>1500</td>
            </tr>
            <tr class="str">
                <td>Удаление штифта</td>
                <td>900</td>
            </tr>
            <tr class="str">
                <td>Удаление зубного камня ультразвуком (2 челюсти)</td>
                <td>3500</td>
            </tr>
            <tr class="str">
                <td>Комплексная проф. гигиена с использованием метода Air Flow</td>
                <td>3500</td>
            </tr>
            <tr class="str">
                <td>Радиофизиографический снимок</td>
                <td>500</td>
            </tr>
            <tr>
                <th ><i>Ортопедические услуги</i></th>
            </tr>
            <tr class="str">
                <td>Консултация стоматолога-ортопеда</td>
                <td>0</td>
            </tr>
            <tr>
                <td><i><b>Съёмное протезирование:</b></i></td>
            </tr>
            <tr class="str">
                <td>Акриловый протез зубов</td>
                <td>20000</td>
            </tr>
            <tr class="str">
                <td>Зубной протез Vertex</td>
                <td>23000</td>
            </tr>
            <tr class="str">
                <td>Нейлоновые зубные протезы</td>
                <td>30000</td>
            </tr>
            <tr class="str">
                <td>Ацеталовый протез</td>
                <td>28000</td>
            </tr>
            <tr class="str">
                <td>Бюгельный протез с кламмерной фиксацией</td>
                <td>30000</td>
            </tr>
            <tr class="str">
                <td>Бюгельный протез на аттачменах</td>
                <td>35000</td>
            </tr>
            <tr>
                <td><i><b>Несъёмное протезирование</b></i></td>
            </tr>
            <tr class="str">
                <td>Цельнолитая коронка</td>
                <td>4500</td>
            </tr>
            <tr class="str">
                <td>Штампованные коронки</td>
                <td>4000</td>
            </tr>
            <tr class="str">
                <td>Металлокерамические коронки (Германия)</td>
                <td>8500</td>
            </tr>
            <tr class="str">
                <td>Металлокерамические коронки (Юж. Корея)</td>
                <td>6500</td>
            </tr>
            <tr class="str">
                <td>Металлокерамические коронки на импланте</td>
                <td>15000</td>
            </tr>
            <tr class="str">
                <td>Циркониевые коронки</td>
                <td>16000</td>
            </tr>
            <tr class="str">
                <td>Циркониевые импланты</td>
                <td>20000</td>
            </tr>
            <tr class="str">
                <td>Коронка из прессованной керамики</td>
                <td>14000</td>
            </tr>
            <tr class="str">
                <td>Виниры</td>
                <td>18000</td>
            </tr>
            <tr class="str">
                <td>Зубные вкладки</td>
                <td>2000</td>
            </tr>
        </table>
    </section>

    <section class="down-box">
        <section class="feedback">

            <span class="contact-us">Обратная связь</span>
            
            <p class="please">Пожалуйста, укажите Ваш номер телефона и мы обязательно свяжемся с Вами</p>

            <input class="feedback-input" type="text" placeholder="Ваше имя (не  обязательно)" maxlength="20">

            <input class="feedback-input" type="tel" placeholder="Номер телефона" maxlength="18" required>

            </br>

            <button class="booking-btn" type="submit">Отправить</button>

        </section>

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
        <a href="private_police.pdf">Политика конфиденциальности</a><br><br>
        <a href="">Лицензия на осуществление мед. деятельности № Л041-01050-61/00629920 от 30.11.2022</a>
    </div>

    <div class="footer__right">
        <a class="logo" href="index.php">
            <img src="svg/white_logo.svg" width="40px" height="40px" alt="Стоматология А">
        </a>
    </div>
</footer>

<script src="js/slider.js"></script>
<script src="js/modal.js"></script>
</body>
</html>