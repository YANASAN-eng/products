@extends('layouts.frame')

@section('title','商品一覧画面')

@section('style')
    <link rel="stylesheet"href="{{asset('css/list/style.css')}}">
@endsection

@section('main')
    <div class="intro_wrapper">
        <h1>商品一覧画面</h1>
    </div>
    <div class="form_wrapper">
        <form action=""method="get">
            @csrf
            <table>
                <tr>
                    <td>
                        <label for="product_name">
                            <input id="searchName"type="text"placeholder="検索キーワード"name="product_name">
                        </label>
                    </td>
                    <td>
                        <select name="company_name">
                            <option value="">メーカー名</option>
                            @foreach($makers as $maker)
                                <option value="{{$maker->company_name}}">{{$maker->company_name}}</option>
                            @endforeach
                        </select>
                        <input type="hidden"name="flag"value="1">
                    </td>
                    <td>
                        <input id="search"type="submit"value="検索">
                    </td>
                </tr>
            </table>
        </form>
        <table id="products">
            <tr>
                <th>ID</th>
                <th>商品画像</th>
                <th>商品名</th>
                <th>価格</th>
                <th>在庫数</th>
                <th>メーカー名</th>
                <th><input id="signUp"type="button"value="新規登録"></th>
            </tr>
            @php $i = 0;@endphp
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->img_path}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->stock}}</td>
                    <td>{{$product_makers[$i]}}</td>
                    <td>
                        <form class="detaile"action="{{url('/detaile')}}"method="get">
                            @csrf
                            <input type="hidden"name="id"value="{{$product->id}}">
                            <input id="detaile"type="submit"value="詳細">
                        </form>
                        <form class="destroy"action="{{url('/list')}}"method="post">
                            @csrf
                            <input type="hidden"name="id"value="{{$product->id}}">
                            <input id="destroy"type="submit"value="削除">
                        </form>
                    </td>
                </tr>
                @php $i += 1; @endphp
            @endforeach
        </table>
    </div>
@endsection

@section('script')
    <script type="text/javascript"src="{{asset('js/list/main.js')}}"></script>
@endsection