<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
ルートを定義している。このファイルをみればどのURLでどの処理が行われるのかが一目瞭然にわかるという話になる。ここに何も書かなければせっかく書いた処理も呼ばれることはない。
第１引数は127.0.0.1:8000の後ろが来る。
第２引数はコントローラ名@アクション名
Route::getはGETリクエストに対してのルーティングを定義する。主に通常のURL遷移やフォームのGETリクエストに対して用いる。
Route::postはPOSTリクエストに対してのルーティングを定義する。主にフォームのPOSTリクエストに対して用いられる。

*/

Route::get('eiken','EikenController@index');
Route::post('eiken','EikenController@create');

Route::post('article', 'EikenController@remove')->name('article_remove');

Route::get('kentei', function () {
    return view('layouts.kenteiapp');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@create');
Route::post('delete', 'HomeController@remove')->name('article_delete');