<?php

use Illuminate\Support\Facades\Route;

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

// cách 1: Viết hàm trực tiếp: Không dùng view và không dùng controller
Route::get('/demo01/add',   function (){    echo "xin chao";     }  );

//Cách 2: Trả về 1 file view mà không dùng controller. Yêu cầu: Cần có 1 file view.
Route::get('/demo01/add', function (){
        return view ('ten_file_view'); // ten_file_view phải tồn tại file nhé.
} );

//Cách 3: Điều hướng vào một action trong controller: Cần viết action và controller.
// Nếu muốn dùng view thì trong controller sẽ return về một file view.
Route::get('/demo01/add','Demo01Controller@add');

// dành cho action sửa
Route::get('/demo01/edit/{idsp}','Demo01Controller@edit');


