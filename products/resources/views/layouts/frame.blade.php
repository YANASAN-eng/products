<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet"href="{{asset('/css/style.css')}}">
        @yield('style')
    </head>
    <body>
        <header>@yield('header')</header>
        <div class="main_wrapper">
            @yield('main')
        </div>
        <footer>@yield('footer')</footer>
        @yield('script')
    </body>
</html>
