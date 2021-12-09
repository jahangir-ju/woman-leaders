<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{
    public function index(){
         $category = category::all();
        return view("admin.category.view",compact('category'));
    }
    public function create(){
 
        return view("admin.category.create");
    }
       public function save(Request $request){

          $validateData = $request->validate([
            'name'     => 'required',
            'status'   => 'required',
        

        ]);
 
        $data                = new category;
        $data->name         = $request->name;
        $data->status        = $request->status;
      

         $data->save();
        return redirect()->back()->with('status', 'added');
    }


     public function unactive_category($id)
    {
        
        category::where('id', $id)
            ->update(['status' => 0]);

        return redirect()->back();
    }
    public function active_category($id)
    {
        
         category::where('id', $id)
            ->update(['status' => 1]);
        return redirect()->back();

    }

}
