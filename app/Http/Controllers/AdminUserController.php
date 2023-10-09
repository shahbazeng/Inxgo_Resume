<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
class AdminUserController extends Controller
{
    public function index()
    {
    	$data=User::all();
    	return view('admin.user.index')->with(['data'=>$data]);
    }
    public function create()
    {
    	return view('admin.user.form');
    }
    public function store(Request $request)
    {
    	if(isset($request->id))
    	{
    		$validateArray=[
				'name'=>'required',
				'email'=>'required'
	      	];

    	}
    	else
    	{
	    	$validateArray=[
				'name'=>'required',
				'email'=>'required|unique:users',
				'password'=>'required'
	      	];

    	}
    	$this->validate($request,$validateArray);
    	if(isset($request->id))
    	{
    		$temp=$request->all();
    		unset($temp['_token']);
    		if(!$temp['password'])
    		{
    			unset($temp['password']);
    		}
    		$data=User::where('id',$request->id)->update($temp);
    		Session::flash('message', 'User update added !');
    		return redirect()->back();

    	}
    	else
    	{
	    	User::create($request->all());
    		Session::flash('message', 'User successfully added !'); 
    		return view('admin.user.form');
    	}
    	
    }
    public function edit($id)
    {
    	$data=User::where('id',$id)->first();
    	return view('admin.user.form')->with(['data'=>$data]);
    }
     public function delete($id)
    {
    	User::where('id',$id)->delete();
    	Session::flash('message', 'User successfully delete !'); 
    	return redirect()->back();
    }
    
}
