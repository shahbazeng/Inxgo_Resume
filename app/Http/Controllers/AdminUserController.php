<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Auth;
use Illuminate\Support\Facades\Hash;
class AdminUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function adminHome()
    {
        return view('admin.index');
    }
    public function index()
    {
        $user=Auth::user()->is_admin;
        if($user)
        {
    	   $data=User::all();
        }
        else
        {
            $data=User::where('id',Auth::user()->id)->get();
        }
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
            else
            {

             $temp['password']=Hash::make($temp['password']);
            }
            if(!isset($temp['is_admin']))
            {
                $temp['is_admin']=0;
            }
            if(isset($request->image))
            {
                // $imageName = time().'.'.$request->image->extension();  
                // $request->image->move(public_path('images'), $imageName);
                // $temp['image'] = $imageName;
            }
    		$data=User::where('id',$request->id)->update($temp);
    		Session::flash('message', 'User update added !');
    		return redirect()->back();

    	}
    	else
    	{
            $temp=$request->all();
            if(isset($request->image))
            {
                // $imageName = time().'.'.$request->image->extension();  
                // $request->image->move(public_path('images'), $imageName);
                // $temp['image'] = $imageName;
            }
            if(isset($temp['password']))
            {
                $temp['password']=Hash::make($temp['password']);
            }
            if(!isset($temp['is_admin']))
            {
                $temp['is_admin']=0;
            }
	    	User::create($temp);
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
