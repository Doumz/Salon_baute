<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\webController;
use App\Http\Controllers\RouteNameController;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});

Route::view('blog', 'blog');
Route::view('contact', 'contact');
    Route::view('index', 'index');
Route::view('service', 'service');
Route::view('work', 'work');*/
//pages
Route::get('/' ,[RouteNameController::class, 'index'])->name('accueil');
Route::get('/about' ,[RouteNameController::class, 'about'])->name('about');
Route::get('/galery' ,[RouteNameController::class, 'blog'])->name('blog');
Route::get('/contact' ,[RouteNameController::class, 'contact'])->name('contact');
Route::get('/service' ,[RouteNameController::class, 'service'])->name('service');
Route::get('/realisation' ,[RouteNameController::class, 'barber_shop'])->name('barber');
Route::get('/Prendre-RDV' ,[RouteNameController::class, 'rdv'])->name('rdv');
Route::get('/Detail' ,[RouteNameController::class, 'detail'])->name('detail');
Route::get('/dashForm' ,[RouteNameController::class, 'dashForm'])->name('dashForm');
Route::get('/gallery' ,[RouteNameController::class, 'gallery'])->name('gallery');
Route::get('/detail_img' ,[RouteNameController::class, 'detail_img'])->name('detail_img');

//sous-pages
Route::get('/dashboard/forms' ,[RouteNameController::class, 'forms'])->name('forms.forms');
Route::get('/dashboard/realisations' ,[RouteNameController::class, 'dashReal'])->name('dashReal');
Route::get('/dashboard/dasPoint' ,[RouteNameController::class, 'dashPoint'])->name('dashPoint');

//Affichage
Route::get('/affichePrestattion' ,[webController::class, 'affiche_prest'])->name('affiche_prest');

//Add
Route::post('add/reservation', [webController::class, 'add_reservation'])->name("add.add_reservation");
Route::post('add/coiffure', [webController::class, 'add_coiffure'])->name("add.add_coiffure");
Route::post('add/make_up', [webController::class, 'add_make_up'])->name("add.add_make_up");
Route::post('add/massage', [webController::class, 'add_massage'])->name("add.add_massage");
Route::post('add/image', [webController::class, 'add_image'])->name("add.add_image");
Route::post('add/realisation', [webController::class, 'add_realisation'])->name("add.add_realisation");
Route::post('add/preocupation', [webController::class, 'add_preocupation'])->name("add.add_procupation"); 

//Update
Route::get('/update/make_up/{id}' ,[webController::class, 'update_make_up']);
Route::post('/update/make_up/{id}', [webController::class, 'edite_make_up']); 

//delete
Route::get('/delete/make_up/{id}' ,[webController::class, 'delete_makeup']);

//send_Mail 
Route::post('/contactMail',[MailController::class, 'send_mail'])->name('contactMail');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
