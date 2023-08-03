@extends('../layouts/frame')

@section('intro')
    <h1>入力確認画面</h1>
    <p>下記の内容でよろしいでしょうか？</p>
    <p>よろしい場合は送信ボタンを押してください。</p>
@endsection

@section('contents')
    <form action="{{route('submit')}}"method="POST"id="form">
        @csrf
        <table border="1"style="border-collapse:collapse">
            <tr>
                <th></th><th></th><th><th>
            </tr>
            <tr>
                <td>
                    <label for="name">曲名</label>
                </td>
                <td>
                    <input class="infomation"type="text"name="name"value="{{$_GET['name']}}"readonly>
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
                    <input class="infomation"type="text"name="url"value="{{$_GET['url']}}"readonly>
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
                    <textarea name="content"readonly>{{$_GET['content']}}</textarea>
                </td>
                @if($errors->has('content'))
                        <td>{{ $errors->first('content') }}</td>
                @endif
            </tr>
            <tr>
                <td>
                    <button id="submit" type="submit">送信</button>
                </td>
                <td>
                    <button id="return"type="button">戻る</button>
                </td>
            </tr>
        </table>
    </form>
    
@endsection

@section('javascript')
    <script src='./js/bgmButton.js'></script>
@endsection