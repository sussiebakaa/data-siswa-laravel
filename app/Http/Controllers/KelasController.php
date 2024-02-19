<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index3()
    {
        return view('class.kelas', [
            "title" => "Kelas",
            "class" => Kelas::all()
        ]);
        
    }

    public function create()
    {
        return view('class.create', [
            "kelas" => Kelas::all()

        ]);
        
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required'       
        ]);
        $result = Kelas::create($validateData);
        if ($result) {
       return redirect('/class/kelas')->with('success', 'Data siswa berhasil di tambahkan !');
        }
    }

    public function destroy(Kelas $classes)
    {
       $result = Kelas::destroy($classes->id);

       if($result) {
        return redirect('/class/kelas')->with('success', 'Data berhasil dihapus!');
    } else {
        return redirect('/class/kelas')->with('error', 'Gagal menghapus data.');
    }
    
    }

    public function edit(Kelas $classes)
    {
        return view('class.edit', [
            "class" => $classes

        ]);
        
    }

    public function update(Request $request, Kelas $classes)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255'   
      
        ]);
        $result = Kelas::where('id', $classes -> id)->update($validateData);
        if ($result) {
       return redirect('/class/kelas')->with('success', 'Data siswa berhasil di update !');
        }

    }    



}
