<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function __invoke() {
        return 'Nama: Devita Dwi Lestari, <br>
        NIM: [NIM Anda]';
    }
}
