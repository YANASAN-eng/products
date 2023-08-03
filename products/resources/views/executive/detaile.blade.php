@extends('layouts.frame')

@section('title','商品情報詳細画面')

@section('style')
    <link rel="stylesheet"href="{{asset('css/detaile/style.css')}}">
@endsection

@section('main')
    <div class="intro_wrapper">
        <h1>商品情報詳細画面</h1>
    </div>
    <div class="form_wrapper">
        <table>
            <tr>
                <th>ID</th>
                <td><input type="text"name="id"value="{{$product->id}}"readonly></td>
            </tr>
            <tr>
                <th>商品画像<span</th>
                <td><input type="text"name="img_path"value="{{$product->img_path}}"readonly></td>
            </tr>
            <tr>
                <th>商品名</th>
                <td><input type="text"name="product_name"value="{{$product->product_name}}"readonly></td>
            </tr>
            <tr>
                <th>メーカー</th>
                <td>
                    <input type="text"value="{{$maker}}"readonly>
                </td>
            </tr>
            <tr>
                <th>価格</th>
                <td><input type="text"name="price"value="{{$product->price}}"readonly></td>
            </tr>
            <tr>
                <th>在庫数</th>
                <td><input type="text"name="stock"value="{{$product->stock}}"readonly></td>
            </tr>
            <tr>
                <th>comment</th>
                <td><textarea>{{$product->comment}}</textarea></td>
            </tr>
        </table>
        <form class="edit"action="{{url('/edit')}}"method="get">
            @csrf
            <input type="hidden"name="id"value="{{$product->id}}">
            <label for="edit">
                <input id="edit"type="submit"value="編集">
            </label>
        </form>
        <input id="backBtn"type="button"value="戻る">
    </div>
@endsection

@section('script')
    <script type="text/javascript"src="js/detaile/main.js"></script>
@endsection