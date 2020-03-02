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
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('test',function(){
    $theloai = App\theloai::find(1);
    // dd($theloai);
    foreach($theloai->loaitin as $loaitin){
        echo $loaitin->Ten."<br>";
    }
});
// Route::get('get',function(){
//     echo "aa";
// });
Route::get('test1',function(){
    return view('admin.theloai.danhsach');
});
Route::prefix('admin')->group(function(){
    Route::prefix('theloai')->group(function(){
        // admin/theloai/danhsach
        Route::get('danhsach','TheloaiController@getDanhsach');
        Route::get('sua','TheloaiController@getsua');
        // Route::get('them','TheloaiController@getthem');
        // Route::POST('them10','TheloaiController@postThem');
        Route::get('them','TheloaiController@xem');
        Route::post('them','TheloaiController@test');
    });
    
 
});
Route::get('test2',function(){
    return view('admin.layout.menu');
});