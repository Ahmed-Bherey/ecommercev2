<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MainDePartment;
use Illuminate\Http\Request;

class MainDePartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mainDepartments=MainDePartment::get();
        return view('admin.pages.mainDepartments.create',compact('mainDepartments'));

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
        MainDePartment::create($store_arr);

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
        $mainDepartment= MainDePartment::find($id);
        return view('admin.pages.mainDepartments.edit',compact('mainDepartment'));
    }


    public function update(Request $request, $id)
    {

        $mainDepartment=MainDePartment::find($id);
            $update_arr = [];
        foreach ($request->all() as $key => $value) {
            if ($key == '_token') continue;//skip token
            $update_arr[$key] = $value;
        }

        // $request->except('_token');

        if ($request->hasFile('photo')) {
            $update_arr['photo'] = $request->photo->store('public/mainDepartments');
        }
        $mainDepartment->update($update_arr);
        return redirect()->route('mainDepartments.create')->with(['success' => " تم  الحفظ"]);
    }

    public function delete($id)
    {
        $branches=MainDePartment::find($id);

        $branches->delete();
        return redirect()->route('departments.create')->with(['success' => " تم  الحذف"]);
    }
}
