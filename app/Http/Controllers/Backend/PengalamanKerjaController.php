<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PengalamanKerjaController extends Controller
{
   public function index()
   {
      return view('backend.pengalaman_kerja.index');
   }

   public function create()
   {
      $pengalaman_kerja = null;
      return view('backend.pengalaman_kerja.create',compact('pengalaman_kerja'));
   }

   public function store(Request $request)
   {
        DB::table('pengalaman_kerja')->insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_keluar' => $request->tahun_keluar,
        ]);
        return redirect()->route('pengalaman_kerja.index')->with('success','Data berhasil disimpan');
   }
}
