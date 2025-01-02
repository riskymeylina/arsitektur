<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gambar1' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'culture' => 'required',
            'concept' => 'required',
            'gambar2' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'gambar3' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'gambar4' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'challenge' => 'required',
            'solution' => 'required',
            'gambar5' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $data = $request->all();
        $data['gambar1'] = $request->file('gambar1')->store('uploads', 'public');
        $data['gambar2'] = $request->file('gambar2')->store('uploads', 'public');
        $data['gambar3'] = $request->file('gambar3')->store('uploads', 'public');
        $data['gambar4'] = $request->file('gambar4')->store('uploads', 'public');
        $data['gambar5'] = $request->file('gambar5')->store('uploads', 'public');

        $project = new Image();
        $project->name = $data['name'];
        $project->gambar1 = $data['gambar1'];
        $project->culture = $data['culture'];
        $project->concept = $data['concept'];
        $project->gambar2 = $data['gambar2'];
        $project->gambar3 = $data['gambar3'];
        $project->gambar4 = $data['gambar4'];
        $project->challenge = $data['challenge'];
        $project->solution = $data['solution'];
        $project->gambar5 = $data['gambar5'];
        $project->save();

        // Save the data to the database or perform any other necessary operations

        return redirect('/project')->with('success', 'Image uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
