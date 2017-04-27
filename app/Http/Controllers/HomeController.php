<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\categories;
use App\states;
use App\vendorlistings;
use Spatie\Fractal\Fractal;
use  App\Transformers\VendorListingsTransformer;
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

      public function keywordsearch(Request $request){
      $cat=$request->input('categories');
      $state=$request->input('states');
      $categories=categories::findAll();
      $states= states::findAll(); 
     $vendorlist1=vendorlistings::GetListingsById( $cat,$state);

     $vendorlist = Fractal::create($vendorlist1, new VendorListingsTransformer())->toArray();
     
     //$vendorlist1 = json_decode($vendorlist);
     //dd($vendorlist);
     //return response()->json(compact('vendorlist'));

     return view('home.search', compact('vendorlist','categories','states','vendorlist1'));

     }
   
      
      
}
