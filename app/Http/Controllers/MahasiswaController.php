<?php
namespace App\Http\Controllers;
use App\Mahasiswa;
use Illuminate\Http\Request;
class MahasiswaController extends Controller
{
    public function index()
    {
        $dtMhs = Mahasiswa::all();
        return view('Data-mahasiswa',compact('dtMhs'));
    } 
    public function create()
    {
        return view('Create-mahasiswa');
    }

    public function store(Request $request)
    {
        Mahasiswa::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);
        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}