<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Auth;
use Illuminate\Support\Facades\Hash;
class AdminCVController extends Controller
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
    	   $data=User::with('education')->get();
        }
        else
        {
            $data=User::with('education')->where('id',Auth::user()->id)->get();
        }
    	return view('admin.cv.index')->with(['data'=>$data]);
    }
    
}
