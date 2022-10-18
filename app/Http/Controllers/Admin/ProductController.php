<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\SubDepartment;
use App\Models\MainDePartment;
use App\Http\Controllers\Controller;
use Rap2hpoutre\FastExcel\Facades\FastExcel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mainDepartments=MainDePartment::get();
        $products=Product::get();

        return view('admin.pages.products.create',compact('mainDepartments','products'));

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if ('xlsx' != strtolower($request->file->getClientOriginalExtension())) {
            return redirect()->back()->withErrors("File type must be xlsx.");
        }
        $MainDepartment =MainDePartment::find($request->mainDepartment_id);

        $SubDepartment = SubDepartment::find($request->subDepartment_id);

        $collection = (new FastExcel)->import($request->file, function ($line) use ($MainDepartment, $SubDepartment) {


                Product::updateOrCreate([
                    'mainDepartment_id'=>$MainDepartment->id,
                    'subDepartment_id'=>$SubDepartment->id ,
                    'Product_Name'=>$line['Product Name']],[
                    'Long_Description'=>$line['Long Description'],
                    'Short_Description'=>$line['Short Description'],
                    'Supplier_Source'=>$line['Supplier Source'],
                    'Variation_Name1'=>$line['Variation Name1'],
                    'Option_for_Variation1'=>$line['Option for Variation1'],
                    'Variation_Name2'=>$line['Variation Name2'],
                    'Option_for_Variation2'=>$line['Option for Variation2'],
                    'Variation_Name3'=>$line['Variation Name3'],
                    'Option_for_Variation3'=>$line['Option for Variation3'],
                    'Price'=>$line['Price'],
                    'Currency'=>$line['Currency'],
                    'Stock'=>$line['Stock'],
                    'SKU'=>$line['SKU'],
                    'Weight'=>$line['Weight'],
                    'Length'=>$line['Length'],
                    'Width'=>$line['Width'],
                    'Height'=>$line['Height'],
                    'Item_image1'=>$line['Item image1'],
                    'Item_image2'=>$line['Item image2'],
                    'Item_image3'=>$line['Item image3'],
                    'Item_image4'=>$line['Item image4'],
                    'Item_image5'=>$line['Item image5'],
                    'Item_image6'=>$line['Item image6'],
                    'Item_image7'=>$line['Item image7'],
                    'Item_image8'=>$line['Item image8'],
                    'Item_image9'=>$line['Item image9'],
                ]);



        });
        return redirect()->back()->with(['success' => 'تم الاضافه بنجاح']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product= Product::find($id);
        $mainDepartments=MainDePartment::get();

        return view('admin.pages.products.edit',compact('product','mainDepartments'));
    }


    public function update(Request $request, $id)
    {

        $Product=Product::find($id);
        $Product->update(
            [
                "mainDepartment_id" => $request->mainDepartment_id,
                'subDepartment_id'=> $request->subDepartment_id,
                'Product_Name'=> $request->Product_Name,
                'Product_NameAr'=> $request->Product_NameAr,
                'Long_Description'=> $request->Long_Description,
                'Short_Description'=> $request->Short_Description,
                'Supplier_Source'=> $request->Supplier_Source,
                'Variation_Name1'=> $request->Variation_Name1,
                'Option_for_Variation1'=> $request->Option_for_Variation1,
                'Variation_Name2'=> $request->Variation_Name2,
                'Option_for_Variation2'=> $request->Option_for_Variation2,
                'Variation_Name3'=> $request->Variation_Name3,
                'Option_for_Variation3'=> $request->Option_for_Variation3,
                'Price'=> $request->Price,
                'Currency'=> $request->Currency,
                'Stock'=> $request->Stock,
                'SKU'=> $request->SKU,
                'Weight'=> $request->Weight,
                'Length'=> $request->Length,
                'Width'=> $request->Width,
                'Height'=> $request->Height,
                'Item_image1'=> $request->Item_image1,
                'Item_image2'=> $request->Item_image2,
                'Item_image3'=> $request->Item_image3,
                'Item_image4'=> $request->Item_image4,
                'Item_image5'=> $request->Item_image5,
                'Item_image6'=> $request->Item_image6,
                'Item_image7'=> $request->Item_image7,
                'Item_image8'=> $request->Item_image8,
                'Item_image9'=> $request->Item_image9,
            ]);
        return redirect()->route('products.create')->with(['success' => " تم  الحفظ"]);
    }

    public function delete($id)
    {
        $Product=Product::find($id);

        $Product->delete();
        return redirect()->route('products.create')->with(['success' => " تم  الحذف"]);
    }
    public function ajax($id){

        $data=SubDepartment::where('mainDepartment_id',$id)->get();
        return json_encode($data);

    }
}
