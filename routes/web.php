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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return response()->json('congrate! first route');
});
Route::get('/datatype', function () {
    return view('/example/datatype', [
        'string' => 'Laravel ใช้งาน view (blade template), json ,pdf',
        'boolean' => true,
        'integer' => 9999,
        'object' => [
            'content' => 'Laravel ใช้งาน view (blade template), json ,pdf EP3',
            'author' => 'poolsawat'
        ],
        'array' => [
            ['content' => 'Laravel เริ่มติดตั้งและสร้าง route ง่าย ๆ EP1'],
            ['content' => 'Laravel แนะนำโครงสร้างภายในโปรเจค อธิบายแต่ละส่วนการทำงาน EP2'],
            ['content' => 'Laravel ใช้งาน view (blade template), json ,pdf EP3'],
        ]
    ]);
});

Route::get('/control-structure', function(){
    return view('/example/control',[
        'records' => [1,2,3,4],
        'case' => 2,
    ]);
});

Route::get('/components', function(){
    return view('/example/component',[]);
});

Route::get('/foo',function(){
    return 'Hello World';
});

//require parameters
// Route::get('/user/{id}', function ($id) {
//     return 'User '.$id;
// });

//non require paremeter
// Route::get('user/{name?}', function ($name = 'ben (default)') {
//     return $name;
// });

Route::get('user/{name}', function ($name) {
    return $name.' is subset of A-Z,a-z';
})->where('name', '[A-Za-z]+');

Route::get('user/{id}', function ($id) {
    return $id.' is subset of 0-9';
})->where('id', '[0-9]+');

//combine 2 above in one
Route::get('user/{id}/{name}', function ($id, $name) {
    return 'id : '.$id.', name : '.$name.' is[0-9] and [A-Za-z]';
})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);