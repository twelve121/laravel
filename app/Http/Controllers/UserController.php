<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Topics;

class UserController extends Controller
{
    function index(){
        $topic = Topics::all();
        return view ('dashboard.user.index', compact('topic'));
    }
    
    function profile(){
        return view ('dashboard.user.profile');
    }

    function settings(){
        return view ('dashboard.user.settings');
    }
}
