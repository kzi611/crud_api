<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->subject = $request->subject;
        $student->mark = $request->mark;
        $student->save();
    
        // return response()->json($student, 201);
        return response()->json('Added Successfully');
    }
}
