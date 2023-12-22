<?php

namespace App\Http\Controllers;

use App\Exports\KaryawanExport;
use App\Imports\KaryawanImport;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Karyawan::all();
        return view('index', compact('data'));
    }

    public function karyawanExport(){
        return Excel::download(new karyawanExport, 'karyawan.xls');
    }

    public function karyawanImport(Request $request){
        $file = $request->file('import');
        $namaFile = 'uploads/import/' . $file->getClientOriginalName();
        $file->move('uploads/import', $namaFile);

        $test = Excel::import(new KaryawanImport, public_path($namaFile));
        return back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        //
    }
}
