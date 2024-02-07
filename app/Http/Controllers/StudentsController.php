<?php

namespace App\Http\Controllers;


use App\Models\Kelas;
use App\Models\Student;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        return view('student/all', [
            "title" => "student",
            "students" => Student::all()
        ]);
        
    }

    public function show(Student $student)
    {
        return view('student.detail', [
            "title" => "detail-student",
            "students" => $student //route model binding
        ]);
        
    }

    public function create()
    {
        return view('student.create', [
            "title" => "add data",
            "kelas" => Kelas::all()


        ]);
        
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required|max:255',
            'kelas_id' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',        
        ]);
        $result = Student::create($validateData);
        if ($result) {
       return redirect('/student')->with('success', 'Data siswa berhasil di tambahkan !');
        }
    }

    public function destroy(Student $students)
    {
       $result = Student::destroy($students->id);

       if($result) {
        return redirect('/student')->with('success', 'Data berhasil dihapus!');
    } else {
        return redirect('/student')->with('error', 'Gagal menghapus data.');
    }
    
    }

        public function edit(Student $students)
        {
            return view('student.edit', [
                "title" => "edit data",
                "student" => $students,
                "kelas" => Kelas::all()
                

            ]);
            
        }

    public function update(Request $request, Student $students)
    {
        $validateData = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required|max:255',
            'kelas_id' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',        
        ]);
        $result = Student::where('id', $students -> id)->update($validateData);
        if ($result) {
       return redirect('/student')->with('success', 'Data siswa berhasil di update !');
        }

    }    


}
