<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\References;
use Illuminate\Support\Facades\Auth;

class ReferencesController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $data = array();
        $data = References::all()->where('user_id',$id);
        return view('reference.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reference.create');
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
            'name' => ['required', 'max:255','string'],
            'year' => ['required', 'integer'],
            'year_end' => ['required', 'integer'],
        ],[
            'name.required' =>"Field Must not be empty",
            'year.required' =>"Field Must not be empty",
            'year.integer' =>"Enter valid Year!",
            'year_end.required' =>"Field Must not be empty",
            'year_end.integer' =>"Enter valid Year!",
        ]);
        $work = new References;

        $work->name = $request->name;
        $work->year = $request->year;
        $work->year_end = $request->year_end;
        $work->about = $request->about;
        $work->user_id = Auth::user()->id;
        if($work->save()){
            return redirect('references_summery_display');
        }else{
            echo 'error';
        }
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
        $id = base64_decode($id);
        $data = References::findorFail($id);
        return view('reference.update',compact('data'));
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
        $id = base64_decode($id);
        $request->validate([
            'name' => ['required', 'max:255','string'],
            'year' => ['required', 'integer'],
            'year_end' => ['required', 'integer'],
        ],[
            'name.required' =>"Field Must not be empty",
            'year.required' =>"Field Must not be empty",
            'year.integer' =>"Enter valid Year!",
            'year_end.required' =>"Field Must not be empty",
            'year_end.integer' =>"Enter valid Year!",
        ]);
        $update = References::findorFail($id)->update([
            'name' => $request->name,
            'year' => $request->year,
            'year_end' => $request->year_end,
            'about' => $request->about,
        ]);
        if($update)
        {
            return redirect('references_summery_display')->with('update','Updated Successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = base64_decode($id);
        $del = References::findorFail($id)->delete();
        if($del)
        {
            return back()->with('delete','Deleted Successfully!');
        }
    }
}
