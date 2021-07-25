<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function downloadCV($lang)
    {
        $file_name = "";
        switch($lang){
            case 'EN':
                $file_name = "cv_Mario_OviedoEN.pdf";
                break;
            case 'ES':
                $file_name = "cv_Mario_OviedoES.pdf";
                break;
        }
        $file = Storage::disk('public')->get($file_name);
        return response($file, 200)->header('Content-Type', 'application/pdf');
    }

}
