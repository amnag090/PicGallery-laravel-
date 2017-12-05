<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class GalleryController extends Controller
{

    private $table='galleries';
    //lists galleries

    public function index(){
        
        $galleries=DB::table($this->table)->get();
        return view('gallery/index',compact('galleries'));
    }


    public function create(){
        return view('gallery/create');
    }
    public function store(Request $request){
        //die('gallery/store');
        $name= $request->input('name');
        $description= $request->input('description');
        $cover_img= $request->file('cover_img');
        $owner_id=1;


        if($cover_img){
                $cover_img_filename=$cover_img->getClientOriginalName();
                $cover_img->move(public_path('images'),$cover_img_filename);

        }
        else {
                $cover_img_filename='noimage.jpg';
        }

        DB::table($this->table)->insert(
                [
                    'name'=>$name,
                    'description'=>$description,
                    'cover_img'=>$cover_img_filename,
                    'owner_id'=>$owner_id

                ]

        );

        
       Session::flash('message','gallery added');
        

        return \Redirect::route('gallery.index');

    }

    public function show($id){
        $gallery=DB::table($this->table)->where('id',$id)->first();

        $photos=DB::table('photos')->where('gallery_id',$id)->get();

        return view('gallery/show',compact('gallery','photos'));    
    }
}


