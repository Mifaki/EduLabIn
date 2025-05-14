<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAsprakController extends Controller
{
    public function index()
    {
        return view('DashboardAsprak'); 
    }
}