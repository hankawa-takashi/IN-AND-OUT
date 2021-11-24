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

use App\Http\Controllers\ConfigController;

// フラグ設定画面を表示
Route::get('/', [ConfigController::class, 'flagList'])->name('configs');

// フラグ登録のページに遷移
Route::get('/config/entry', [ConfigController::class, 'EntryPage'])->name('EntryPage');

// フラグの登録
Route::post('/config/entry', [ConfigController::class, 'exeEntry'])->name('exeEntry');

// フラグ編集画面の表示
Route::get('/config/edit/{id}', [ConfigController::class, 'EditPage'])->name('EditPage');

// フラグの更新
Route::post('/config/update', [ConfigController::class, 'exeUpdate'])->name('exeUpdate');

// フラグの削除
Route::post('/config/delete/{id}', [ConfigController::class, 'exeDelete'])->name('exeDelete');


