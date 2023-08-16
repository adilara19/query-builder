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


Route::get('/',function(){
    /*
    $users = DB::table('users)->pluck('name); //*pluck ile spesifik bir alanın arrayını alabiliriz.
    return $users;
    */

    /*
    $users = DB::table('users)->where('name', 'Ayşe Dilara Öztürk')->value('name'); //*value ile spesifik bir değeri alabiliriz.
    return $users;
    */

    /*
    $users = DB::table('users)->where('id', 5)->value('email'); //*value ile spesifik bir değeri alabiliriz, burada id'si 5 olan değerin email adresini aldık. 
    return $users;
    */

    /*
    $users = DB::table('users)->where('id', 1)->first(); //*first ile spesifik bir alanın bütün değerlerini alabiliriz.
    return $users;
    */

    /*
    $users = DB::table('users)->find('name'); //*find ile spesifik bir alanı bulur ve bütün değerlerini getirir.
    return $users;
    */

    /*
    $users = DB::table('users')->select('name as Adı')->get(); //*select ile bir tablodaki sütun ismini bulur, onu yeni bir isimle tarayıcıya yazdırır ve bütün isim değerlerini getirir.
    return $users;
    */

    /*
    $users = DB::table('users')->count(); //*count ile bir tablodaki satır sayılarını görebiliriz.
    return $users;
    */

    /*
    $users = DB::table('users')->min('point'); //*min ile bir tablodaki aranılan alanda(yani point alanında) bulunan minimum değeri görebiliriz.
    return $users;
    */

    /*
    $users = DB::table('users')->max('point'); //*max ile bir tablodaki aranılan alanda(yani point alanında) bulunan maximum değeri görebiliriz.
    return $users;
    */

    /*
    $users = DB::table('users')->sum('point'); //*sum ile bir tablodaki aranılan alanda(yani point alanında) bulunan bütün değerlerin toplamın değerini görebiliriz.
    return $users;
    */


});