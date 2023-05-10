<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Expert;
class ExpertController extends Controller
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
        $data = Expert::where('user_id', $id)->get();
     return view('expert.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expert.create');
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
        ],[
            'name.required' =>"Field Must not be empty",
            'name.string' =>"Name Should be a String",
        ]);
        $cer = new Expert;

        $cer->name = $request->name;
        $cer->user_id = Auth::user()->id;
        if($cer->save()){
            return redirect('ex_summery_display');
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
        $data = Expert::findorFail($id);
        return view('expert.update',compact('data'));
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
        ],[
            'name.required' =>"Field Must not be empty",
        ]);
        $update = Expert::findorFail($id)->update([
            'name' => $request->name,
        ]);
        if($update)
        {
            return redirect('ex_summery_display')->with('update','Updated Successfully!');
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
        $del = Expert::findorFail($id)->delete();
        if($del)
        {
            return back()->with('delete','Deleted Successfully!');
        }
    }
}
