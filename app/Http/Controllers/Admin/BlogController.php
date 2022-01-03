<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Blog;
use Session;


class BlogController extends Controller
{
    public function index(){

         $blog = Blog::all();
        return view("admin.blog.manage", compact('blog'));
    }

    public function create(){
         return view("admin.blog.create");
     }

    public function save(Request $request){

         $validateData = $request->validate([
            'title_blog'     => 'required',
            'category'       => 'required',
            'author'         => 'required',
            'content'        => 'required',
            'status'         => 'required',
            'pictureCaption' => 'required',
            'file'           => 'required',
          

        ]);
        if ($request->hasfile('file')) {
            $imageName = time().'.'.$request->file->extension();
            $request->file->move(public_path('image'),$imageName);

        }

        $data                   = new Blog;
        $data->title            = $request->title_blog;
        $data->category_id      = $request->category;
        $data->user_id          = Session::get('id');;
        $data->content          = $request->content;
        $data->status           = $request->status;
        $data->pictureCaption   = $request->pictureCaption;
        $data->picture          = $imageName;

    //dd($data);
       $data->save();
        return redirect()->back()->with('status','added');
    }


     public function unactive($id)
    {
        
        Blog::where('id', $id)
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
        $request = Blog::find($id);
        $request->delete();
        return redirect()->back()->with('message', 'blog delete successfully');
     
    }
      public function view($id)
    {
        $view = Blog::find($id);
       return view('admin.blog.view', compact('view'));
    }
       public function edit($id)
    {
       $blogEdit = Blog::where('id', $id)->first();

        return view('admin.blog.update', compact('blogEdit'));
    }
       public function update(Request $request, $id)
    {
        

         $validateData = $request->validate([
            
            'title_blog'    => 'required',
            'category_blog' => 'required',
            'author'        => 'required',
            'content'       => 'required',
            'status'        => 'required',

        ]);
        $data = Blog::find($id);

        $data->title        = $request->title_blog;
        $data->category_id    = $request->category_blog;
        $data->author       = $request->author;
        $data->content         = $request->content;
        $data->status           = $request->status;
        $data->save();
        //Session::flash('message', 'Update Information successfully');
         return redirect()->route('blog.index');
   
    }




}
