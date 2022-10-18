<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\SubDepartment;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view('user.pages.index');
    }


    public function contactUs()
    {
        return view('user.pages.contactUs');
    }

    public function products()
    {
        $products=Product::paginate(8);
        $subDepartments=SubDepartment::get();
        return view('user.pages.products',compact('products','subDepartments'));
    }
    public function singleProducts($id)
    {
        $product=Product::find($id);

        return view('user.pages.singleProduct',compact('product'));
    }
    public function about()
    {
        return view('user.pages.about');
    }
}
