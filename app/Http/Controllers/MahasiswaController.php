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
        return redirect('data-mahasiswa');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $dtMhs = Mahasiswa::findorfail($id);
        return view('Edit-mahasiswa',compact('dtMhs'));
    }
    
    public function update(Request $request, $id)
    { 
        $dtMhs = Mahasiswa::findorfail($id);
        $dtMhs->update ($request->all());
        return redirect('data-mahasiswa');
    } 

    public function destroy($id)
    {
        $dtMhs = Mahasiswa::findorfail($id);
        $dtMhs->delete();
        return back();
    }
}
