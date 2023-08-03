@extends('layouts.frame')

@section('title','商品情報編集画面')

@section('style')
    <link rel="stylesheet"href="{{asset('css/edit/style.css')}}">
@endsection

@section('style')
    <link rel="stylesheet"href="{{asset('css/edit/style.css')}}">
@endsection

@section('main')
    <div class="intro_wrapper">
        <h1>商品情報編集画面</h1>
    </div>
    <div class="form_wrapper">
        <form action="{{url('/edit')}}"method="post">
            @csrf
            <table>
            <tr>
                <th>ID</th>
                <td><input id="id"name="id"type="text"value="{{$id}}"readonly></td>
            </tr>
            <tr>
                <th>商品名<span>*</span></th>
                <td><input type="text"name="product_name"></td>
                @if($errors->has('product_name'))
                    <td>{{$errors->first('product_name')}}</td>
                @endif
            </tr>
            <tr>
                <th>メーカー名<span>*</span></th>
                <td>
                    <label for="company_name">
                        <select name="company_name">
                            @foreach($companies as $company)
                                <option>{{$company->company_name}}</option>
                            @endforeach
                        </select>
                    </label>
                </td>
                @if($errors->has('company_id'))
                    <td>{{$errors->first('company_id')}}</td>
                @endif
            </tr>
            <tr>
                <th>価格<span>*</span></th>
                <td><input type="text"name="price"></td>
                @if($errors->has('price'))
                    <td>{{$errors->first('price')}}</td>
                @endif
            </tr>
            <tr>
                <th>在庫数<span>*</span></th>
                <td><input type="text"name="stock"></td>
                @if($errors->has('stock'))
                    <td>{{$errors->first('stock')}}</td>
                @endif
            </tr>
            <tr>
                <th>comment</th>
                <td><textarea name="comment"></textarea></td>
            </tr>
            <tr>
                <th>商品画像</th>
                <td> 
                    <input id="img_path"type="file"name="img_path"
                        accept="image/png,image/jpeg"/>
                </td>
            </tr>
        </table>
            <div class="btns">
                <input id="edit"type="submit"value="更新">
                <input id="backBtn"type="button"value="戻る">
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script type="text/javascript"src="{{asset('js/edit/main.js')}}"></script>
@endsection
