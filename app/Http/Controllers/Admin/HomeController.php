<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(User $user){

        return view('admin.home');
    }
}
