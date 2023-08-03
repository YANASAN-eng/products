@extends('/layouts/frame')

@section('style')
    <link rel="stylesheet"href="{{asset('css/bgm.css')}}">
@endsection

@section('intro')
    <h1>YANAカフェへようこそ！</h1>
    <div class="explanation">
        <p>ようこそYANAカフェへ！</p>
        <p>「勉強を音楽を聴きながら進めてたいあなたに適した作業用BGMを届けたい！」
            そのようなコンセプトで本ページを作成致しました。
        </p>
        <p>本ページ下記入力フォームにあなたが聞きたい作業用BGMを入力していただければ
            順次当ページにそのBGMを追加できるシステムを実装いたしましたのでどうぞご使用ください！
        </p>
    </div>
@endsection


@section('contents')
    <div id="contents">

    </div>
@endsection

@section('contact')
    <div class="contacts-form">
        <h2 class="input-form">入力欄</h2>
        <div class="input-form-explanation">
            <p>ここではあなたがYANAカフェに追加して欲しい作業用BGMを
                記載してください。
            </p>
            <p>
                そしたら、あなたが望む作業用BGMがYANAカフェに追加されます！
            </p>
        </div>
        <form action="bgmConfig" method="GET">
            @csrf
            <table>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>
                        <label for="name">曲名</label>
                    </td>
                    <td>
                        <input class="infomation"type="text"name="name">
                    </td>
                    @if($errors->has('name'))
                        <td>{{ $errors->first('name') }}</td>
                    @endif
                </tr>
                <tr>
                    <td>
                        <label for="url">url</label>
                    </td>
                    <td>
                        <input class="infomation"type="text"name="url">
                    </td>
                    @if($errors->has('url'))
                        <td>{{ $errors->first('url') }}</td>
                    @endif
                </tr>
                <tr>
                    <td>
                        <label for="infomation">内容</label>
                    </td>
                    <td>
                        <textarea name="content"></textarea>
                    </td>
                    @if($errors->has('content'))
                        <td>{{ $errors->first('content') }}</td>
                    @endif
                </tr>
            </table>
            <input type="submit"value="送信">
        </form>
        <div class="datas">
            <h3>追加された曲達</h3>
            <table border="1"style="border-collapse:collapse">
                <thead>
                    <tr>
                        <th>名前</th>
                        <th>内容</th>
                        <th>URL</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bgm_datas as $bgm_info)
                    <tr>
                        <td class="bgmName">{{$bgm_info->name}}</td>
                        <td>{{$bgm_info->content}}</td>
                        <td class="bgmUrl">{{$bgm_info->url}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('javascript')
    <script src='./js/bgms.js'></script>
    <script src='./js/bgmGet.js'></script>
@endsection