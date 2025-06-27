<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //dashboard
    public function index(){
        return view('student.dashboard');
    }

    public function student_list(){
        $students = Student::orderBy('id', 'asc')->paginate(10);
        return view('admin.student-list', ['students' => $students]);
    }

    public function staff_student_list(){
        $students = Student::orderBy('id', 'asc')->paginate(10);
        return view('staff.student-list', ['students' => $students]);
    }

    public function delete_student(Student $student){
        try {
            $student->delete();
            return redirect()->route('admin.student-list')->with('success', 'Student deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
