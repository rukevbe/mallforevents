<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\categories;
use App\states;
use App\vendorlistings;


class HomeController extends Controller
{
   
    public function index()
    {
         $categories=categories::findAll();
          $states= states::findAll(); 
       return view('home.index', compact('categories','states'));
    }

     public function login(){

        return view('home.login');
     }

      public function dashboard(){
           
        
        $categories=categories::findAll();
        $states= states::findAll(); 
        $vendorlistings = Auth::user()->vendorListings; 
        $vendorlistings= vendorlistings::orderBy('created_at', 'desc')->paginate(2); 
       return view('user.dashboard', compact('categories','states','vendorlistings'));
     }
     public function search(){
      $categories=categories::findAll();
      $states= states::findAll(); 

       return view('home.search', compact('categories','states'));
     }

     public function keyword(Request $query){
     $category=$request->input('category');
     $location=$request->input('state');

     }
      
      
}
