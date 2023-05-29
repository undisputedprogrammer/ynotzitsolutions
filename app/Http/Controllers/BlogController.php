<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function home(){
        return view('index',[
            'recents'=> Blog::orderBy('id', 'DESC')->get()->take(3),
        ]);
    }

    public function index(Request $request){
        // Blog::create([
        //     'title'=>$request['title'],
        //     'content'=>$request['code'],
        //     'image'=>'image.png',

        // ]);

        // dd($request);

        if($request->file('blogimg')){

            $ext=$request->file('blogimg')->extension();
            $filename='blog_image'.time().'.'.$ext;
            $path=$request->file('blogimg')->move('storage/images',$filename);

         }else{
            $filename='default-img.png';
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
                'data'=>$data,
                'recents'=> Blog::orderBy('id', 'DESC')->get()->take(3),
                'popular'=>Blog::orderBy('id', 'DESC')->get()->take(4),
            ]);
    }

    public function delete($id){
        $blog=Blog::find($id);
        $blog->delete();
        return redirect('/blogs');
    }

    public function update($id){
        $blog=Blog::find($id);
        $data=array('blog'=>$blog);
        return view('update',[
            'data'=>$data,
        ]);
    }

    public function save(Request $request,$id){
        // dd($request);
        $blog= Blog::find($id);
        $blog['title']=$request['title'];
        $blog['description']=$request['description'];
        $blog['content']= $request['code'];

        if($request->file('blogimg')){
            $oldfile=$blog['image'];
            $ext=$request->file('blogimg')->extension();
            $filename='blog_image'.time().'.'.$ext;
            $path=$request->file('blogimg')->move('storage/images',$filename);
            $blog['image']=$filename;
            unlink(storage_path('app/images/'.$oldfile));
        }

        $blog->save();

        return redirect('/displayblog'.'/'.$blog['id']);
    }

    public function all(){
        return view('blog-index',[
            'blogs'=>Blog::paginate(6),
        ]);
    }
}
