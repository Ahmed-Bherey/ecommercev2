<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MainDePartment;
use App\Models\SubDepartment;
use Illuminate\Http\Request;

class subDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mainDepartments=MainDePartment::get();
        $subDepartments=SubDepartment::get();

        return view('admin.pages.subDepartments.create',compact('mainDepartments','subDepartments'));

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $store_arr = [];
        foreach ($request->all() as $key => $value) {
            if ($key == '_token') continue;//skip token
            $store_arr[$key] = $value;
        }

        // $request->except('_token');

        if ($request->hasFile('photo')) {
            $store_arr['photo'] = $request->photo->store('public/mainDepartments');
        }
        SubDepartment::create($store_arr);

        return redirect()->back()->with(['success' => " تم  بنجاح"]);
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
        $subDepartment= SubDepartment::find($id);
        $mainDepartments=MainDePartment::get();

        return view('admin.pages.subDepartments.edit',compact('subDepartment','mainDepartments'));
    }


    public function update(Request $request, $id)
    {

        $subDepartment=SubDepartment::find($id);
        foreach ($request->all() as $key => $value) {
            if ($key == '_token') continue;//skip token
            $update_arr[$key] = $value;
        }

        // $request->except('_token');

        if ($request->hasFile('photo')) {
            $update_arr['photo'] = $request->photo->store('public/mainDepartments');
        }
        $subDepartment->update($update_arr);
        return redirect()->route('subDepartments.create')->with(['success' => " تم  الحفظ"]);
    }

    public function delete($id)
    {
        $SubDepartment=SubDepartment::find($id);

        $SubDepartment->delete();
        return redirect()->route('subDepartments.create')->with(['success' => " تم  الحذف"]);
    }
}
