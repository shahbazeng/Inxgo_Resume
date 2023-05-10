<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Skill;
class SkillController extends Controller
{
       public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $id = Auth::user()->id;
        $d = array();
        $data = Skill::where('user_id', $id)->get();
     return view('skill.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required','string'],
            'percentage' => ['required','integer','max:100'],
        ],[
            'name.required' =>"Field Must not be empty",
            'name.string' =>"Name Should be a String",
        ]);
        $cer = new Skill;

        $cer->name = $request->name;
        $cer->percentage = $request->percentage;
        $cer->user_id = Auth::user()->id;
        if($cer->save()){
            return redirect('skills_summery_display');
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
    public function edit($id)
    {
         $id = base64_decode($id);
        $data = Skill::findorFail($id);
        return view('skill.update',compact('data'));
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
            'name' => ['required','string'],
             'percentage' => ['required','integer','max:100'],
        ],[
            'name.required' =>"Field Must not be empty",
        ]);
        $update = Skill::findorFail($id)->update([
            'name' => $request->name,
            'percentage' => $request->percentage,

        ]);
        if($update)
        {
            return redirect('skills_summery_display')->with('update','Updated Successfully!');
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
        $del = Skill::findorFail($id)->delete();
        if($del)
        {
            return back()->with('delete','Deleted Successfully!');
        }
    }
}
