<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addfood()
    {
        return view('admin.addproduct');
    }
    public function addfooddb(Request $request)
    {
        $product = new products();
        $product->title = $request->foodtitle;
        $product->description = $request->fooddesc;
        $product->price = $request->pricetitle;
        $product->quantity = $request->quantitytitle;
        $image = $request->image;
        //here we mix image name with time library for make it unique
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        //to store in database
        $product->image = $imagename;
        $product->save();
        return redirect()->back()->with('message', "product Added Successfully");
        return $request;
    }

    public function orders()
    {
        return view('admin.order');
    }
    public function showsproducts()
    {
        $all_products = products::all();
        return view('admin.showsproducts', compact('all_products'));
    }
}