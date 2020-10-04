<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // index sử dựng phương thức get route name la student.index
    public function index()
    {
        $student = Student::all(); // lấy ra hết
        // // hoặc $student = Student::orderby('id','desc')->get();
        return view('students.list',['students'=>$student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // create sử dựng phương thức get route name la student.create
    public function create()
    {
        dd('StudentController index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    // show sử dựng phương thức get route name la student.show
    public function show( $student)
    {
        // // Neu chi truyen vao $student -> nhan duoc id cua Student
        $studentObjEloquentModel = Student::find($student);
        $studentObjQuyBuilderer = DB::table('students')->find($student);
        
        // // // Neu truyen Student $student -> thuc hien truy van tim Student co id = $student
        $studentObj = $student;
        
        return view('students.show', ['studentObj' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
