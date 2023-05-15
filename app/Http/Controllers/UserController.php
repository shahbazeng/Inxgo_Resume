<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
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
        $data = User::all();
        return view('user.index',compact('data'));
    }
    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3'],
        ],[
        ]);
        $data=$request->all();
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect('user');
    }
    public function edit($id)
    {
        $id = base64_decode($id);
        $data = User::findorFail($id);
        return view('user.update',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $id = base64_decode($id);
        $request->validate([
           'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            // 'password' => ['required', 'string', 'min:3'],
        ],[
        ]);
        $data['name']=$request->name;
        $data['email']=$request->email;
        // dd($request->password);
        if($request->password != null && $request->password)
        {
            $data['password']=Hash::make($request->password);
        }
        User::findorFail($id)->update($data);
        return redirect('user')->with('update','Updated Successfully!');
    }
    public function destroy($id)
    {
        $id = base64_decode($id);
        $del = User::findorFail($id)->delete();
        if($del)
        {
            return back()->with('delete','Deleted Successfully!');
        }
    }
}
