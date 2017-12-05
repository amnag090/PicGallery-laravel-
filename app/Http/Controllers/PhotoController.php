<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class PhotoController extends Controller
{
    private $table='photos';
    //
     //lists galleries

     


    public function create($gallery_id){
       return view('photo/create', compact('gallery_id'));
    }
    public function store(Request $request){
        //die('gallery/store');
        $title= $request->input('title');
        $gallery_id= $request->input('gallery_id');
        $location= $request->input('location');
        $description= $request->input('description');
        $image= $request->file('image');
        $owner_id=1;


        if($image){
                $image_filename=$image->getClientOriginalName();
                $image->move(public_path('images'),$image_filename);

        }
        else {
                $image_filename='noimage.jpg';
        }

        DB::table($this->table)->insert(
                [
                    'gallery_id'=>$gallery_id,                    
                    'title'=>$title,
                    'description'=>$description,
                    'location'=>$location,
                    'image'=>$image_filename,
                    'owner_id'=>$owner_id

                ]

        );

        
       Session::flash('message','photo added');
        

        return \Redirect::route('gallery.show',array('id'=>$gallery_id));

    }

    public function details($id){
        die($id);
    }
}
