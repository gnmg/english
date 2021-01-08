<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="駒ヶ根英語塾、駒ヶ根英会話,　駒ヶ根英語学校, 駒ヶ根英語教室, TOEIC" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="">
    <title>駒ヶ根英語学校、英語塾</title>
    <!-- Woff2 fonts preload -->
    <link rel="preload" href="fonts/noto-sans-jp-v24-latin-300.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="fonts/noto-sans-jp-v24-latin-regular.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="fonts/noto-sans-jp-v24-latin-500.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="fonts/noto-sans-jp-v24-latin-700.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <!-- Style files -->
    <!-- <link rel="stylesheet" href="/public/css/normalize.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <!-- Style file for validation tooltip -->
    <link rel="stylesheet" href="/public/css/validationEngine.css">

    <!-- <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/style.css"> -->
    <!-- Style file for validation tooltip -->
    <link rel="stylesheet" href="public/css/validationEngine.css" >

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Google recaptcha-->
    <script src="https://www.google.com/recaptcha/api.js?render=6LfpmwgaAAAAABUbmR-qxC24rUnzdyKoVZ2gcgKX"></script>
    <script>
    grecaptcha.ready(function() {
        // do request for recaptcha token
        // response is promise with passed token
        grecaptcha.execute('6LfpmwgaAAAAABUbmR-qxC24rUnzdyKoVZ2gcgKX', {
                action: 'validate_captcha'
            })
            .then(function(token) {
                // add token value to form
                document.getElementById('g-recaptcha-response').value = token;
            });
    });
    </script>
</head>

<body>
    <div class="wrapper">
        <!-- Header - START -->
        <header class="main-header">
            <!-- Main logo area - START -->
            <div class="main-header__logo-area"> <a class="main-header__logo" href="#replace">グリーンズ英語教室</a>
            </div>
            <!-- Main logo area - END -->
            <div class="main-header__inner">
                <!-- Navigation - START -->
                <nav class="main-header__navigation  navigation">
                    <!-- Navigation close btn - START -->
                    <div class="navigation__btn-area">
                        <button class="navigation__btn"> <span>Toggle menu</span>
                        </button>
                    </div>
                    <!-- Navigation close btn - END -->
                    <!-- Navigation list - START -->
                    <ul class="navigation__list">
                        <li class="navigation__item"> <a class="navigation__link" href="#feature">特徴</a>
                        </li>
                        <li class="navigation__item"> <a class="navigation__link" href="#teacher">教師紹介</a>
                        </li>
                        <li class="navigation__item"> <a class="navigation__link" href="#contact">お問い合わせ</a>
                        </li>
                        <li class="navigation__item"> <a class="navigation__link" href="#map">アクセス</a>
                        </li>
                    </ul>
                    <!-- Navigation list - END -->
                </nav>
                <!-- Navigation - END -->
                <!-- Contacts - START -->
                <div class="main-header__contacts  contacts">
                    <!-- Contacts phone link - START -->
                    <a class="contacts__item  contacts__item_phone" href="tel:0265833375">
                        <img class="contacts__icon" src="img/icon-tel-sp.png" alt="電話をかける">
                        <p class="contacts__number"> <span>tel.</span>
                            <span>0265-83-3375</span>
                        </p>
                        <p class="contacts__info">(月―土曜日) 13:00 ~ 22:00</p>
                    </a>
                    <!-- Contacts phone link - END -->
                    <!-- Contacts email link - START -->
                    <a class="contacts__item  contacts__item_email" href="#contact" title="Send us email">
                        <img class="contacts__icon" src="img/icon-mail.png" alt="メール">
                    </a>
                    <!-- Contacts email link - END -->
                </div>
                <!-- Contacts - END -->
            </div>
        </header>
        <!-- Header - END -->

        @yield('content')


        <!-- Footer - START -->
        <footer class="main-footer">
            <!-- Copyright text - START -->
            <p class="footer__copyright">&copy; All rights reserved | グリーンズ英会話</p>
            <!-- Copyright text - END -->
        </footer>
        <!-- Footer - END -->
    </div>
    <!-- jQuery and plugins -->
    <script src="js/plugins/jquery/jquery-3.4.1.min.js"></script>
    <!-- jQuery form validation with JA translations -->
    <script src="js/plugins/validationEngine/jquery.validationEngine-ja.js"></script>
    <script src="js/plugins/validationEngine/jquery.validationEngine.min.js"></script>
    <!-- Minified script -->
    <script src="js/script.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-806156-14"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-806156-14');
    </script>


</body>

</html>