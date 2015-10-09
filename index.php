<!DOCTYPE html>
<html>
<head>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/aside.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/modal-windows.css">

    <link rel="stylesheet" href="css/general-media.css">
    <link rel="stylesheet" href="css/footer-media.css">
    <link rel="stylesheet" href="css/content-media.css">
    <link rel="stylesheet" href="css/aside-media.css">
    <link rel="stylesheet" href="css/header-media.css">

    <script type="text/javascript" src="js/jquery/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
    <script type="text/javascript" src="js/jquery.event.move.js"></script>
    <script type="text/javascript" src="js/jquery.event.swipe.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/common.js"></script>
</head>
<body>

    <div class="container-fluid header-wrap">

        <header>

            <div class="row">
                <div class="col-md-4 left-item">
                    <img class="main-logo" src="images/main_logo.png" alt="Логотип"/>
                    <h1 class="main-description">ПРОИЗВОДСТВО И ПРОДАЖА КОМПОНЕНТОВ&nbspПРОМЫШЛЕННОЙ АВТОМАТИКИ</h1>
                    <div class="catalog-menu pointer">
                        <span>КАТАЛОГ ПРОДУКЦИИ</span>
                        <div class="catalog-menu-point glyphicon glyphicon-menu-down"></div>
                    </div>
                </div>
                <div class="language-switch-box event">
                    <div class="current-language pointer">
                        <div class="flag-image ru"></div>
                        <div class="title-lang">RU</div>
                        <div class="triangle-lang"></div>
                    </div>
                    <div class="language-switch-hidden pointer popup" style="display: none">
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
                    <ul class="main-menu-items-for-button display-none">
                        <li><a href="#">Наша компания</a></li>
                        <li><a href="#">Партнеры</a></li>
                        <li><a href="#">Контакты</a></li>
                        <li><a href="#">Техподдержка</a></li>
                    </ul>
                    <ul class="main-menu-items">
                        <li><a href="#">Наша компания</a></li>
                        <li><a href="#">Партнеры</a></li>
                        <li><a href="#">Контакты</a></li>
                        <li><a href="#">Техподдержка</a></li>
                    </ul>
                </nav>
                <div class="header-search">
                    <input type="text" name="header-search" value="11231 товаров в наличии"/>
                    <button></button>
                </div>
                <div class="delivery-cart-wrap">
                    <span>Доставка по всей Украине из Днепропетровска</span>
                    <div class="header-cart"><div class="cart-image-wrap"><div class="cart-image"></div></div><a class="light-blue-text pointer">Корзина (3)</a></div>
                </div>
                <div class="contacts-header">
                    <div class="contacts-item-1">
                        <span class="bold">Не дозвонились?</span><a class="float-right pointer" onclick="$('#callback-modal').modal('show');">Заказать звонок</a>
                        <br /><span>Факс: </span><span class="float-right phone-header">+38 (056) 744 97 31</span>
                        <br /><span>Тел.: </span><span class="float-right phone-header-double"><span>+38 (056) 744 97 31</span><br><span>+38 (056) 744 97 31</span></span>
                        <br /><span>E-mail: </span><a class="light-blue-text float-right underline" href="mailto:info@interautomatic.com.ua">info@interautomatic.com.ua</a>
                    </div>
                    <div class="contacts-item-2">
                        <span>Офис: г.Днепропетровск</span><a class="float-right pointer" onclick="$('#road-map-modal').modal('show')">Карта</a>
                        <span class="light-blue-text bold pointer plus-before" id="more-contacts" data-hide-show="class-additional-contacts">Ещё контакты</span>
                        <div class="additional-contacts display-none popup">
                            <span>Viber</span><span class="float-right bold">viber.interautomatic</span>
                            <br>
                            <span>Watsapp</span><span class="float-right bold">watsapp.interautomatic</span>
                        </div>
                    </div>
                </div>

            </div>

        </header>

    </div>


    <div class="container-fluid middle-container-wrap">
        <div class="middle-container">

            <div class="content col-lg-16 col-lg-push-4">
                <div class="automation-components">
                    <h2 class="automation-components-title">Компоненты промышленной автоматики, гидравлики и электроники</h2>
                    <div class="slider-window-wrap">    
                        <div class="slider-window" data-scroll-step="1">
                            <div class="automation-components-previews slider-container">
                                <div class="general-preview start">
                                    <div class="preview-product-count">1394</div>
                                    <a href="#" class="img-wrap"><img src="images/auto.png" src="" alt=""/></a>
                                    <a class="link-as-text" href="#"><div class="preview-title">Автоматика</div></a>
                                </div>
                                <div class="general-preview">
                                    <div class="preview-product-count">2394</div>
                                    <a href="#" class="img-wrap"><img src="images/auto.png" src="" alt=""/></a>
                                    <a class="link-as-text" href="#"><div class="preview-title">Пенвматика и гидравлика</div></a>
                                </div>
                                <div class="general-preview">
                                    <div class="preview-product-count">3394</div>
                                    <a href="#" class="img-wrap"><img src="images/auto.png" src="" alt=""/></a>
                                    <a class="link-as-text" href="#"><div class="preview-title">Автоматика</div></a>
                                </div>
                                <div class="general-preview">
                                    <div class="preview-product-count">4394</div>
                                    <a href="#" class="img-wrap"><img src="images/auto.png" src="" alt=""/></a>
                                    <a class="link-as-text" href="#"><div class="preview-title">Автоматика</div></a>
                                </div>
                                <div class="general-preview">
                                    <div class="preview-product-count">5394</div>
                                    <a href="#" class="img-wrap"><img src="images/auto.png" src="" alt=""/></a>
                                    <a class="link-as-text" href="#"><div class="preview-title">Автоматика</div></a>
                                </div>
                            </div>
                        </div>

                        <div class="left-rewind-grey"></div>
                        <div class="left-rewind-blue"></div>
                        <div class="right-rewind-grey"></div>
                        <div class="right-rewind-blue"></div>

                    </div>    
                    <div class="block-under-previews">
                        <div class="right-under-previews">
                            <img src="images/social.png" alt=""/>
                            <span class="social-text">Поделиться информацией в соцсетях</span>
                        </div>
                        <ul>
                            <li>27 000 наименований товара</li>
                            <li>513 категорий ассортимента</li>
                            <li>Вся продукция напрямую от поставщика</li>
                        </ul>
                    </div>
                </div>

                <div class="popular-products">

                    <div class="previews-title">ПОПУЛЯРНОЕ ОБОРУДОВАНИЕ
                        <button class="upstairs-button">Наверх</button>
                    </div>
                    <div class="slider-window-wrap">

                        <div class="slider-window">
                            <div class="popular-previews slider-container">
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <div class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </div>
                                    <div class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </div>
                                    <div class="feedback-thumb">(2)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <div class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </div>
                                    <div class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </div>
                                    <div class="feedback-thumb">(3)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <div class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </div>
                                    <div class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </div>
                                    <div class="feedback-thumb">(4)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <div class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </div>
                                    <div class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </div>
                                    <div class="feedback-thumb">(5)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <div class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </div>
                                    <div class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </div>
                                    <div class="feedback-thumb">(6)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <div class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </div>
                                    <div class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </div>
                                    <div class="feedback-thumb">(7)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <div class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </div>
                                    <div class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </div>
                                    <div class="feedback-thumb">(8)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <div class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </div>
                                    <div class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </div>
                                    <div class="feedback-thumb">(9)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <div class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </div>
                                    <div class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </div>
                                    <div class="feedback-thumb">(10)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <div class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </div>
                                    <div class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </div>
                                    <div class="feedback-thumb">(11)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <div class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </div>
                                    <div class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </div>
                                    <div class="feedback-thumb">(12)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <div class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </div>
                                    <div class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </div>
                                    <div class="feedback-thumb">(13)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <div class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </div>
                                    <div class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </div>
                                    <div class="feedback-thumb">(14)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <div class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </div>
                                    <div class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </div>
                                    <div class="feedback-thumb">(15)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <div class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </div>
                                    <div class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </div>
                                    <div class="feedback-thumb">(16)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <div class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </div>
                                    <div class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </div>
                                    <div class="feedback-thumb">(17)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <div class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </div>
                                    <div class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </div>
                                    <div class="feedback-thumb">(18)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <div class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </div>
                                    <div class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </div>
                                    <div class="feedback-thumb">(19)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <div class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </div>
                                    <div class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </div>
                                    <div class="feedback-thumb">(20)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                            </div>
                        </div>

                        <div class="left-rewind-grey"></div>
                        <div class="left-rewind-blue"></div>
                        <div class="right-rewind-grey"></div>
                        <div class="right-rewind-blue"></div>

                    </div>
                </div>
                <div class="manufacturers">
                    <div class="previews-title">ДИСТРИБУЦИЯ ПРОИЗВОДИТЕЛЕЙ ПРОМЫШЛЕННОЙ АВТОМАТИКИ
                        <button class="upstairs-button">Наверх</button>
                    </div>
                    <div class="slider-window-wrap">
                        <div class="slider-window " data-scroll-step="1">
                            <div class="manufacturers-previews slider-container">
                                <div class="general-preview-wrap">
                                    <div class="general-preview">
                                        <div class="manufacturers-preview-title">Oem Automatic</div>
                                        <div class="preview-product-count">4354</div>
                                        <a href="#" class="img-wrap"><img src="images/demo/manufacturer.png" alt=""/></a>
                                        <a href="#" class="manufacturers-preview-description">OEM Automatic фильтры, системы фильтрации и адсорбенты, промышленные датчики температуры</a>
                                    </div>
                                    <div class="general-preview">
                                        <div class="manufacturers-preview-title">Oem Automatic</div>
                                        <div class="preview-product-count">4354</div>
                                        <a href="#" class="img-wrap"><img src="images/demo/manufacturer.png" alt=""/></a>
                                        <a href="#" class="manufacturers-preview-description">OEM Automatic фильтры, системы фильтрации и адсорбенты, промышленные датчики температуры</a>
                                    </div>
                                </div>
                                <div class="general-preview-wrap">
                                    <div class="general-preview">
                                        <div class="manufacturers-preview-title">Oem Automatic</div>
                                        <div class="preview-product-count">4354</div>
                                        <a href="#" class="img-wrap"><img src="images/demo/manufacturer.png" alt=""/></a>
                                        <a href="#" class="manufacturers-preview-description">OEM Automatic фильтры, системы фильтрации и адсорбенты, промышленные датчики температуры</a>
                                    </div>
                                    <div class="general-preview">
                                        <div class="manufacturers-preview-title">Oem Automatic</div>
                                        <div class="preview-product-count">4354</div>
                                        <a href="#" class="img-wrap"><img src="images/demo/manufacturer.png" alt=""/></a>
                                        <a href="#" class="manufacturers-preview-description">OEM Automatic фильтры, системы фильтрации и адсорбенты, промышленные датчики температуры</a>
                                    </div>
                                </div>
                                <div class="general-preview-wrap">
                                    <div class="general-preview">
                                        <div class="manufacturers-preview-title">Oem Automatic</div>
                                        <div class="preview-product-count">4354</div>
                                        <a href="#" class="img-wrap"><img src="images/demo/manufacturer.png" alt=""/></a>
                                        <a href="#" class="manufacturers-preview-description">OEM Automatic фильтры, системы фильтрации и адсорбенты, промышленные датчики температуры</a>
                                    </div>
                                    <div class="general-preview">
                                        <div class="manufacturers-preview-title">Oem Automatic</div>
                                        <div class="preview-product-count">4354</div>
                                        <a href="#" class="img-wrap"><img src="images/demo/manufacturer.png" alt=""/></a>
                                        <a href="#" class="manufacturers-preview-description">OEM Automatic фильтры, системы фильтрации и адсорбенты, промышленные датчики температуры</a>
                                    </div>
                                </div>
                                <div class="general-preview-wrap">
                                    <div class="general-preview">
                                        <div class="manufacturers-preview-title">Oem Automatic</div>
                                        <div class="preview-product-count">4354</div>
                                        <a href="#" class="img-wrap"><img src="images/demo/manufacturer.png" alt=""/></a>
                                        <a href="#" class="manufacturers-preview-description">OEM Automatic фильтры, системы фильтрации и адсорбенты, промышленные датчики температуры</a>
                                    </div>
                                    <div class="general-preview">
                                        <div class="manufacturers-preview-title">Oem Automatic</div>
                                        <div class="preview-product-count">4354</div>
                                        <a href="#" class="img-wrap"><img src="images/demo/manufacturer.png" alt=""/></a>
                                        <a href="#" class="manufacturers-preview-description">OEM Automatic фильтры, системы фильтрации и адсорбенты, промышленные датчики температуры</a>
                                    </div>
                                </div>
                                <div class="general-preview-wrap">
                                    <div class="general-preview">
                                        <div class="manufacturers-preview-title">Oem Automatic</div>
                                        <div class="preview-product-count">4354</div>
                                        <a href="#" class="img-wrap"><img src="images/demo/manufacturer.png" alt=""/></a>
                                        <a href="#" class="manufacturers-preview-description">OEM Automatic фильтры, системы фильтрации и адсорбенты, промышленные датчики температуры</a>
                                    </div>
                                    <div class="general-preview">
                                        <div class="manufacturers-preview-title">Oem Automatic</div>
                                        <div class="preview-product-count">4354</div>
                                        <a href="#" class="img-wrap"><img src="images/demo/manufacturer.png" alt=""/></a>
                                        <a href="#" class="manufacturers-preview-description">OEM Automatic фильтры, системы фильтрации и адсорбенты, промышленные датчики температуры</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="left-rewind-grey"></div>
                        <div class="left-rewind-blue"></div>
                        <div class="right-rewind-grey"></div>
                        <div class="right-rewind-blue"></div>

                    </div>
                    <div class="block-under-previews">
                        <div class="right-under-previews">
                            <button class="general-button">Обзор брендов</button>
                        </div>
                        <ul>
                            <li>23 бренда (партнёра) из 8 стран мира</li>
                            <li>40 различных видов импортного оборудования</li>
                        </ul>
                    </div>
                </div>
                <div class="design-development">
                    <div class="previews-title">ПРОЕКТИРОВАНИЕ И РАЗРАБОТКА ЭЛЕТКРОННЫХ УСТРОЙСТВ
                        <button class="upstairs-button">Наверх</button>
                    </div>
                    <div class="slider-window-wrap">
                        <div class="slider-window" data-scroll-step="1">

                            <div class="design-development-previews slider-container">
                                <div class="general-preview">
                                    <div>iForse</div>
                                    <a class="img-wrap" href="#"><img src="images/demo/develop.png" alt=""/></a>
                                    <a class="development-previews-description link-as-text" href="#">Прибор можно держать и управлять одной рукой. Разработана 4х слойная плата ВЧ и ещё много чего....</a>
                                </div>
                                <div class="general-preview">
                                    <div>iForse</div>
                                    <a class="img-wrap" href="#"><img src="images/demo/develop.png" alt=""/></a>
                                    <a class="development-previews-description link-as-text" href="#">Прибор можно держать и управлять одной рукой. Разработана 4х слойная плата ВЧ и ещё много чего....</a>
                                </div>
                                <div class="general-preview">
                                    <div>iForse</div>
                                    <a class="img-wrap" href="#"><img src="images/demo/develop.png" alt=""/></a>
                                    <a class="development-previews-description link-as-text" href="#">Прибор можно держать и управлять одной рукой. Разработана 4х слойная плата ВЧ и ещё много чего....</a>
                                </div>
                                <div class="general-preview">
                                    <div>iForse</div>
                                    <a class="img-wrap" href="#"><img src="images/demo/develop.png" alt=""/></a>
                                    <a class="development-previews-description link-as-text" href="#">Прибор можно держать и управлять одной рукой. Разработана 4х слойная плата ВЧ и ещё много чего....</a>
                                </div>
                                <div class="general-preview">
                                    <div>iForse</div>
                                    <a class="img-wrap" href="#"><img src="images/demo/develop.png" alt=""/></a>
                                    <a class="development-previews-description link-as-text" href="#">Прибор можно держать и управлять одной рукой. Разработана 4х слойная плата ВЧ и ещё много чего....</a>
                                </div>

                            </div>

                        </div>

                        <div class="left-rewind-grey"></div>
                        <div class="left-rewind-blue"></div>
                        <div class="right-rewind-grey"></div>
                        <div class="right-rewind-blue"></div>

                    </div>

                    <div class="block-under-previews">
                        <div class="right-under-previews">
                            <button class="general-button">Подробнее о сервисе</button>
                        </div>
                        <ul>
                            <li>Проэктирование электронных устройсвт</li>
                            <li>Разработка програмного обеспечения</li>
                            <li>Интеграция оборудования в единую систему</li>
                            <li>Проведение научно-исследовательских работ</li>
                            <li>Разработка оборудования</li>
                            <li>Проэктирование систем автоматизации управления</li>
                        </ul>
                    </div>
                </div>
                <div class="viewed-products">
                    <div class="previews-title">ПРОСМОТРЕННЫЕ ТОВАРЫ
                        <button class="upstairs-button">Наверх</button>
                    </div>
                    <div class="slider-window-wrap">
                        <div class="slider-window" data-scroll-step="1">
                            <div class="viewed-products-previews slider-container">
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>
                                <div class="general-preview">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/demo/switcher.png" alt=""/>
                                    </a>
                                    <a class="popular-preview-title text-center"> Брызгозащитные клавишные переключатели серии, красного цвета и черные  Брызгозащитные клавишные переключатели серии, красного цвета и черные </a>
                                    <div class="feedback-thumb">(1)</div>
                                    <div class="rating-1-star">
                                        <div class="grey-star"></div>
                                        <div class="yellow-star"></div>
                                    </div>
                                    <div class="popular-preview-brand">Hydronix</div>
                                    <div class="cart-image"></div>
                                    <div class="cart-image-hover"></div>
                                </div>

                            </div>
                        </div>
                        <div class="left-rewind-grey"></div>
                        <div class="left-rewind-blue"></div>
                        <div class="right-rewind-grey"></div>
                        <div class="right-rewind-blue"></div>
                    </div>

                </div>
            </div>

            <aside class="col-sm-4 col-sm-pull-16">
                <a href="#" class="price-banner-wrap">
                    <div class="price-banner">
                        <img src="images/pdf-doc.png" class="image-pdf">
                        <div class="price-banner-label">
                            <div class="price-banner-label-text visible-lg">ПРАЙС</div>
                            <div class="price-banner-label-text hidden-lg">ПРАЙС ЛИСТ</div>
                        </div>
                    </div>
                </a>
                <section class="banner novelty">
                    <a href="#" class="banner-header">
                        <span class="banner-header-title">НОВИНКИ</span>
                    </a>
                    <div class="banner-content align-left">
                        <a href="#"><div class="glyphicon glyphicon-menu-right"></div><span class="text-wrap">Камеры сгорания</span></a>
                        <a href="#"><div class="glyphicon glyphicon-menu-right"></div><span class="text-wrap">Датчики высокго давления</span></a>
                        <a href="#"><div class="glyphicon glyphicon-menu-right"></div><span class="text-wrap">Противопожарные системы полива помещений</span></a>
                    </div>
                </section>
                <section class="banner certificate">
                    <a href="#" class="banner-header">
                        <span class="banner-header-title">СЕРТИФИКАТЫ</span>
                    </a>
                    <div class="banner-content banner-content-carousel align-center">

                        <div id="banner-carousel" class="carousel slide" data-interval="0" data-ride="carousel">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#banner-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#banner-carousel" data-slide-to="1" class=""></li>
                                <li data-target="#banner-carousel" data-slide-to="2" class=""></li>
                                <li data-target="#banner-carousel" data-slide-to="3" class=""></li>
                            </ol>
                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class="banner-carousel-title"><a href="#">Hydronix</a></div>
                                    <div class="banner-carousel-img-wrap">
                                        <img src="images/certificate.png" alt=""/>
                                        <img src="images/certificate.png" alt=""/>
                                        <div class="glyphicon glyphicon-search"></div>
                                    </div>
                                </div>
                                <div class="item ">
                                    <div class="banner-carousel-title"><a href="#">Hydronix</a></div>
                                    <div class="banner-carousel-img-wrap">
                                        <img src="images/novelty.png" alt=""/>
                                        <img src="images/novelty.png" alt=""/>
                                        <div class="glyphicon glyphicon-search"></div>
                                    </div>
                                </div>
                                <div class="item ">
                                    <div class="banner-carousel-title"><a href="#">Hydronix</a></div>
                                    <div class="banner-carousel-img-wrap">
                                        <img src="images/certificate.png" alt=""/>
                                        <img src="images/certificate.png" alt=""/>
                                        <div class="glyphicon glyphicon-search"></div>
                                    </div>
                                </div>
                                <div class="item ">
                                    <div class="banner-carousel-title"><a href="#">Hydronix</a></div>
                                    <div class="banner-carousel-img-wrap">
                                        <img src="images/certificate.png" alt=""/>
                                        <img src="images/certificate.png" alt=""/>
                                        <div class="glyphicon glyphicon-search"></div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </section>
                <section class="banner blog">
                    <a href="#" class="banner-header">
                        <span class="banner-header-title">БЛОГ</span>
                        <span class="banner-header-all">Все</span>
                    </a>
                    <div class="banner-content align-left">
                        <a href="#"><div class="glyphicon glyphicon-menu-right"></div><span class="text-wrap">Стандарты качества приборов</a></span>
                        <a href="#"><div class="glyphicon glyphicon-menu-right"></div><span class="text-wrap">Как использовать индуктивные датчики</a></span>
                        <a href="#"><div class="glyphicon glyphicon-menu-right"></div><span class="text-wrap">Проектирование фотоэлементов в лабаратории</a></span>
                        <a href="#"><div class="glyphicon glyphicon-menu-right"></div><span class="text-wrap">Таблицы маркировок блочных элементов</a></span>
                        <a href="#"><div class="glyphicon glyphicon-menu-right"></div><span class="text-wrap">Внедрение в производство</a></span>
                        <a href="#"><div class="glyphicon glyphicon-menu-right"></div><span class="text-wrap">Автоматика технологических процессов</a></span>
                    </div>
                </section>
            </aside>


            <div class="text-under-footer col-lg-16 col-lg-push-4">
                <div class="text-under-footer-title">Мы рады приветствовать Вас на нашем сайте!
                    <button class="upstairs-button">Наверх</button>
                </div>
                <div class="text-under-footer-content">
                    Наше предприятие поставляет компоненты промышленной автоматики, электроники, пневматики и гидравлики для производителей промышленного оборудования, машин и шкафов управления, системных интеграторов, сервисных служб, дистрибьюторов и конечных потребителей.
                    <br/><br/>
                    Наш генеральный партнер-поставщик – международный концерн ОЕМ Automatic
                    <br/><br/>
                    ООО "Интеравтоматика" с 2007 года является официальным дистрибьютором международного концерна OEM Automatic, имеющего филиалы в двенадцати европейских странах и более чем сорокалетний опыт работы в области производства и поставок промышленной автоматики и электроники. Головной офис OEM Automatic находится в Транасе (Швеция), акции фирмы котируются на Стокгольмской фондовой бирже.
                    <br/><br/>
                    ООО "Интеравтоматика" с 2007 года является официальным дистрибьютором международного концерна OEM Automatic, имеющего филиалы в двенадцати европейских странах и более чем сорокалетний опыт работы в области производства и поставок промышленной автоматики и электроники. Головной офис OEM Automatic находится в Транасе (Швеция), акции фирмы котируются на Стокгольмской фондовой бирже.
                </div>
            </div>

        </div>
    </div>

    <footer class="container-fluid">
        <div class="footer">
            <div class="footer-block-1">
                <div class="footer-row"><a href="#">Автоматика</a></div>
                <div class="footer-row"><a href="#">Пневматика и гидравлика</a></div>
                <div class="footer-row"><a href="#">Электроника</a></div>
                <div class="footer-row"><a href="#">Производство ТЭНов</a></div>
                <div class="footer-row"><a href="#">Наши разработки</a></div>
            </div>
            <div class="footer-block-2">
                <div class="footer-row"><a href="#">Наша компания</a></div>
                <div class="footer-row"><a href="#">Дистрибьюция партнёров</a></div>
                <div class="footer-row"><a href="#">Проектирование и разработка</a></div>
                <div class="footer-row"><a href="#">Контакты</a></div>
            </div>
            <div class="footer-block-3">
                <div class="footer-row"><a href="#">Доставка и оплата</a></div>
                <div class="footer-row"><a href="#">Возврат товара</a></div>
                <div class="footer-row"><a href="#">Заказ оборудования</a></div>
                <div class="footer-row"><a href="#">Техподдержка</a></div>
                <div class="footer-row"><a href="#">Чачто задаваемые вопросы</a></div>
            </div>
            <div class="footer-block-4">
                <div class="footer-block-wrap">
                    <div class="footer-row">Наличный и безналичный расчет</div>
                    <img src="images/pay-system.png" alt=""/>

                    <div class="footer-row">Доставка: "Новая почта"</div>
                    <div class="footer-row">Гаранитя на все обарудование</div>
                </div>
            </div>
            <div class="footer-block-5">
                <div class="contacts-header">
                    <span class="bold">Не дозвонились?</span><a class="light-blue-text float-right pointer" onclick="$('#callback-modal').modal('show');">Заказать звонок</a>
                    <br /><span class="fax">Факс: </span><span class="float-right phone-header">+38 (056) 744 97 31</span>
                    <br /><span class="tel">Тел.: </span><span class="float-right phone-header-double"><span>+38 (056) 744 97 31</span><br><span>+38 (056) 744 97 31</span></span>
                    <br /><span>E-mail: </span><a class="light-blue-text float-right underline" href="mailto:info@interautomatic.com.ua">info@interautomatic.com.ua</a>
                    <br /><span class="office">Офис: 49126 г. Днепропетровск</span>
                    <br/><span>ул. Паникахи, 2</span>
                    <a class="float-right light-blue-text pointer" onclick="$('#road-map-modal').modal('show')">Карта проезда</a>
                </div>
            </div>
        </div>
        <div class="copyright col-xs-20">Все права защищены  © Copyright 2005-2015 INTER AUTOMATIC Производство и продажа компонентов промышленной автоматики</div>
    </footer>




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