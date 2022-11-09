<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function course(){
        $course = DB::table('course')->get();
        return view('course', compact('course'));
    }

    public function addForm(){
        return view('add_form');
    }

    public function home(){
        return view('home', [
            "picture" => "Leo.png",
            "name" => "Leonardo Caprio",
            "nim" => "2440015322",
            "class" => "Web Programming LA01-LEC",
            "email" => "leonardo.caprio@binus.ac.id",
            "gpa" => "3.67",
            "comserv" => "17",
            "sks" => "83"
        ]);
    }

    public function addLogic(Request $request){
        $request->validate([
            "code_course",
            "name_course",
            "class_course",
            "score_course"
        ]);

        DB::table('course')->insert([
            "code_course" => $request->code_course,
            "name_course" => $request->name_course,
            "class_course" => $request->class_course,
            "score_course" => $request->score_course
        ]);
        return redirect()->route('add_form_view');
    }
}
