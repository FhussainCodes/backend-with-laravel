<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentsController extends Controller
{
    public function studentData()  {
        $student = new Students();
        
        $student->name = "farrukh";
        $student->rollNo = 23;
        $student->program = "BSIT";

        return $student;
    }
}
