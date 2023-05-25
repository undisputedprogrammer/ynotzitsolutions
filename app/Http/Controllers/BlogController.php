<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request){
        // Blog::create([
        //     'title'=>$request['title'],
        //     'content'=>$request['code'],
        //     'image'=>'image.png',

        // ]);

        if($request->file('blogimg')){
            $ext=$request->file('blogimg')->extension();
            $filename='blog_image'.now().'.'.$ext;
            $path=$request->file('blogimg')->storeAs('storage/images',$filename);

         }

         $blog=Blog::create([
            'title'=>$request['title'],
            'description'=>$request['description'],
            'content'=>$request['code'],
            'image'=>$filename,

        ]);

        return redirect('/displayblog'.'/'.$blog['id']);


    }

    public function single($id){
        $blog=Blog::where('id',$id)->get()->first();

        // dd($blog->content);
        $data=[
            'blog'=>$blog,
        ];

        return response()
            ->view('displayblog', [
                'data'=>$data
            ]);
    }
}
