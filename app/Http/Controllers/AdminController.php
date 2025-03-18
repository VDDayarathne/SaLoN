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

    public function edit_category($id)
    {
        $data = Category::find($id);
        return view('admin.edit_category', compact('data'));
    }

    public function update_category(Request $request,$id)
    {
        $data = category::find($id);
        $data->category_name=$request->category;
        $data->save();
        toastr()->timeOut(2000)->closeButton()->addSuccess('Category Updated Succesfully.');

        return redirect('/view_category');
    }

    public function add_product()
    {
        $category = Category::all();
        return view('admin.add_product', compact('category'));
    }

    public function upload_product(Request $request)
    {
        $data = new Product;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->qty;
        $data->category = $request->category;
        $image = $request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('products',$imagename);
            $data->image = $imagename;
        }
        $data->save();
        toastr()->timeOut(2000)->closeButton()->addSuccess('Item Added Succesfully.');

        return redirect()->back();
    } 

    public function view_product()
    {
        $product = Product::paginate(3);
        return view('admin.view_product',compact('product'));
    }

    public function delete_product($id)
    {
        $data = Product::find($id);

        $image_path = public_path('products/'.$data->image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }

        $data->delete();    
        toastr()->timeOut(2000)->closeButton()->addSuccess('Product Deleted Succesfully.');
        return redirect()->back();
    }

    public function update_product($id)
    {
        $data = Product::find($id);
        return view('admin.update_page', compact('data'));
    }

}
