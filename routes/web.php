<?php


use App\Livewire\Seting;
use App\Livewire\SetingPag;
use App\Livewire\HomePage;
use App\Livewire\DetallePage;
use App\Livewire\Generate;
use App\Livewire\RecomendadosPage;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.home-page');
// });



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::get('/sistema/pagina/scrapy', Seting::class)->name('scrapy');
    Route::get('/sistema/pagina/scrapy/pag', SetingPag::class)->name('scrapy.pag');


    Route::get('/', HomePage::class)->name('inicio');
Route::get('/detalle/libro/{id}', DetallePage::class)->name('detalle');
Route::get('/recomendados/libro/{id}', RecomendadosPage::class)->name('recomendados');

Route::get('/recomendaciones/libro', Generate::class)->name('recoment');

});

