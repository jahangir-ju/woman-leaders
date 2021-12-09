<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Blog;
use Session;


class BlogController extends Controller
{
    public function index(){

         $blog = blog::all();
        return view("admin.blog.manage", compact('blog'));
    }

    public function create(){
         return view("admin.blog.create");
     }

    public function save(Request $request){

         $validateData = $request->validate([
            'title_blog'     => 'required',
            'category_blog'  => 'required',
            'author'         => 'required',
            'content'        => 'required',
            'status'         => 'required',
            'file'           => 'required',
          

        ]);
        if ($request->hasfile('file')) {

            $imageName = $request->file->store('public');
        }

        $data                = new blog;
        $data->title         = $request->title_blog;
        $data->category_id   = $request->category_blog;
        $data->author       = $request->author;
        $data->content       = $request->content;
        $data->status        = $request->status;
        $data->picture       = $imageName;

    //dd($data);
       $data->save();
        return redirect()->back()->with('status','added');
    }


     public function unactive($id)
    {
        
        blog::where('id', $id)
            ->update(['status' => 0]);

        return redirect()->back();
    }
    public function active($id)
    {
        
         blog::where('id', $id)
            ->update(['status' => 1]);
        return redirect()->back();

    }
      public function destroy(Request $request, $id)

    {
        $request = blog::find($id);
        $request->delete();
        return redirect()->back()->with('message', 'blog delete successfully');
     
    }
      public function view($id)
    {
        $view = blog::find($id);
       return view('admin.blog.view', compact('view'));
    }
       public function edit($id)
    {
       $blog_edit = blog::where('id', $id)->first();
        return view('admin.blog.update', compact('blog_edit'));
    }
        public function update(Request $request, $id)
    {
      return "update";
    }




}
