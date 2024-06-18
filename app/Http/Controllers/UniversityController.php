<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\College;
use App\Models\Department;
use App\Models\Program;


class UniversityController extends Controller
{
    //

    public function showAllStudent(){
        $students= Student::all();
        return view("students.index",compact("students"));
    }
    public function showStudent($id){
        $student = Student::find($id);
        return view('students.student',compact("student"));
    }
    public function showAllCollege() {
        $colleges = College::with('program')->get();
        return view('colleges.index', compact('colleges'));
    }
    public function showCollege($id){
        $college = College::find($id);
        $programs = $college->program;
        $departments = $college->department;
        return view('colleges.college',compact('college','programs','departments'));
    }

    public function showAllDepartment(){
        $departments = Department::with('college')->get();
        return view('departments.index',compact('departments'));
    }

    public function showDepartment($id){
        $department = Department::find($id);
        $college = $department->college;
        return view('departments.department',compact('department','college'));
    }
}
