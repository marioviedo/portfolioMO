<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function viewProjects()
    {
        return view('projects');
    }

    public function viewContact()
    {
        return view('contact');
    }
}
