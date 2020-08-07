<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
                     integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
                     crossorigin="anonymous"/>

<?php wp_head() ?>

    </head>
    <body>
        <section class="shapka">
            <header>
                <div class="container">
                    <nav>
                        <div class="nav__logo">
                            <a href="#">immenu.com</a>
                        </div>
                        <div class="nav__items">
                            <div class="nav__search">
                                <a href="#"><i class="fas fa-search"></i></a>
                                <input type="text" placeholder="Поиск заведений и блюд">
                            </div>
                            <select name="" id="" class=" nav__select nav__select_one">
                                <option value="Русский">Русский</option>
                                <option value="Английский">Английский</option>
                                <option value="Немецкий">Немецкий</option>
                            </select>
                            <select name="" id="" class=" nav__select nav__select_two">
                                <option value="Казань">Казань</option>
                                <option value="Москва">Москва</option>
                                <option value="Санкт-Петербург">Санкт-Петербург</option>
                            </select>
                        </div>
                        <div class="nav__usericon">
                            <i class="far fa-user"></i>
                        </div>
                    </nav>
                </div>
            </header>
        </section>
        <hr color="#f2f2f2">
        <!-- Блок с формой для поиска  -->
        <section>
            <div class="container">
                <div class="image-block">
                    <h1 class="image-bloclk___title">Discover great places to eat around you in Kazan</h1>
                    <div class="nav__search nav__search_1">
                        <a href="#"><i class="fas fa-search"></i></a>
                        <input type="text" placeholder="Поиск заведений и блюд">
                    </div>
                </div>
            </div>
        </section>

        <hr color="#f2f2f2" size='3px'>

        <!-- Секция выбора -->
        <section>
            <div class="shadow-block">
                <div class="container">
                    <div class="button-block">
                        <p class="select-button active">Все</p>
                        <p class="select-button">Кофейни</p>
                        <p class="select-button">Кафе</p>
                        <p class="select-button">Бары</p>
                        <p class="select-button">Рестораны</p>
                        <p class="select-button">Русская</p>
                        <p class="select-button">Татарская</p>
                        <p class="select-button">Десерты</p>
                        <p class="select-button">Завтраки</p>

                        <select name="" id="" class="button-block__select">
                            <option value="Еще">Еще</option>
                            <option value="Не каши">Не каши</option>
                            <option value="Крекеры">Крекеры</option>
                            <option value="К пиву">К пиву</option>
                        </select>
                        <!-- Ниже это блок который появляется при нажати  на  "Еще" но я не доделал -->
                        <div  id="frost" class="block"></div>
                    </div>
                </div>
        </div>
        </section>
        @include('partials.content')
           <footer>
                    <div class="container">
                        <div class="footer-first">
                            <div class="footer-logo">
                                <a href="#">immenu.com</a>
                            </div>
                            <div class="footer-social">
                                <span><a href="#"><i class="fab fa-instagram"></i></a></span>
                                <span><a href="#"><i class="fab fa-vk"></i></a></span>
                                <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                            </div>
                        </div>
                        <div class="footer__buttonblock">
                            <a href="#">Добавить заведение</a>
                            <a href="#">О проекте</a>
                            <a href="#">Блог</a>
                            <a href="#">Политика конфинденциальности </a>
                            <a href="#">Контакты</a>
                        </div>
                        <div class="footer-list">
                            <div class="footer-list__elem">
                                <h3>Категории заведений</h3>
                                <div class="footer-list__elem_m">
                                    <span>
                                        <p>Рестораны</p>
                                        <p>Кафе</p>
                                        <p>Бары</p>
                                        <p>Кальянные</p>
                                        <p>Суши бары</p>
                                    </span>

                                    <span>
                                        <p>Рестораны</p>
                                        <p>Кафе</p>
                                        <p>Бары</p>
                                        <p>Кальянные</p>
                                        <p>Суши бары</p>
                                    </span>
                                </div>
                            </div>

                            <div class="footer-list__elem">
                                <h3>Виды кухонь</h3>
                                <div class="footer-list__elem_m">
                                    <span>
                                        <p>Рестораны</p>
                                        <p>Кафе</p>
                                        <p>Бары</p>
                                        <p>Кальянные</p>
                                        <p>Суши бары</p>
                                    </span>

                                    <span>
                                        <p>Рестораны</p>
                                        <p>Кафе</p>
                                        <p>Бары</p>
                                        <p>Кальянные</p>
                                        <p>Суши бары</p>
                                    </span>
                                </div>
                            </div>

                            <div class="footer-list__elem">
                                <h3>Виды услуг</h3>
                                <div class="footer-list__elem_m">
                                    <span>
                                        <p>Рестораны</p>
                                        <p>Кафе</p>
                                        <p>Бары</p>
                                        <p>Кальянные</p>
                                        <p>Суши бары</p>
                                    </span>

                                    <span>
                                        <p>Рестораны</p>
                                        <p>Кафе</p>
                                        <p>Бары</p>
                                        <p>Кальянные</p>
                                        <p>Суши бары</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="footer-application">
                            <p class="footer-application__title">Наши приложения</h2>
                            <div class="footer-application__block ">
                                <div class="appstore">
                                    <img src="./appstore.png" alt="">
                                </div>
                                <div class="googleplay">
                                    <img src="./googleplay.png" alt="">
                                </div>
                                <p footer-application__text>Copyright,2018</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </footer>
                <script
                src="https://code.jquery.com/jquery-3.5.1.slim.js"
                integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM="
                crossorigin="anonymous"></script>
                <script src="script.js"></script>
    </body>
</html>
