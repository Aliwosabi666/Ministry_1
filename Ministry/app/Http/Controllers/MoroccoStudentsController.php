<?php

namespace App\Http\Controllers;

use App\Models\morocco_students;
use Illuminate\Http\Request;

class MoroccoStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/backend/student_morocco_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([

            'name' =>  'required|max:500',
            'year_of_dispatch' =>  'required|max:500',
            'Degree' => 'required|max:500',
            'specialization' =>  'required|max:500',
            'quarterly_grant' => 'required|max:500',
            'observation' =>  'required|max:500',
            'coverImage' => 'image|mimes:jpeg,bmp,png|max:1999'

        ]);

        if ($request->hasFile('coverImage')) {
            $file = $request->file('coverImage') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = 'cover_image' . '_' . time() . '.' . $ext ;
            $file->storeAs('public/coverImages', $filename);
          
        } else {

            $filename = 'noimage.png';
        }

        $mrc_std = new morocco_students() ;
        $mrc_std->name =  $request->name ;
        $mrc_std->year_of_dispatch =  $request->year_of_dispatch ;
        $mrc_std->Degree =  $request->Degree ;
        $mrc_std->specialization =  $request->specialization ;
        $mrc_std->quarterly_grant =  $request->quarterly_grant ;
        $mrc_std->observation =  $request->observation ;
        $mrc_std->image = $filename; 
        //$post->user_id = auth()->user()->id;
        

        $mrc_std->save();

        return redirect('/backend/student_morocco_all')->with('status', 'Post was created !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\morocco_students  $morocco_students
     * @return \Illuminate\Http\Response
     */
    public function show() {

        $mrc_std = morocco_students::all();
        return view('/backend/student_morocco_all', compact('mrc_std'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\morocco_students  $morocco_students
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mrc_std = morocco_students::find($id);
        return view('/backend/student_morocco_edit', compact('mrc_std'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\morocco_students  $morocco_students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) 
    {
        //
        $request->validate([

            'name' =>  'required|max:500',
            'year_of_dispatch' =>  'required|max:500',
            'Degree' => 'required|max:500',
            'specialization' =>  'required|max:500',
            'quarterly_grant' => 'required|max:500',
            'observation' =>  'required|max:500'
        ]);

        $mrc_std = morocco_students::find($id);
        $mrc_std->name =  $request->name ;
        $mrc_std->year_of_dispatch =  $request->year_of_dispatch ;
        $mrc_std->Degree =  $request->Degree ;
        $mrc_std->specialization =  $request->specialization ;
        $mrc_std->quarterly_grant =  $request->quarterly_grant ;
        $mrc_std->observation =  $request->observation ;

        $mrc_std->save();

        return redirect('/backend/student_morocco_all')->with('status', 'Post was updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\morocco_students  $morocco_students
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) 
    {
        //
        $mrc_std = morocco_students::find($id);
        $mrc_std->delete();
        return redirect('/backend/student_morocco_all')->with('status', 'Post was deleted !');

    }
}
