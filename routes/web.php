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
// Route::get('chat', 'ChatController@index');
// Route::get('ajax/chat', 'Ajax\ChatController@index'); // メッセージ一覧を取得
// Route::post('ajax/chat', 'Ajax\ChatController@create'); // チャット登録
use App\Events\MessageCreated;

// Route::get('/chat', function () {
//     $message = ['id' => 1, 'name' => 'メールの確認']; 
//     event(new MessageCreated($message));
// });
Route::get('/chat', function(){
	return view('chat');
});
