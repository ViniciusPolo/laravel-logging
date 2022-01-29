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
    logger()->info('Alguém acessou o site');
    logger()->error('usuário tentou acessar', ['user'=>2]);
    return view('welcome');
});

Route::get('/soma/{num1}/{num2}', function ($num1, $num2) {
    $soma = $num1 + $num2;
    logger()->info('Soma feita');
    
    return $soma;
});

Route::get('/sub/{num1}/{num2}', function ($num1, $num2) {
    $sub = $num1 - $num2;
    logger()->debug('Sub feita', ['num1'=>$num1, 'num2'=>$num2, 'sub'=>$sub]);
    
    return $sub;
});
Route::get('/div/{num1}/{num2}', function ($num1, $num2) {
    if($num2 == 0){
        logger()->error('Divisor zero!');
        return 'Divisor zero';
    }
     else {
        $div = $num1 / $num2;
        return $div;
    }
});
Route::get('/mult/{num1}/{num2}', function ($num1, $num2) {
    if($num1 < 0 || $num2 < 0){
        
        logger()->warning('Negativo');
    }
    
    return view('welcome');
    ;
});
