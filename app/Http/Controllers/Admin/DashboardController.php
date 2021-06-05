<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;


class DashboardController extends Controller
{
    //

    public function index()
    {
        $user = User::all();
        return view("admin.dashboard" , compact('user'));
    }

}

