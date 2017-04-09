<?php

namespace App\Http\Controllers;
use Hash;
use Validator;
use Session;
use Illuminate\Support\Facades\Auth;
use App\user;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\categories;
use App\states;
use vendorlistings;


//use App\Http\controllers\controller;
class UserController extends Controller
{
    //

public  function login(Request $request){

        
    $this->validate($request, [
     'username' => 'required',
      'password'  => 'required'
      ]);

    $username= $request->username;
    $password=$request->password;

     $user  = User::where('username', $username)
                  ->orWhere('email', $username)->first();

   // $user = Auth::attempt($request->only(['email', 'password']));
  if ($user instanceOf User) {
         
          
    if (Hash::check($request->password, $user->password)) {
           Auth::login($user);
          
            return redirect()->route('my_dashboard');
             
             
    }
}
        Session::flash('login_failed','username/password is incorrect');
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
            'username'=>'required|max:100|unique:users',
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
            $user->username= $request->username;
            $user->password= bcrypt($request->password);
           //$this->resource()->attach($resource->id);
           $user->save();
            Session::flash('vendor_create','registration successful');
            return redirect('login');

      }
      

      public function logout(){
         Auth::logout();
        Session::flush();
        return redirect('/');
      }
      public function dashboard(){
        return view('user.dashboard');
      }

    }

