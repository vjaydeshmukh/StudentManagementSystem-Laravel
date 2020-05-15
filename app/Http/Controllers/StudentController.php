<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student', ['students'=> $students, 'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        return view('student', ['students'=> $students, 'layout'=>'create', 'success'=>'pending']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->nim = $request->input('nim');
        $student->firstName = $request->input('firstName');
        $student->lastName = $request->input('lastName');
        $student->gender = $request->input('gender');
        $student->age = $request->input('age');
        $student->religion = $request->input('religion');
        $student->address = $request->input('address');
        $student->speciality = $request->input('speciality');
        $student->save();
        $students = Student::all();
        return view('student', ['students'=> $students, 'layout'=>'create', 'success'=>'ok']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::all();
        $student = Student::find($id);
        return view('student', ['students'=>$students, 'student'=>$student, 'layout'=>'edit', 'success'=>'pending']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->nim = $request->input('nim');
        $student->firstName = $request->input('firstName');
        $student->lastName = $request->input('lastName');
        $student->gender = $request->input('gender');
        $student->age = $request->input('age');
        $student->religion = $request->input('religion');
        $student->address = $request->input('address');
        $student->speciality = $request->input('speciality');
        $student->save();
        $students = Student::all();
        return view('student', ['students'=>$students, 'student'=>$student, 'layout'=>'edit', 'success'=>'ok']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_home($id)
    {
        $student = Student::find($id);
        if ($student != null) {
            // $student =Student::where('id', $id)->first();
            $student->delete();
            return redirect('/#studentList');
        }
    }

    public function delete_create($id)
    {
        $student = Student::find($id);
        if ($student != null) {
            // $student =Student::where('id', $id)->first();
            $student->delete();
            $students = Student::all();
            return view('student', ['students'=> $students, 'layout'=>'create']);
        }
    }


    public function about()
    {
        $students = Student::all();
        return view('student', ['students'=> $students, 'layout'=>'about']);
    }
}
