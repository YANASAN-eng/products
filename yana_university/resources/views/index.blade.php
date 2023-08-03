@extends('layouts/frame')

@section('style')
<link rel="stylesheet"href="./css/style.css">
<link rel="stylesheet"href="./css/button.css">
@endsection

@section('intro')
<h1 class="welcom">ようこそYANA大学へ！</h1>
    <div class="explanations">
        <p>
            はじめまして！僕は本サイトを運営するやなさんという者です。
        </p>
        <p>
            当サイトでは、数学・物理学・プログラミングを解説したり、
            僕が発見した定理や事実を記載していきます。
        </p>
        <p>
            内容は一応、<span class="assumption">高校生レベルを仮定します</span>が...それにこだわる必要は
            ございません。ですので分かるところだけ読んでつまみ食いしていただいて大丈夫です。
            だから、幼稚園児の方も大歓迎です！
        </p>
        <p>
            記述の仕方は厳密性よりも直観を重視いたします。その点については予めご了承くださいますよう
            お願いいたします。
        </p>
        <p class="intro_end">
            ではYANA大学の授業をぜひ見て行ってくださいね！
        </p>
        <div id="zundamon">
        </div>
    </div>
@endsection

@section('contents')
<div class="contents clearfix">
    <div class="content">
        <a href="#" ><img class="btn" src="./img/math.jpg"></a>
        <p><a href="#">数学</a></p>
    </div>
    <div class="content">
        <a href="#"><img class="btn" src="./img/physics.jpg"></a>
        <p><a href="#">物理学</a></p>
    </div>
    <div class="content">
        <a href="#"><img class="btn" src="./img/programming.jpg"></a>
        <p><a href="#">プログラミング</a></p>
    </div>
    <div class="content">
        <a href="#"><img class="btn" src="./img/illust.jpg"></a>
        <p><a href="#">イラスト制作法</a></p>
    </div>
    <div class="content bgm">
        <a href="#" target="_blank"rel="noopener"><img class="btn" src="./img/bgm.jpg"></a>
        <p><a href="#"target="_blank"rel="noopener">作業用bgm</a></p>
    </div>
    <div class="clear"></div>
</div>

@endsection

@section('contact')
<div class="gist">
    <h2>YANA大学 学生専用窓口</h2>
    <p>ここはYANA大学の学生のための専用窓口です。</p>
    <p>学生の皆さまが
        「当サイトのコレコレが見にくい/読みにくい/
        使いにくい」などの
        不都合を感じた時管理者に報告できる場所となっております。
    </p>
    <p>
        もし少しでも当サイトご使用にあたり不都合な事がございましたら
        気軽にお伝えください。
    </p>
</div>
<div class="form">
    <form method="POST" action="{{route('index')}}">
        @csrf
        <table>
            <tr>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td><label for="name">名前</label></td>
                <td><input type="text"name="name"id="name"></td>
            </tr>
            <tr>
                <td><label for="email">メールアドレス</label></td>
                <td><input type="text"name="email"id="email"></td>
            </tr>
            <tr>
                <td><label for="opinion">ご意見</label> </td>
                <td><textarea name="opinion"id="opinion"></textarea></td>
            </tr>  
        </table>
        <button type="submit">送信</button>
    </form>
</div>

<div class="submitInfomation">
    <h2>ご入力された情報の履歴</h2>
    <table border="1"style="border-collapse:collapse">
        <tr>
            <th>名前</th><th>メールアドレス</th><th>ご意見</th>
        </tr>
        @foreach($opinions As $opinion)
            <tr>
                <td>{{$opinion->name}}</td>
                <td>{{$opinion->email}}</td>
                <td>{{$opinion->opinion}}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection




@section('javascript')
<script type="text/javascript" src="./js/button.js"></script>
<script type="text/javascript" src="./js/zundamon.js"></script>
@endsection