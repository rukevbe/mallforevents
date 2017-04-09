<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vendorlistings;
use Validator;
use Session;


class PostListingController extends Controller
{
    
    
public function store(Request $request){
  
  $validator= validator::make($request->all(),[
          
            'title'=>'required',
            'listing_desc'=>'required',
            'phone_number'=>'required',
            'state_id'=>'required|max:20|integer',
            'city'=>'required',
            'min_price'=>'required',
            'max_price'=>'required',
            'category_id'=>'required|max:20|integer',
            'pix_upload'=>'required|mimes:jpg,jpeg,png,gif',
            
           
            ]);

        if($validator->fails()){
            return redirect('dashboard')
            ->withInput()
            ->withErrors($validator);
        }
            //create post
        $image= $request->file('pix_upload');
        $upload='img/post/';
        $filename= time().$image->getClientoriginalName();
        $path= move_uploaded_file ($image->getPathName(), $upload. $filename);
            $vendorpost = new vendorlistings;
            $vendorpost->title= $request->title;
            $vendorpost->user_id= $request->user_id;
            $vendorpost->category_id= $request->category_id;
            $vendorpost->listing_desc= $request->listing_desc;
            $vendorpost->phone_number= $request->phone_number;
            $vendorpost->state_id= $request->state_id;
            $vendorpost->city= $request->city;
            $vendorpost->pix_upload=$filename;
            $vendorpost->min_price= $request->min_price;
            $vendorpost->max_price= $request->max_price;
            $vendorpost->save();
           Session::flash('post_create','new lising created');
          return redirect('dashboard');

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
