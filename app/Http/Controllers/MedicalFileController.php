<?php

namespace App\Http\Controllers;

use App\Models\MedicalFile;
use App\Models\Student;
use Illuminate\Http\Request;

class MedicalFileController extends Controller
{
    public function store(Request $request){

    $medicalFile= MedicalFile::query()->create([
        'student_id' => $request->student_id,
        'blood_type' => $request->blood_type ,
        'emrgency_phone_num'=> $request->emrgency_phone_num
    ]);

    return response()->json([
    'message' => 'medical file created successfully',
    'data' => $medicalFile
    ,
'status'=>201
]);

}


##get medical file only by student id
public function getMedicalFileByStudent($id)
{
    $student = Student::query()
        ->with('medicalFile')
        ->find($id);

    return response()->json($student->medicalFile);
}
}
