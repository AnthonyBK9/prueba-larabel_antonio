<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrupoController;

$proyectos = [
    ['title' => 'Proyecto1'],
    ['title' => 'Proyecto2'],
    ['title' => 'Proyecto3'],
    ['title' => 'Proyecto4'],

];
$nombre = 'Antonio';

Route::view('/', 'home', compact('proyectos'))->name('home');
Route::view('contacto', 'contact')->name('contact');
Route::view('nosotros', 'about')->name('about');
Route::resource('grupos', GrupoController::class);











// Route::get('/', function () {
//     // echo '<a href='". route('contacto') ."'>Contacto1</a><br>';
//     // echo '<a href='". route('contacto') ."'>Contacto2</a><br>';
//     // echo '<a href='". route('contacto') ."'>Contacto3</a><br>';
//     // echo '<a href='". route('contacto') ."'>Contacto4</a><br>';
//     // echo '<a href='". route('contacto') ."'>Contacto5</a><br>';
//     echo "<a href='". route('contacto') ."'>Contacto1</a>";
//     echo "<a href='". route('contacto') ."'>Contacto2</a>";
//     echo "<a href='". route('contacto') ."'>Contacto3</a>";
//     echo "<a href='". route('contacto') ."'>Contacto4</a>";
// });

// Route::get('/contactanos', function () {
//     return ('Sección Contactos');
// })->name('contacto');
