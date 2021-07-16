<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $technology = Technology::all();
        return view('welcome', compact('technology'));
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
