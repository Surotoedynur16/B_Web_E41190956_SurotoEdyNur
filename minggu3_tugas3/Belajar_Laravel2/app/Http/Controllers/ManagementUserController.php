<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
        $nama = "Suroto Edy Nur";

        $pelajaran = ["Algoritma & Pemograman", "kalkulus", "Pemograman Web"];

        return view('home', compact('nama', 'pelajaran'));
    }
}
