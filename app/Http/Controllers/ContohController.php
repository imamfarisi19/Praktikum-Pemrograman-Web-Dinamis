<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function index()
    {
        $varNama = "Imam Farisi";
        return view('halaman-satu',compact('varNama'));
    }
}