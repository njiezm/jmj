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
    return view('pages.home');
});

Route::get('/vibe', function () {
    return view('pages.vibe');
});

Route::get('/objets', function () {
    return view('pages.objets');
});

Route::get('/pricing', function () {
    return view('pages.pricing');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact', function (Request $request) {
    // Validation des données
    $validated = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email',
        'message' => 'required',
    ]);
    
    // Ici, vous pourriez ajouter l'envoi d'un email
    // Mail::to('hello@lajmj.studio')->send(new ContactForm($validated));
    
    // Redirection avec message de succès
    return redirect('/contact')->with('success', 'Merci pour votre message ! Nous vous répondrons dès que possible.');
});