@extends('layouts.frame')

@section('title','商品情報登録画面')

@section('style')
    <link rel="stylesheet"href="{{asset('css/sign_up/style.css')}}">
@endsection

@section('main')
    <div class="intro_wrapper">
        <h1>商品新規登録画面</h1>
    </div>
    <div class="form_wrapper">
        <form action="{{url('/sign_up')}}"method="post">
            @csrf
            <table>
                <tr>
                    <th>商品名<span>*</span></th>
                    <td>
                        <label for="product_name">
                            <input id="product_name"type="text"name="product_name">
                        </label>
                    </td>
                    @if($errors->has('product_name'))
                        <td>{{$errors->first('product_name')}}</td>
                    @endif
                </tr>
                <tr>
                    <th>メーカー名<span>*</span></th>
                    <td>
                        <label for="company_name">
                            <select name ="company_name" >
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
                    <td>
                        <label for="price">
                            <input id="price"type="text"name="price">
                        </label>
                    </td>
                    @if($errors->has('price'))
                        <td>{{$errors->first('price')}}</td>
                    @endif
                </tr>
                <tr>
                    <th>在庫数<span>*</span></th>
                    <td>
                        <label for="stock">
                            <input id="stock"type="text"name="stock">
                        </label>
                    </td>
                    @if($errors->has('stock'))
                        <td>{{$errors->first('stock')}}</td>
                    @endif
                </tr>
                <tr>
                    <th>コメント</th>
                    <td>
                        <label for="comment">
                            <input id="comment"type="text"name="comment">
                        </label>
                    </td>
                </tr>
                <tr>
                    <th>商品画像</th>
                    <td>
                        <label for="img_path">
                            <input id="img_path"type="file"name="img_path"
                                accept="image/png,image/jpeg"/>
                        </label>
                    </td>
                </tr>
            </table>
            <input id="signUp"type="submit"value="新規登録">
            <input id="backBtn"type="button"value="戻る">
        </form>
    </div>
@endsection

@section('script')
    <script type="text/javascript"src="{{asset('js/sign_up/main.js')}}"></script>
@endsection