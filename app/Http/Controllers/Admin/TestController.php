<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Test;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests=Test::all();
        return view('admin.tests.index',compact('tests'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->request()->validate([ 
        'question'=>'required',
        'option_a'=>'required',
        'option_b'=>'required',
        'option_c'=>'required',
        'option_d'=>'required',
        'answer'=>'required'
        ]);
        $test= new Test([
        'question'=>$request->get('question'),
        'option_a'=>$request->get('option_a'),
        'option_b'=>$request->get('option_b'),
        'option_c'=>$request->get('option_c'),
        'option_d'=>$request->get('option_d'),
        'answer'=>$request->get('answer')
        ]);
        $test->save();
        return redirect('/admin/tests')->with('success', 'Test Question Added Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $tests = Test::find($id);
        return view('admin.tests.edit', compact('tests'));
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
        $request->request()->validate([ 
            'question'=>'required',
            'option_a'=>'required',
            'option_b'=>'required',
            'option_c'=>'required',
            'option_d'=>'required',
            'answer'=>'required'
        ]);
         $test=Test::find($id);
         $test->question= $request->get('question');
         $test->option_a=$request->get('option_a');
         $test->option_b=$request->get('option_b');
         $test->option_c=$request->get('option_c');
         $test->option_d=$request->get('option_d');
         $test->answer=$request->get('answer');
         $test->save();
         return redirect('/admin/tests')->with('success','update successful');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test= Test::find($id);
        $test->delete();
        return redirect('/admin/tests')->with('success','question Deleted Successfully');
    }
}
