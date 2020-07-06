<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\klass;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LecturerController extends Controller
{
     public function assignClassIndex()
     {

        $users = User::get()->all();
         $klass = Classroom::all();
         if (Session::get('user_id') == null) {
            $data = null;
            $classRoles = null;
        } else {
            $data = $this->getSelectedClassLogic();
            if(  $data == null){
             $data =null;
            }
            $classRoles = $data[0];
        }
        $me = Session::get('id');
            return view('admin.klass.index',compact('klass','me','classRoles','data','users'));
     }

     public function getSelectedClassLogic()
     {
         $data = Session::get('user_id');
         $data = json_decode('[' . $data->classroom_ids . ']', true);
         return $data;
     }

     public function getUserclasses(Request $request)
     {

         Session::put('id', $request->user_id);
         $result = klass::where('user_id', $request->user_id)->first();
         Session::put('user_id', $result);
         return back();
     }

     public function Assignclass(Request $request)
     {

         $user_id = Session::get('id');

         $user_klass_exist = klass::where('user_id', $user_id)->get()->first();

         if ($user_klass_exist == null) {
             $data = implode(',', $request->class_id);
             $value = "[" . "" . $data . "" . "]";
             klass::create(['user_id' => $user_id, 'classroom_ids' => $value]);
         } else {

             Klass::whereId($user_klass_exist->id)->update(['classroom_ids' => $request->role_id]);
         }

         return back()->with('msg', 'Classrooms  Assigned  to Lecturer successfully');
     }
}
