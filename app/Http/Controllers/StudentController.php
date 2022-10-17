<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function get_all_student()
    {
        $Student = Student::all(); //fetch all products from DB
        return view('Student_manage', ['Student' => $Student]);
    }

    public function get_student_by_id($id)
    {
        $Student = Student::find($id);
        return view('Student_edit', ['Student' => $Student]);
    }
    
    public function store(Request $request)
    {  
        $request->validate([
            'fullname' => 'required',
            'birthday' => 'required',
            'address' => 'required'
           ]);
    
        $add = Student::create([
              'fullname' => $request->input('fullname'),
              'birthday' => $request->input('birthday'),
              'address'  => $request->input('address')
           ]);
    
            // session::flash('msg','new post added successfully!');
        
        // $student = new Student;
        // $student->fullname = $request->input('fullname');
        // $student->birthday = $request->input('birthday');
        // $student->address = $request->input('address');
        
        // $student->save();
        
        session::flash('Eimi Fukada','18/3/1998','Japan');
        return redirect('student_create',$add->id);


    }

    public function edit(Request $request,Student $Students)
    {
        $Students->update([
            'fullname' => $request->fullname,
            'address' => $request->address,
            'birthday' => $request->birthday
        ]);
        
        return redirect('student');
    }

}
