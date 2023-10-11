<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Session;
use Auth;
use Illuminate\Support\Facades\Hash;
class AdminContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user=Auth::user()->is_admin;
        if($user)
        {
    	   $data=Contact::all();
        }
        else
        {
            $data=[];
        }
    	return view('admin.contact.index')->with(['data'=>$data]);
    }
     public function delete($id)
    {
    	Contact::where('id',$id)->delete();
    	Session::flash('message', 'Message successfully delete !'); 
    	return redirect()->back();
    }
    
}
