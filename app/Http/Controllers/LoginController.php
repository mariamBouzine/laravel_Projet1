<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    function index(){
        return view('login');
    }
    function registeration(){
        
    }
}
