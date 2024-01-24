<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MuridController extends Controller
{   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $murid = Murid::orderBy('created_at','DESC')->get();
        return view('murid.index',[
            "title" => "Data Murid",
            "murid" => $murid
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('murid.create',[
            "title" => "Tambah Murid"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Murid::create($request->all());
        return redirect()->route('murid.index')->with('sukses', "Murid baru ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detail = Murid::findOrFail($id);
        return view('murid.detail',[
            "title" => "Detail Murid"
        ], compact('detail'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        return view('murid.edit',[
            "title" => "Edit Murid",
            "edit" => Murid::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = Murid::findOrFail($id);
        $update->update($request->all());
        return redirect()->route('murid.index')->with('sukses', "Murid Telah di edit");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Murid::findOrFail($id);
        $delete->delete();
        return redirect()->route('murid.index')->with('sukses', "Murid Telah di hapus");
    }
}
