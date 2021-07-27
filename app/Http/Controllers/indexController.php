<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class indexController extends Controller
{
    public function index()
    {
        $technologies = Technology::all();
        $posts = Post::all();
        return view('welcome', compact('technologies', 'posts'));
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
