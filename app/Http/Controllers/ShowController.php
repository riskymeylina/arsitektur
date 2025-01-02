<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function detail($id)
    {
        $images = Image::find($id);
        return view('project-details', compact('images'));
    }
    public function project()
    {
        $projects = Image::all();
        return view('project', compact('projects'));
    }

    public function index()
    {
        $projects = Image::all();
        return view('index', compact('projects'));
    }
}
