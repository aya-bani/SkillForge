<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function create()
    {
        return view('student.create');
    }

    public function index()
    {   
        $students = Student::paginate(8);
        return view('student.index',[
            'students' => $students
        ]);
    }

    public function store(Request $request)
    {
    $request->validate([
        'full_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:students',
        'password' => 'required|string|min:8',
    ]);

    Student::create([
        'full_name' => $request->full_name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    return redirect()->route('student.index')
                     ->with('success', 'Student created successfully.');
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students,email,' . $student->id,
            'password' => 'nullable|string|min:8',
        ]);

        if ($request->filled('password')) {
            $student->update($request->all());
        } else {
            $student->update($request->except('password'));
        }

        return redirect()->route('student.index')->with('success', 'Student updated successfully.');
        }
    
        public function show(Student $student)
    {
        return view('student.show' , compact('student'));
    }

    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    public function destroy(Student $student)
    {
        $student ->delete();
        return redirect('/student')->with('success', 'Student deleted successfully');
    }
}
