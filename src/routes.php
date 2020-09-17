<?php

Route::get('/calculator', function(){
    echo "Calculator Package";
});

Route::get('add/{a}/{b}', 'Nomada\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Nomada\Calculator\CalculatorController@subtract');