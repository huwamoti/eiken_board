<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index(Request $request)
    {
        $items=DB::select('select * from eiken');
        return view('home',['items'=>$items]);
    }

    public function create(Request $request)
    {
        $user=\Auth::user();
        $param=[
            'name'=>$request->name,
            'category'=>$request->category,
            'message'=>$request->message,
            'user_id'=>$user->id,
        ];
        DB::insert('insert into eiken (name,category,message,user_id) values (:name,:category,:message,:user_id)',$param);
        return redirect('/home');
       
    }

   
    public function remove(Request $request)
    {
            $user=\Auth::user();
            $param=['user_id'=>$user->id];
            DB::delete('delete from eiken where user_id=:user_id',$param);
            return redirect('/home');
        
       
    }



}
