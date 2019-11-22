<?php
/*

ｐ６１　view('フォルダ名.ファイル名')
コントローラに用意される処理はアクションと呼ばれる。
return viewはレンダリング(データをもとに表示内容を作る。犯人の似顔絵描き)して相手のブラウザに表示する。

*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EikenController extends Controller
{
    public function index(Request $request)
    {
        $items=DB::select('select * from eiken');
        return view('eiken.eiken',['items'=>$items]);
    }

    public function create(Request $request)
    {
        
        $param=[
            'name'=>$request->name,
            'category'=>$request->category,
            'message'=>$request->message,
        ];
        DB::insert('insert into eiken (name,category,message) values (:name,:category,:message)',$param);
        return redirect('/eiken');
       
    }

   
    public function remove(Request $request)
    {
        
            $param=['id'=>$request->id];
            DB::delete('delete from eiken where id=:id',$param);
            return redirect('/eiken');
        
       
    }
}