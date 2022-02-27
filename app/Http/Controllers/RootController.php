<?php

namespace App\Http\Controllers;

use App\Root;
use App\Comment;
use App\Mainimage;
use App\Http\Requests\PostRequest;
use Storage;

class RootController extends Controller
{
    public function index(Root $root)
    {
       return view('tabiroots/index')->with(['roots' => $root->getPaginateByLimit()]);
    }
    
    public function show(Root $root)
    {
       $tabiimage=Mainimage::where("root_id",$root->id)->first()->image_main;
       return view('tabiroots/show')->with(['root' => $root, 'tabiimage' => $tabiimage]);
    }
    
    public function create()
    {
       return view('tabiroots/create');
    }
    
    public function store(PostRequest $request, Root $root, Mainimage $mainimage)
    {
       $input = $request['post'];
       $root->fill($input)->save();
       
       $comment = $request['comment'];
       $counter = 0;//カウンター
       foreach($comment["destination_name"] as $name){
           if($name!=null && $comment["root_comment"][$counter]!=null && $comment["destination_link"][$counter]!=null){
                $trip = [];
           $trip+=['root_id' => $root->id];
           $trip+=['destination_name' => $name];
           $trip+=['root_comment' => $comment["root_comment"][$counter]];
           $trip+=['destination_link' => $comment["destination_link"][$counter]];
           
           $comments=new Comment;
           $comments->fill($trip)->save();
           }
        $counter++;
       }

       //s3アップロード開始
       $image = $request->file('image');
       // バケットの`myprefix`フォルダへアップロード
       $path = Storage::disk('s3')->putFile('mainimages', $image, 'public');
       $tabi = [];
       $tabi+=['root_id' => $root->id];
       $tabi+=['image_main' => $path];

       $mainimage->fill($tabi)->save();

       return redirect('/roots/' .$root->id);
    }
    
    public function edit(Root $root)
    {
       return view('tabiroots/edit')->with(['root' => $root]);
    }
    
    public function update(PostRequest $request, Root $root)
    {
       $input_root = $request['post'];
       $root->fill($input_root)->save();
       return redirect('/roots/' . $root->id);
    }
    
    public function delete(Root $root)
    {
       Storage::disk('s3')->delete(Mainimage::where("root_id",$root->id)->first()->image_main);
       Mainimage::where("root_id",$root->id)->delete();
       $root->delete();
       return redirect('/');
    }

}
