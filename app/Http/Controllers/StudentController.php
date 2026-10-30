<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request){

    $student= Student::query()->create([
        'user_id' => $request->user_id,
        'age' => $request->age ,
    ]);

    return response()->json([
        'message' => 'student created successfully' ,
'data'=>$student ,
'status'=> 201
    ]);

}


##get student with his medical file
public function getStudentWithMedicalFile($id)
{
    $student = Student::query()
        ->with('medicalFile')
        ->find($id);

    return response()->json($student);
}


##



}
