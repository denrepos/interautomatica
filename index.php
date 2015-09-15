<!DOCTYPE html>
<html>
<head>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/header-media.css">
    <link rel="stylesheet" href="css/modal-windows.css">
    <link rel="stylesheet" href="css/general.css">

    <script type="text/javascript" src="js/jquery/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/common.js"></script>
</head>
<body class="event">
    <div class="container-fluid header-wrap">

        <header>

            <div class="row">
                <div class="col-md-4 left-item">
                    <img class="main-logo" src="images/main_logo.png" alt="Логотип"/>
                    <div class="main-description">ПРОИЗВОДСТВО И ПРОДАЖА КОМПОНЕНТОВ&nbspПРОМЫШЛЕННОЙ АВТОМАТИКИ</div>
                    <div class="catalog-menu pointer">
                        <span>КАТАЛОГ ПРОДУКЦИИ</span>
                        <div class="catalog-menu-point">&#x2228;</div>
                    </div>
                </div>
                <div class="language-switch-box event">
                    <div class="current-language pointer">
                        <div class="flag-image ru"></div>
                        <div class="title-lang">RU</div>
                        <div class="triangle-lang"></div>
                    </div>
                    <div class="language-switch-hidden pointer popup event" style="display: none">
                        <a class="current-language">
                            <div class="flag-image ru"></div>
                            <div class="title-lang">Русский</div>
                        </a>
                        <a class="current-language pointer">
                            <div class="flag-image ua"></div>
                            <div class="title-lang">Українська</div>
                        </a>
                        <a class="current-language pointer">
                            <div class="flag-image en"></div>
                            <div class="title-lang">English</div>
                        </a>
                    </div>
                </div>
                <nav class="main-menu">
                    <button id="main-menu-button">
                        <div></div>
                        <div></div>
                        <div></div>
                    </button>
                    <ul class="main-menu-items">
                        <li><a>Наша компания</a></li>
                        <li><a>Партнеры</a></li>
                        <li><a>Контакты</a></li>
                        <li><a>Техподдержка</a></li>
                    </ul>
                </nav>
                <div class="header-search">
                    <input type="text" name="header-search" value="1123123 товаров в наличии"/>
                    <button></button>
                </div>
                <div class="delivery-cart-wrap">
                    <span>Доставка по всей Украине из Днепропетровска</span>
                    <div class="header-cart"><div class="cart-image-wrap"><div class="cart-image"></div></div><span class="dotted light-blue-text">Корзина (3)</span></div>
                </div>
                <div class="contacts-header">
                    <span class="bold">Не дозвонились?</span><span class="light-blue-text float-right dotted pointer" onclick="$('#callback-modal').modal('show');">Заказать звонок</span>
                    <br /><span>Факс: </span><span class="float-right phone-header">+38 (056) 744 97 31</span>
                    <br /><span>Тел.: </span><span class="float-right phone-header-double"><span>+38 (056) 744 97 31</span><br><span>+38 (056) 744 97 31</span></span>
                    <br /><span>E-mail: </span><a class="light-blue-text float-right underline" href="mailto:info@interautomatic.com.ua">info@interautomatic.com.ua</a>
                    <br /><span>Офис: г.Днепропетровск</span><span class="float-right dotted light-blue-text pointer" onclick="$('#road-map-modal').modal('show')">Карта</span>
                    <span class="light-blue-text bold pointer event" id="more-contacts" data-hide-show="class-additional-contacts">+ Ещё контакты</span>
                </div>
                <div class="additional-contacts display-none popup">
                    <span>Viber</span><span class="float-right bold">viber.interautomatic</span>
                    <br>
                    <span>Watsapp</span><span class="float-right bold">watsapp.interautomatic</span>
                </div>

            </div>

        </header>

    </div>

    <div class="absolute-elements">
        <div id="callback-modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Заголовок модального окна -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">ОБРАТНЫЙ ЗВОНОК</h4>
                    </div>
                    <!-- Основной текст сообщения -->
                    <div class="modal-body">
                        <form action="callback.php">
                            * <input type="text" name="name" value="Контактное лицо"/>
                            <br/>
                            * <input type="text" name="phone" value="38 (050) 123-12-12"/>
                        </form>
                        <button class="cancel" data-dismiss="modal">Отмена</button>
                        <button class="send" >Отправить</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="road-map-modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Заголовок модального окна -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">КАРТА ПРОЕЗДА</h4>
                        <h4 class="modal-title">Офис - склад: г.Днепропетровск, ул. Паникахи, д. 2</h4>
                    </div>
                    <!-- Основной текст сообщения -->
                    <div class="modal-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2648.6932349875924!2d35.037859!3d48.40483400000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbfb5c5770accd%3A0x6d231d507d7176f0!2z0LLRg9C7LiDQn9Cw0L3RltC60LDRhdC4LCAyLCDQlNC90ZbQv9GA0L7Qv9C10YLRgNC-0LLRgdGM0LosINCU0L3RltC_0YDQvtC_0LXRgtGA0L7QstGB0YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1sru!2sua!4v1442310180410" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="opacity display-none"></div>
    </div>
</body>
</html>