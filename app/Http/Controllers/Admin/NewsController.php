<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use Session;

class NewsController extends Controller
{
    public function index(){
         $news1 = news::paginate(5);
        return view("admin.news.allnews",compact('news1'));
    }
    public function manage(){
        $news2 = news::paginate(5);
        return view("admin.news.manage",compact('news2'));
    }
    public function create(){
        return view('admin.news.create');
    }
     public function save(Request $request){

          $validateData      = $request->validate([
            'title'          => 'required',
            'category'       => 'required',
            'content'        => 'required',
            'file'           => 'required',
            'pictureCaption' => 'required',
            'status'         => 'required',
        ]);
       

          if ($request->hasfile('file')) {

          $imageName = $request->file->store('public');
        }

        $data                   = new news;
        $data->title            = $request->title;
        $data->category_id      = $request->category;
        $data->content          = $request->content;
        $data->status           =$request->status;
        $data->pictureCaption   =$request->pictureCaption;
        $data->file             = $imageName;

        // dd($data);
        $data->save();
        return redirect()->back()->with('status', 'store');;
    }
     public function unactive($id)
    {
        
        news::where('id', $id)
            ->update(['status' => 0]);

        return redirect()->back();
    }
    public function active($id)
    {
        
         news::where('id', $id)
            ->update(['status' => 1]);
        return redirect()->back();

    }
       public function destroy(Request $request, $id)

    {
        $request = news::find($id);
        $request->delete();
        return redirect()->back()->with('message', 'delete successfully');
     
    }
      public function view($id)
    {
        $view = news::find($id);
       return view('admin.news.view',compact('view'));
    }
       public function edit($id)
    {
       $edit = news::where('id', $id)->first();
        return view('admin.news.update', compact('edit'));
    }
       public function update(Request $request, $id){

          $validateData = $request->validate([
            'title'     => 'required',
            'category'  => 'required',
            'content'   => 'required',
            'status'    => 'required',
        ]);
       

        $data = news::find($id);

   
        $data->title        = $request->title;
        $data->category_id  = $request->category;
        $data->content      = $request->content;
        $data->status       = $request->status;
        // dd($data);

        $data->save();
        return redirect()->back()->with('status', 'updated new successfully');;
    }





}
