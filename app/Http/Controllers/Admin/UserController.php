<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //To show all users
        $users = User::paginate(5);
        return view('admin.users.allusers' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //To redirect admin or moderator to add new user
        return view('admin.users.adduser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //To validate user inputs and store it in DB
        $validator = Validator::make($request->all() , [
            'image' => ['required'],
            'name' => ['required', 'min:4' , 'max:225'],
            'email' => ['required' , 'email' , 'unique:users'],
            'password' => ['required' , 'min:8'],
            'role' => ['required']
        ]);
        // ERROR: There is no validation rule named string
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->role = $request->input('role');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/users/' , $filename);
            $user->image = $filename;
        }
        else{
            return $request;
            $user->image = '';
        }
        $user->save();
        return redirect()->back()->with(['success' => 'User has been added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //To show user profile
        $user = User::findOrFail($id);
        return view('admin.users.userprofile' , compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //To edit user information
        $user = User::findOrFail($id);
        return view('admin.users.edituser', compact('user'));
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
        //To update user information: first validate user inputs
        $validator = Validator::make($request->all() , [
            'name' => ['required', 'min:4' , 'max:225'],
            'email' => ['required' , 'email'],
            'role' => ['required']
        ]);
        // ERROR: There is no validation rule named string
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        // Second insert new inputs in DB
        $user = User::findOrFail($id);
        $user->image = $request->input('image');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/users/' , $filename);
            $user->image = $filename;
        }
        else{
            return $request;
            $user->image = '';
        }
        $user->update();
        return redirect()->back()->with(['success' => 'User has been updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //To delete user
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with(['success' => 'User has been deleted']);
    }
}
