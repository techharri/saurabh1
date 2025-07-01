<?php

namespace App\Http\Controllers;
use App\Models\Student;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('pages.about');
    }

    public function enquiry(){
        return view('pages.contact');
    }
   
    public function EnquiryStore(Request $request){
        $request->validate(
        ['student'=>'required',
        'email'=>'required',
        'contact'=>'required',
        'msg'=>'required'
    ]);
    
    // echo "<pre>";
    // print_r($request->all());

    $students=new student;
    $students->student=$request['student'];
    $students->email=$request['email'];
    $students->contact=$request['contact'];
    $students->msg=$request['msg'];
    $students->save();

    return redirect('/contact');

    }

    public function EnquiryList(){
        $students=student::all();
        $data=compact('students');
        return view('admin.students')->with($data);
    }
}
