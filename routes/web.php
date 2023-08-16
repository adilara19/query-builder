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

    /*
    $users = DB::table('users')
    ->select(DB::raw('count(*) as user_count, status')) //*raw ile sorgu içerisine almak istediğimiz alanı belirliyoruz. raw ve groupBy birlikte kullanılır.
    ->where('status', '=',1)
    ->groupBy('status')
    ->get();

    return $users
    */
    
    /*
    $users = DB::table('users')
    ->where('point','=','150') //*where ile sorgu yaratıp aradığımız alanı bulabiliriz.
    ->where('age','>', 20)
    ->get();
    */

    /*
    $users = DB::table('users')
    ->where('name','like','%Ayşe%') //*like ile sorgu yaratıp aradığımız alanı bulabiliriz.
    ->get();
    */

    /*
    $user = DB::table('users')
    ->where([                       //*where sorgusunu bu şekilde birden fazla array tanımlayarak da yapabiliriz.
        ['point', '=', 250]
        ['age', '=', 40]
        ['name','like','%Helen%]
    ])
    ->get();

    return $users;
    */

    /*
    $users = DB::table('users')
    ->where('point','>', 600)
    ->orWhere('name','Ayşe Dilara Öztürk') //*orWhere ile öncesinde oluşturduğumuz sorgu çalışmazsa, çalışacak başka bir sorgu oluşturabiliriz.
    ->get();

    return $users;
    */

    /*
    $users = DB::table('users')
    ->where('point','>', 600)
    ->orWhere(function($query){            //*orWhere sorgusu içine where ekleyebiliyoruz ve sorguları bu şekilde de yazabiliriz.
        $query->where('name', 'Ayşe Dilara Öztürk')
              ->where('age', '>', 25);  
    }) 
    ->get();

    return $users;
    */

    /*
    $users = DB::table('users')
    ->whereNot('point','>', 600) //*whereNot ile aradığımız kriterlerde olmayanları sorgularız.
    ->get();

    return $users;
    }) 
    */

    /*
    $users = DB::table('users')
           ->where('point','>',50)
           ->get();
    return dd($users);           //*dd ile hata ayıklama işlemlerini daha kolay bir şekilde yapabiliriz.
    */

    /*
    $users = DB::table('users')
           ->where('point','>',50)
           ->get();
    return dump($users);           //*dump ile hata ayıklama işlemlerini daha kolay bir şekilde yapabiliriz.
    */

    /*
    $users = DB::table('users')
    ->orderBy('id','asc') //*orderBy asc ile verileri baştan sona listeleyebiliriz.
    ->get();
    */

    /*
    $users = DB::table('users')
    ->orderBy('id','desc') //*orderBy desc ile verileri sondan başa listeleyebiliriz.
    ->get();
    */

    /*
    $users = DB::table('users')
    ->latest() //*latest first ile en yeni veriyi listeleyebiliriz.
    ->first();
    */

    /*
    $users = DB::table('users')
    ->oldest() //*oldest first ile en eski veriyi listeleyebiliriz.
    ->first();
    */



});