<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Imports\StudentImport;
use App\Register;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{


    public function classroomIndex()
    {
        $classrooms = Classroom::all();
        return view('admin.classroom.index', compact('classrooms'));
    }
    public function storeClassDetails(Request $request)
    {
        $data = $request->except('token') + ['user_id' => Auth::id()];
        Classroom::create($data);
        return back()->with('msg', 'Class Created Successfully');
    }
    public function editClassDetails(Request $request)
    {
        $id = $request->id;
        $data = $request->except('token', 'id') + ['user_id' => Auth::id()];

        Classroom::whereId($id)->update(['name' => $data['name'], 'description' => $data['description']]);
        return back()->with('msg', 'Class Edited Successfully');
    }
    public function deleteClassroomDetails($id)
    {
        Classroom::whereId($id)->delete();
        return back()->with('msg', 'Class Deleted Successfully');
    }

    public function  studentIndex()
    {
        $students = Student::all();
        $classrooms = Classroom::all();
        return view('admin.student.index', compact('students', 'classrooms'));
    }
    public function StoreStudentDetails(Request $request)
    {

        $data = $request->validate(
            [
                'class_id' => 'required|int',
                'file' => 'required|file|mimes:csv,xlsx'
            ]
        );

        $studentList =  Excel::toArray(new StudentImport,  request()->file('file'));
        foreach ($studentList[0] as $items) {
            $info = array('name' => $items[0], 'class_id' => $data['class_id']);
            Student::create($info);
        }
        return back()->with('msg', 'Class List Uploaded Successfully');
    }
    public function classList($id)
    {
        $studentlist = Student::where('class_id', $id)->get()->all();
        return view('admin.student.list', compact('studentlist','id'));
    }

    public function registerIndex()
    {
        if (Auth::user()->klass->classroom_ids != null) {
            $klass_ids = json_decode('[' . Auth::user()->klass->classroom_ids . ']', true);
            for ($x = 0; $x <= sizeof($klass_ids[0]) - 1; $x++) {
                $classes[] = Classroom::whereId($klass_ids[0][$x])->first();
            }
        } else {
            $classes = null;
        }

        return view('admin.register.index', compact('classes'));
    }
}
