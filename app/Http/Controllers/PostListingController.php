<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vendorlistings;
use Validator;
use Session;
use File;
use Auth;



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

     public function update(Request $request, $id){
  
  $validator= validator::make($request->all(),[
          
            'title'=>'required',
            'listing_desc'=>'required',
            'phone_number'=>'required',
            
            'city'=>'required',
            'min_price'=>'required',
            'max_price'=>'required',
            
            'pix_upload'=>'mimes:jpg,jpeg,png,gif',
                      
            ]);

  
      $vendorpost= vendorlistings::find($id);

        if($validator->fails()){
            return redirect('dashboard/'.$vendorpost->id.'/edit')
            ->withInput()
            ->withErrors($validator);
        }
            //create post
        if(!is_null($request->file('pix_upload'))){
        $image= $request->file('pix_upload');
        $upload='img/post/';
        $filename= time().$image->getClientoriginalName();
        $path= move_uploaded_file ($image->getPathName(), $upload. $filename);
      }

           $vendorpost->title= $request->Input('title');
            $vendorpost->listing_desc= $request->Input('listing_desc');
            $vendorpost->phone_number= $request->Input('phone_number');
            $vendorpost->city= $request->Input('city');
            if(isset($filename)){
            $vendorpost->pix_upload=$filename;
          }   
            $vendorpost->min_price= $request->Input('min_price');
            $vendorpost->max_price= $request->Input('max_price');
            $vendorpost->save();
           
           Session::flash('post_update','listing updated');
          return redirect('dashboard');

      }
      public function edit($id){
        $listings = vendorlistings::findOrFail($id);
    
        // $vendorlist= $vendorlistings->find($id);
        return view('vendorlisting.edit')
        ->with('listings',$listings);
        
      }
     
     public function destroy($id){
      $vendorlistings = Auth::user()->vendorListings;
          $vendorlist= $vendorlistings->find($id);
          $vendorlist->delete();
          $imagepath='img/post/'.$vendorlist->pix_upload;
          file::delete($imagepath);
          Session::flash('delete_lisiting','listing deleted');
          return redirect('dashboard');
      }

}
