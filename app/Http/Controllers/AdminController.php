<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(request $request) 
    {
        $category = new Category;
        $category->category_name = $request->category;
        $category->save();

        toastr()->timeOut(2000)->closeButton()->addSuccess('Category Added Succesfully.');

        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);

        $data->delete();

        toastr()->timeOut(2000)->closeButton()->addSuccess('Category Deleted Succesfully.');
        return  redirect()->back();
    }

    

}
