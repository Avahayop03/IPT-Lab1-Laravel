<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomsController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassroomStudentController;
use App\Http\Controllers\ExamTypesController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamResultsController;
use App\Http\Controllers\ExamAttendanceController;


Route::apiResource('teachers', TeacherController::class);
Route::apiResource('classrooms', ClassroomsController::class);
Route::apiResource('grades', GradeController::class);
Route::apiResource('parents', ParentController::class);
Route::apiResource('students', StudentController::class);
Route::apiResource('courses', CourseController::class);
Route::apiResource('classroomStudents', ClassroomStudentController::class);
Route::apiResource('examtypes', ExamTypesController::class);
Route::apiResource('exam', ExamController::class);
Route::apiResource('examResult', ExamResultsController::class);
Route::apiResource('examAttendance', ExamAttendanceController::class);