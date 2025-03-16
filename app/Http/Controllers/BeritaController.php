<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BeritaController extends Controller
{
    private $kategoris = [
        'terbaru', 'politik', 'hukum', 'ekonomi',
        'bola', 'olahraga', 'humaniora', 'lifestyle',
        'hiburan', 'dunia', 'tekno', 'otomotif'
    ];

    public function index()
    {
        return view('berita', [
            'kategori' => null,
            'berita' => [],
            'kategoris' => $this->kategoris
        ]);
    }

    public function kategori($kategori)
    {
        if (!in_array($kategori, $this->kategoris)) {
            abort(404, 'Kategori tidak ditemukan.');
        }

        $url = "https://api-berita-indonesia.vercel.app/antara/{$kategori}/";
        $response = Http::get($url);

        $data = $response->successful()
            ? $response->json()['data']['posts']
            : [];

        return view('berita', [
            'kategori' => $kategori,
            'berita' => $data,
            'kategoris' => $this->kategoris
        ]);
    }
}
