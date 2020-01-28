<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\College;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colleges=College::all();
        return view('admin.colleges.index',compact('colleges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.colleges.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $request->validate([
                'college_name'=>'required',
                'college_website'=>'required|url'  
            ]);
        $college = new College([
            'college_name'=>$request->get('college_name'),
            'college_website'=>$request->get('college_website')
            ]);
        $college->save();
        return redirect('/admin/colleges')->with('success', 'College has been added');
    
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
        $colleges = College::find($id);
        return view('admin.colleges.edit',compact('colleges'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $request->validate([
                'college_name'=>'required',
                'college_website'=>'required|url'  
            ]);
             $college = College::find($id);
      
        $college->college_name = $request->get('college_name');
        $college->college_website = $request->get('college_website');
      
        $college->save();
        return redirect('/admin/colleges')->with('success', 'college has been updated');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $college = College::find($id);
        $college->delete();
        return redirect('/admin/colleges')->with('success', 'college has been deleted Successfully');
   
    }
}
