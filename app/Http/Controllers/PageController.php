<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Method untuk halaman utama
    public function index() {
        return 'Selamat Datang';
    }

    // Method untuk halaman about
    public function about() {
        return 'Nama: Devita Dwi Lestari, NIM: 2341760002';
    }

    // Method untuk halaman artikel dengan parameter id
    public function articles($id) {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}
