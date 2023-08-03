<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Company;
use App\Http\Requests\ValidationRequest;

class ProductsController extends Controller
{
    //listを表示
    public function listShow(){
        return view('executive.list');
    }
    //sign_upを表示
    public function signUpShow(){
        $companies = DB::table('companies')->get();
        return view('executive.sign_up',['companies' => $companies]);
    }
    //detaileを表示
    public function detaileShow(Request $request){
        $product = DB::table('products')
            ->where('id',$request->id)
            ->first();
        $maker = Product::find($request->id)->company->company_name;
        return view('executive.detaile',['product' => $product,'maker' => $maker]);
    }
    //editを表示
    public function editShow(Request $request){
        $id = $request->id;
        $companies = DB::table('companies')->get();
        return view('executive.edit',['id' => $id,'companies' => $companies]);
    }
    //listにDBのレコードを表示させる
    public function listGetDatas(){
        $products = DB::table('products')->get();
        $makers = DB::table('companies')->get();
        $product_makers = [];
        $length = count($products);
        for($i = 1;$i <= $length;$i++){
            array_push($product_makers,Product::find($i)->company->company_name);
        }
        return view('executive/list',[
            'products' => $products,
            'makers' => $makers,
            'product_makers' => $product_makers,
            ]);
    }
    //更新機能
    public function editUpdate(ValidationRequest $request){
        $products = DB::table('products')
            ->where('id',$request->id)
            ->update([
                'company_id' => Company::where('company_name',$request->company_name)->first()->id,
                'product_name' => $request->product_name,
                'price' => $request->price,
                'stock' => $request->stock,
                'comment' => $request->comment,
            ]);
            $str = 'edit?id='.$request->id;
        return redirect($str);
    }
    //削除機能
    public function listDestroy(Request $request){
        $products = DB::table('products')->get();
        $length = Count($products);
        Product::where('id',$request->id)->delete();
        for($i = 1;$i <= $length;$i++){
            if($i <= $request->id){
                continue;
            }else{
                Product::where('id',$i)
                    ->update(['id' => $i - 1]);
            }
        }
        return redirect('list');
    }
    //登録機能
    public function signUp(ValidationRequest $request){
        $maxUserId = Product::max('id');
        $param = [
            'id' => $maxUserId + 1,
            'company_id' => Company::where('company_name',$request->company_name)->first()->id,
            'product_name' => $request->product_name,
            'price' => $request->price,
            'stock' => $request->stock,
            'comment' => $request->comment,
            'img_path' => $request->img_path,
        ];
        DB::table('products')->insert($param);

        return redirect('sign_up');
    }
    //検索機能
    public function listSearch(Request $request){
        if($request->flag == 1 and $request->company_name == ""){
            $products = DB::table('products')
            ->where('product_name',$request->product_name)
            ->get();
            $makers = DB::table('companies')->get();
            $length = Count($products);
            $product_makers = [];
            for($i = 0;$i < $length;$i++){
                $id = $products[$i]->id;
                array_push($product_makers,Product::find($id)->company->company_name);
            }
            return view('executive.list',[
                'products' => $products,
                'makers' => $makers,
                'product_makers' => $product_makers,
            ]);
        }else if($request->flag == 1 and $request->company_name != ""){
            $products = DB::table('products')
            ->where('product_name',$request->product_name)
            ->orwhere('company_id',Company::where('company_name',$request->company_name)->pluck('id'))
            ->get();
            $makers = DB::table('companies')->get();
            $length = Count($products);
            $product_makers = [];
            for($i = 0;$i < $length;$i++){
                $id = $products[$i]->id;
                array_push($product_makers,Product::find($id)->company->company_name);
            }
            return view('executive.list',[
                'products' => $products,
                'makers' => $makers,
                'product_makers' => $product_makers,
            ]);
        }else{
            $products = DB::table('products')->get();
            $makers = DB::table('companies')->get();
            $product_makers = [];
            $length = count($products);
            for($i = 1;$i <= $length;$i++){
                array_push($product_makers,Product::find($i)->company->company_name);
            }
            return view('executive.list',[
                'products' => $products,
                'makers' => $makers,
                'product_makers' => $product_makers,
                ]);
        }    
    }
}
