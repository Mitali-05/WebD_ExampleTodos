<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo 'Hello World';
    // return view('welcome');
});

Route::get('/calculator/{number1}/{number2}', function ($number1, $number2) {
    $sum =$number1 + $number2;
    $product = $number1 * $number2;
    echo "<b>The sum of $number1 and $number2 is ".$sum."</b><br/>";
    echo "<b>The product of $number1 and $number2 is ".$product."</b>";
})->where([
    'number1' =>'[0-9]+',
    'number2'=> '[0-9]+'
]);

/* Route::get('/user/{name}', function ($name) {
    echo "My Name is $name.";
})->where([
    'name' =>'[A-Z a-z]+'
]); */

Route::get('/user/{name}', function ($name) {
    return view('greeting',['name'=> $name]);
})->where([
    'name' =>'[A-Z a-z]+'
]);