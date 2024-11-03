<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;



class ProfilController extends Controller
{
    public function index()
    {
        return "Hallo, saya adalah fungsi index dalam ProfilController";
    }

    public function create()
    {
        return "hallo, saya adalah fungsi Create dalam ProfilController";
    }

    public function edit($nama, $id)
    {
        return "Hallo, nama saya $nama $id";
    }
}
