<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Route::view('/taher', 'testview',['testview' =>'<h1>tesr <>view 1 ']);

Route::get('/taher/{id}', function ($id) {
    $cats=[
        1=>"games",
        2=>"tools",
        3=>"books"
    ];
    return view('testview',[
        'id'=>$cats[$id]??"notfunde"
        ]);
});
Route::get('/taher', function () {
    $id = request("n");
    return view('testview',[
        'id'=>$id
    ]);
});
