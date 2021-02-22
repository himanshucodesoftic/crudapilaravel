<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;
class userscontroller extends Controller
{
    public function index()
    {

        return user::all();
    }
    public function name()
    {

        return["name"=>"anil sidhu","love"=>"himansh"];
    }
}
