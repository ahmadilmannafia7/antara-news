<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

Route::get('/', [BeritaController::class, 'index']);
Route::get('/kategori/{kategori}', [BeritaController::class, 'kategori']);
// use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('berita', ['kategori' => null, 'berita' => []]);
// });

// Route::get('/kategori/{kategori}', function ($kategori) {
//     $url = "https://api-berita-indonesia.vercel.app/antara/{$kategori}/";
//     $response = Http::get($url);

//     if ($response->successful()) {
//         $data = $response->json()['data']['posts'];
//     } else {
//         $data = [];
//     }

//     return view('berita', ['kategori' => $kategori, 'berita' => $data]);
// });
