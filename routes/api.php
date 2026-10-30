<?php

use App\Http\Controllers\MedicalFileController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


#create student
Route::post('student',[StudentController::class , 'store']);

##create medical file
Route::post('medicalFile',[MedicalFileController::class , 'store']);

#get student with his medical file

Route::get('student/medicalFile/{id}', [StudentController::class, 'getStudentWithMedicalFile']);


#get medical file only by student id
Route::get('student/medicalFileOnly/{id}', [MedicalFileController::class, 'getMedicalFileByStudent']);
