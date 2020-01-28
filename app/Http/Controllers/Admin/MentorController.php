<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mentor;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentors=Mentor::all();
        return view('admin.mentor.index',compact('mentors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('admin.mentor.create');
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
                'mentor_title'=>'required',
                'mentor_name'=>'required',
                'mentor_email'=>'required|email',
                'mentor_description'=>'required'
            ]);
        $mentor = new Mentor([
            'mentor_title'=>$request->get('mentor_title'),
            'mentor_name'=>$request->get('mentor_name'),
            'mentor_email'=>$request->get('mentor_email'),
            'mentor_description'=>$request->get('mentor_description')
        ]);
        $mentor->save();
        return redirect('/admin/mentors')->with('success', 'mentor has been added');
    
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
         $mentor = Mentor::find($id);
        return view('admin.mentor.edit',compact('mentor'));
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
                'mentor_title'=>'required',
                'mentor_name'=>'required',
                'mentor_email'=>'required|email',
                'mentor_description'=>'required'
        ]);
        $mentor = Mentor::find($id);
        $mentor->mentor_title = $request->get('mentor_title');
        $mentor->mentor_name = $request->get('mentor_name');
        $mentor->mentor_email = $request->get('mentor_email');
        $mentor->mentor_description = $request->get('mentor_description');
        $mentor->save();
        return redirect('/admin/mentors')->with('success', 'mentor has been updated');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mentor = Mentor::find($id);
        $mentor->delete();
        return redirect('/admin/mentors')->with('success', 'Mentor has been deleted Successfully');
   
    }
}
