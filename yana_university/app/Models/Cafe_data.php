<?php

namespace App\Models;
use Illuminate\Support\facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe_data extends Model
{
    public function getList(){
        //cafe_datasテーブルからデータを取得する
        $cafe_datas = DB::table('cafe_datas')->get();
        return $cafe_datas;
    }
    public function postData($data){
        DB::table('cafe_datas')->insert([
            'name' => $data->name,
            'url' => $data->url,
            'content' => $data->content,
        ]);
    }
    //protected $datas = ['name','content','url'];
}
