<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\categories;
use App\states;



class HomeController extends Controller
{
   
    public function index()
    {
        return view('home.index');
    }

     public function login(){

        return view('home.login');
     }

      public function dashboard(){
        
          $categories=categories::findAll();

          $states= states::findAll(); 
        $vendorlistings = Auth::user()->vendorListings;
        return view('user.dashboard', compact('categories','states','vendorlistings'));
     }
}
