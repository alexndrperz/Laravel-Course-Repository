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

Route::post('/posts/companies', function(Request $request){
    $id = $request->input('id_companie');
    $name = $request->input('nombre_companie');
    $phone = $request->input('telefono_companie');
    $location = $request->input('location_companie');
    $email = $request->input('email_companie');
    $result = $id."//".$name."//".$phone."//".$email."//".$location;
    return redirect()->back()->with('success',$result);
})->name('post.companies');

Route::post('/posts/managers', function(Request $request){
    $id = $request->input('id_managers');
    $name = $request->input('nombre_managers');
    $phone = $request->input('telefono_managers');
    $location = $request->input('location_managers');
    $email = $request->input('email_managers');
    $result = $id."//".$name."//".$phone."//".$email."//".$location;
    return redirect()->back()->with('success',$result);
})->name('post.managers');