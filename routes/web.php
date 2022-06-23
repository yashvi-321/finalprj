<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\registeration;
use App\Http\controllers\adhandle;


Route::get('/', function () {
    return view('layout.base');
});
Route::get('/regis', [registeration::class,'crea'])->name('regis');
Route::post('/regis', [registeration::class,'storing']);


Route::get('/login', [registeration::class,'loginview']);
Route::post('/login', [registeration::class,'afterlogin']);
Route::get('/ulogout', [registeration::class,'ulogout']);
Route::get('/contact', [registeration::class,'contacts']);
Route::post('/contact', [registeration::class,'contactsave']);
Route::view('/home', 'users.userdashboard')->middleware('chk1')->name('home');
Route::get('/adminpanel',  [adhandle::class,'adminview'])->middleware('chk')->name('apanel');
Route::get('/userlist',  [adhandle::class,'userlist'])->middleware('chk')->name('ulist');
Route::get('/alogout',  [adhandle::class,'alogout'])->name('lout');
Route::get('/addstudent',  [adhandle::class,'addstud'])->name('addst');
Route::post('/addstudent',  [adhandle::class,'addstud1'])->name('addst1');
Route::get('/studlist',  [adhandle::class,'studlist'])->name('slist');
Route::get('/deleting/{id}',  [adhandle::class,'dele'])->name('dele');
Route::get('/editing/{id}',  [adhandle::class,'edit'])->name('edit');
Route::put('/editing/{id}',  [adhandle::class,'update'])->name('upd');


