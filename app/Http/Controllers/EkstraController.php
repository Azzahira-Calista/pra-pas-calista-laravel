<?php

namespace App\Http\Controllers;

use App\Models\Ekstra;
use Illuminate\Http\Request;

class EkstraController extends Controller
{
    public function index()
    {
        return view('Ekstra.ekstra', [
            "title" => "Ekstra_page",
            "ekstras" => Ekstra::all()
        ]);
    }

    public function show($ekstra)
    {
        return view('Ekstra.ekstraDetail', [
            "title" => "detail_ekstra",
            "ekstra" => Ekstra::find($ekstra)
        ]);
    }
}
