<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Models\Contact;
use App\Models\Cafe_data;
use App\Http\Requests\CafeDataRequest;


class IndexController extends Controller
{
    //YANA大学homepage
    public function index(){       
        return view('/index');
    }
    //YANA大学数学科
    public function math(){
        $mathMenus = [
            '集合・位相',
            '解析学',
            '線形代数',
            'テンソル代数',
            '抽象代数学',
            '微分幾何学',
            '複素解析学'
        ];
        return view('math/index',['mathMenus'=>$mathMenus]);
    }
    //YANA大学物理学科
    public function physics(){
        $physicsMenus = [
            '力学',
            '電磁気学',
            '流体力学',
            '熱・統計力学I',
            '相対性理論',
            '量子力学',
            '場の理論',
            '熱・統計力学Ⅱ'
        ];
        return view('physics/index',['physicsMenus'=>$physicsMenus]);
    }
    public function mechanics(){
        $mechanicsMenus = [
            '運動の記述',
            '質点の力学',
            '質点系・剛体の力学',
            '解析力学',
            '相対論的力学',
        ];
        return view('physics/mechanics',['mechanicsMenus'=>$mechanicsMenus]);
    }
    public function electromagnetics(){
        $electromagneticsMenus = [
            '真空中での静電界',
            '真空中での導体系',
            '誘電体中の静電界',
            '静電界の特殊解法',
            '定常電流',
            '静磁界',
            '電磁誘導',
        ];
    }


    //YANA大学情報工学科
    public function programming(){
        $programmingMenus = [
            'C言語',
            'Java',
            'python',
            'Ruby',
            'php',
            'HTML & CSS',
            'Javascript'
        ];
        return view('programming/index',['programmingMenus'=>$programmingMenus]);
    }
    //YANA大学イラスト創作科
    public function illust(){
        $illustMenus = [
            '創作アイデアの生み出し方',
            '遠近法'
        ];
        return view('illust/index',['illustMenus'=>$illustMenus]);
    }
    //YANA大学カフェ
    public function bgm(){
        $yana_cafe = new Cafe_data();
        $bgm_datas = $yana_cafe->getList();
        return view('bgm/index',[
            'bgm_datas' => $bgm_datas
        ]);
    }
    public function bgmValidation(CafeDataRequest $request){
        DB::beginTransaction();
        try{
            $cafe_data = new Cafe_data();
            $cafe_data->postData($request);
            DB::commit();
        }catch (\Exception $e){
            DB::rollback();
            return back();
        }
        return redirect('bgm');
    }
    public function bgmConfig(){
        return view('bgm/bgmConfig');
    }

    /*public function bgmPost(Request $request){
        $post = new Cafe_data();
        $post->name = $request->name;
        $post->content = $request->content;
        $post->url = $request->url;
        $post->save();
        return redirect('bgm');
    }:*/
}
