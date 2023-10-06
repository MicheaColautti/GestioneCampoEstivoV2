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
| ->middleware('auth');
|
*/

Route::get('/', function () {
    return view('Home');
})->name('Home');

Route::get('/Contatti', function () {
    return view('Contatti');
})->name('Contatti');


Route::get('/Su-di-noi', function () {
    return view('Su-di-noi');
})->name('Su-di-noi');


Route::get('/Campo-estivo/Esplora', function () {
    return view('Campo-estivo/Esplora');
})->name('Esplora')->middleware('auth');

Route::get('/Campo-estivo/Iscrizione-campo', function () {
    return view('Campo-estivo/Iscrizione-campo');
})->name('Iscrizione-campo')->middleware('auth');

Route::get('/Campo-estivo/Iscrizione-campo-Vol', function () {
    return view('Campo-estivo/Iscrizione-campo-Vol');
})->name('Iscrizione-campo-Vol')->middleware('auth');

Route::get('/Campo-estivo/ScegliRuolo', function () {
    return view('Campo-estivo/ScegliRuolo');
})->name('ScegliRuolo')->middleware('auth');

Route::get('/Campo-estivo/UserPage', function () {
    $leads = DB::table('person')->get();
	return View::make('/Campo-estivo/UserPage')->with('data', $leads);
	
})->name('UserPage')->middleware('auth');


Route::get('/Campo-estivo/UserPageExplore', function () {
	return View::make('/Campo-estivo/UserPageExplore');
})->name('UserPageExplore')->middleware('auth');

Route::get('/Campo-estivo/HomeCampo', function () {
    return view('Campo-estivo/HomeCampo');
})->name('HomeCampo');

Route::get('/Campo-estivo/Admin/Disponibilita', [\App\Http\Controllers\FullCalenderController::class, 'index'], function () {
    return view('Campo-estivo/Admin/Disponibilita');
})->name('Disponibilita')->middleware('auth');

Route::get('/Campo-estivo/Admin/NuovoCampo', function () {
    return view('Campo-estivo/Admin/NuovoCampo');
})->name('NuovoCampo')->middleware('auth');

Route::get('/Campo-estivo/Admin/Alloggi', function () {
    return view('Campo-estivo/Admin/Alloggi');
})->name('Alloggi')->middleware('auth');

Route::get('/Campo-estivo/Admin/Edizioni-precedenti', function () {
    return view('Campo-estivo/Admin/Edizioni-precedenti');
})->name('Edizioni-precedenti')->middleware('auth');


Route::post("/Campo-estivo/Iscrizione-campo", [\App\Http\Controllers\IscrizioneOspController::class, 'QueryAllData'])->name('QueryAllData');
Route::post("/Campo-estivo/Esplora", [\App\Http\Controllers\EsploraController::class, 'searchUser'])->name('searchUser');
Route::post("/Campo-estivo/UserPage", [\App\Http\Controllers\UserPageController::class, 'editData'])->name('editData');
Route::post("/Campo-estivo/UserPageExplore", [\App\Http\Controllers\UserPageExploreController::class, 'editOtherData'])->name('editOtherData');
Route::post('/Campo-estivo/Admin/Disponibilita/action', [\App\Http\Controllers\FullCalenderController::class, 'action']);
Route::post('/Campo-estivo/Admin/Disponibilita', [\App\Http\Controllers\FullCalenderController::class, 'checkCalendar'])->name('checkCalendar');;
Route::post("/Campo-estivo/Iscrizione-campo-Vol", [\App\Http\Controllers\IscrizioneVolController::class, 'QueryAllDataVol'])->name('QueryAllDataVol');


Route::get("/Campo-estivo/Esplora/{el}",['\App\Http\Controllers\EsploraController','orderBy'])->name('orderBy');
Route::get("/Campo-estivo/Esplora/{index}/{tok}",['\App\Http\Controllers\EsploraController', 'openPage'])->name('openPage');
Route::get("/Campo-estivo/HomeCampo/{field}", ['\App\Http\Controllers\HomePageController', 'editCamp'])->name('editCamp');
Route::get("/Campo-estivo/Admin/Alloggi/{roomData}",['\App\Http\Controllers\AlloggiController','viewRoomData'])->name('viewRoomData');

