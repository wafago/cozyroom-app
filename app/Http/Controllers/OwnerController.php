<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kost;

class OwnerController extends Controller
{
    public function showUploadForm()
    {
        // return view('owner.upload-kost');
        return view('upload-kost');
    }

    public function uploadKost(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('kost_images', 'public');

        Kost::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imagePath,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('profile.show')->with('success', 'Kost uploaded successfully!');
    }
}
