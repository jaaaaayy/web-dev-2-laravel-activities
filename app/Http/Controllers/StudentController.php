<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.index', ['students' => $students]);
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:50',
            'middle_name' => 'nullable|string|max:50',
            'last_name' => 'required|string|max:50',
            'age' => 'required|integer',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'required|date',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }
}
