<?php
namespace App\Http\Controllers;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('AdminDashboard');
    }

    public function profile()
    {
        return view('AdminProfile');
    }

    public function class ()
    {
        return view('AdminClass');
    }
}
