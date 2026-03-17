<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
        public function formdaftar() {
        return view('page.daftar');
    }
        public function dashboard(){
        return view('page.dashboard');
    }
}
