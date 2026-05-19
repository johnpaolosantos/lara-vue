<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Resources\StudentResource;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $studentsResource = StudentResource::collection($students);
        return inertia('Students/Index', [
            'student' => $studentsResource
        ]);
    }
}
