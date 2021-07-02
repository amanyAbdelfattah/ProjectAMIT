<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //

    public function index()
    {
        //To know how many users, products, categories and posts do we have
        $user = DB::table('users')->get()->count();
        $product = DB::table('products')->get()->count();
        $category = DB::table('categories')->get()->count();
        $post = DB::table('posts')->get()->count();
        return view("admin.dashboard" , compact('user','product','category' , 'post'));
    }
    public function show($id)
    {
        //To show user profile
        $user = User::findOrFail($id);
        return view('admin.users.userprofile' , compact('user'));
    }

}

