<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
       

        $student = new Student;

        $student->Student_ID = $request->Student_ID;
        $student->Student_Name = $request->Student_Name;
        $student->Email = $request->Email;
        $student->Session = $request->Session;

        $student->save();

        return redirect()->route('students.create')->with('success', 'Student registered successfully! ID: ' . $student->id);
    }

    public function edit(Student $student)
    { 
        return view('students.edit', ['student' => $student]); 
    }

    public function update(Request $request, Student $student)
    {

        
    
        $student->update([
            'Student_ID' => $request->Student_ID,
            'Student_Name' => $request->Student_Name,
            'Email' => $request->Email,
            'Session' => $request->Session,
        ]);
        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    public function delete(Student $student){ 
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }
}
