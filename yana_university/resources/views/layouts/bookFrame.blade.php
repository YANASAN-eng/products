<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>YANA大学</title>
        @yield('style')
        <link rel="stylesheet"href="{{asset('css/style_1.css')}}">
        <link rel="stylesheet"href="{{asset('css/style_2.css')}}">
        <link rel="stylesheet"href="{{asset('css/book.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <meta name=”viewport” content=”width=device-width, initial-scale=1″>
        <script type="text/javascript" async
        src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=MML_SVG"></script>
    </head>
    <body>
        <header>
            <div class="header_wrapper">
                <div class="header_logo">
                    <img class="YANA" src="./img/logo/YANA_LOGO.jpg">
                </div>
                <div class="header_menu">
                    <ul id="menus">
                        <li class="intro"><a href="#">サイト紹介</a></li>
                        <li class="intro"><a href="#">自己紹介</a></li>
                        <li class="intro"><a href="#">使い方</a></li>
                    </ul>
                    <div class="fa fa-bars" id="hamburger"></div>
                    <div id="new_menu"></div>
                </div>
            </div>
            <div class="clear"></div>
        </header>
        <div class="main_wrapper">
            <div class="intro_wrapper">
                @yield('intro')
            </div>
            <div class="mainContents clearfix">
                <div class="contents">
                    @yield('contents')
                </div>
                <div class="sentence">
                    @yield('sentence')
                </div>
            </div>
        </div>
        <footer>
            <div class="footer_wrapper">
                <div class="footer_logo">
                    <img src="./img/logo/YANA_LOGO.jpg">
                </div>
                <div class="footer_menu">
                    <p><a href="index">トップページに戻る</a></p>
                </div>
            </div>
        </footer>
        <script type="text/javascript"src="{{asset('./js/main.js')}}"></script>
        @yield('javascript')
    </body>
</html>