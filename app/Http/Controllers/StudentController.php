<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function index()
    {
        $students = DB::table("datamahasiswa")->select('id', 'nama', 'prodi')->get();
        return view("Students.index", ['students' => $students]);
    }
}
