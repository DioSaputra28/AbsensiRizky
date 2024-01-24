<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Murid;
use App\Models\Absensi;
use App\Models\Rekap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $murid = Murid::all();
        return view('absen.create',[
            "title" => "Tambah Absen",
            "murid" => $murid
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {           
        $rekap = new Rekap;
        $rekap->tanggal = $request->tanggal;    
        $rekap->save();
        $tanggal = $request->tanggal;
        $idmurid = $request->id_murid;
        $keterangan = $request->keterangan;
        for ($i=0; $i < count($idmurid); $i++) { 
            $datas = new Absensi();
            $datas->id_murid = $idmurid[$i];
            $datas->tanggal = $tanggal;
            $datas->keterangan = $keterangan[$i];
            $datas->save();
        }
        return redirect()->route('absen.index')->with('sukses', "Murid baru ditambahkan");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tanggal = Rekap::findOrFail($id);
        $absen = Rekap::with('absen')->get();

        return view('absen.detail',[
            "title" => "Detail Murid",
            "tanggal" => $tanggal,
            "absen" => $absen,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('absen.edit',[ "title" => "Absensi", "absensi" => Absensi::findOrFail($id), "murid" => Murid::all()]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
