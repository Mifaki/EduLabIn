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

    public function dataClass()
    {
        return view('AdminDataClass');
    }

    public function assistantCandidate()
    {
        return view('AdminAssistantCandidate');
    }

    public function assistantData()
    {
        return view('AdminAssistantData');
    }

    public function announcement()
    {
        return view('AdminAnnouncement');
    }
}
