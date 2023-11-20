<?php

namespace App\Http\Controllers;

use App\Models\Pplg;
use Illuminate\Http\Request;

class PplgController extends Controller
{
    public function index()
    {
        return view('Pplg.pplg', [
            "title" => "pplg_page",
            "pplgs" => Pplg::all()
        ]);
    }

    public function show($pplg)
    {
        return view('Pplg.pplgDetail', [
            "title" => "detail_student",
            "pplgs" => Pplg::find($pplg)
        ]);
    }

    public function create()
    {
        return view('Pplg.create', [
            'title' => 'Add Class',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jumlah_murid' => 'required',
            'tahun_angktan' => 'required',
            'kelas' => 'required',
            'wali_kelas' => 'required',
            'ketua_kelas' => 'required',
        ]);

        $pplg = new Pplg();
        $pplg->nis = $validatedData['jumlah_murid'];
        $pplg->nama = $validatedData['tahun_angkatab'];
        $pplg->tanggal_lahir = $validatedData['kelas'];
        $pplg->kelas = $validatedData['wali_kelas'];
        $pplg->alamat = $validatedData['ketua_kelas'];

        $pplg->save();

        return redirect('/Pplg/pplg')->with('success', 'Student added successfully');
    }
}
