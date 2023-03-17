<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('Companies');
})->name('stores');

Route::get('/managers_view', function() {
    return view('Managers');
})->name('managers');

Route::post('/posts', function(Request $request){
    $request->validate([
        'nombre'=>'required',
        'id' => 'required',
    ]);
    $messages = ["nombre.required" => "asdasdasd"];

    $id = $request->input('id');
    $name = $request->input('nombre');
    $phone = $request->input('telefono');
    $location = $request->input('location');
    $email = $request->input('email');
    $result = $id."//".$name."//".$phone."//".$email."//".$location;
    return redirect()->back()->with('success',$result,$messages);
})->name('post.stored');