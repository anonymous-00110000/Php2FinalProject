<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\AddStudent;
class MainController extends Controller
{
  public  function home() {
      $data=AddStudent::all()->toArray();
        return view('home',compact('data'));
    }

public function addStud(){
    return view('AddStudent');
}

    public function Login(Request $request){
        $this->validate($request, [
            'username'   => 'required',
            'password'  => 'required|alphaNum|min:3'
           ]);

           $log_data=$request->all();

           if(Auth::attempt(['username'=>$log_data['username'],'password'=>$log_data['password']])){
            $request->session()->put('SessionId', $log_data['username']);
            return redirect('/');
           }

    }
    public function Store(Request $request){
        $this->validate($request, [
            'StudentID'=>'required',
            'StudentLname'=>'required',
            'StudentFname'=>'required',
            'StudentMname'=>'required',
            'StudentBirthday'=>'required',
            'StudentEmail'=>'required',
            'StudentAddress'=>'required',
            'StudentMNumber'=>'required',
            'StudentCourse'=>'required',
            'Male'=>'',
            'Female'=>'',
        ]);
        $g='';
        if($request['Male']=='M'){
            $g='Male';
        }else{
            $g='Female';
        }
        $data=$request->all();
        $data['Id_number']=$data['StudentID'];
        $data['Lname']=$data['StudentLname'];
        $data['Fname']=$data['StudentFname'];
        $data['Middle']=$data['StudentMname'];
        $data['Birthday']=$data['StudentBirthday'];
        $data['email']=$data['StudentEmail'];
        $data['address']=$data['StudentAddress'];
        $data['Mnumber']=$data['StudentMNumber'];
        $data['gender']=$g;
        $data['course']=$data['StudentCourse'];

        AddStudent::create($data);
        return redirect('/AddStudent');
    }


    public function logout()
    {
          Auth::logout();
          session()->forget('SessionId');
          return redirect('/');
    }
}
