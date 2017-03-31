<?php

namespace App\Http\Controllers;
use Validator;
use Session;
use Illuminate\Support\Facades\Auth;
use App\user;
use App\Http\Requests;
use Illuminate\Http\Request;
//use App\Http\controllers\controller;
class UserController extends Controller
{
    //

public  function login(Request $request){
    $this->validate($request, [
     'email' => 'required',
      'password'  => 'required'
      ]);

    $email= $request->email;
    $password=$request->password;

    $authenticator = Auth::attempt(['email'=>$email, 'password'=>$password]);
    dd($authenticator);
    if($authenticator){
      user::where('email', $request->email)->first();
      return redirect('dashboard');
    }
    Session::flash('vendor_login','username/password not valid');
      return redirect('login');

    }

   

public function create(){
      return view('register.create');
       
    }
public function store(Request $request){
  
  $validator= validator::make($request->all(),[
            'first_name'=>'required|max:20|min:2',
            'last_name'=>'required|max:20|min:3',
            'email'=>'required|max:100|unique:users',
            'password'=>'required|min:5',
           'repeat_password'=>'required|min:5|same:password',
            ]);

        if($validator->fails()){
            return redirect('register')
            ->withInput()
            ->withErrors($validator);
        }
            //create new Vendor
       
            $user = new User ;
            $user->first_name= $request->first_name;
            $user->last_name= $request->last_name;
            $user->email= $request->email;
            $user->password=$request->password;
           //$this->resource()->attach($resource->id);
           $user->save();
            Session::flash('vendor_create','registration successful');
            return redirect('login');

      }
      
      public function UserProfile(){
           $title = ucwords(Auth::user()->username );
           return view('user.dashboard')
           ->with('title',$title);
      }

      public function logout(){
        
      }
      public function dashboard(){
        return view('user.dashboard');
      }

    }

