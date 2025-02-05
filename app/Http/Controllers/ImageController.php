<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response; // Testing
use Intervention\Image\Drivers\Gd\Driver; // Testing
use Intervention\Image\Encoders\AutoEncoder;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('images.index', compact('images'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048', // Ensure it's an image
            'name' => 'required|string|max:255',
        ]);

        $image = $request->file('image');
        $filename = $request->name . '.' . $image->getClientOriginalExtension();
        $filepath = 'uploads/' . $filename;

        $manager = new ImageManager(new Driver());

        // Compress and save the image
        $compressedImage = $manager->read($image)
            ->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->encode(new AutoEncoder(quality: 75)); // 75% quality

        Storage::disk('public')->put($filepath, $compressedImage);

        // Save file path in database
        $imageModel = new Image();
        $imageModel->file_path = $filepath;
        $imageModel->save();
        $imageModel->id;

        return redirect()->back()->with(['success' => 'Image uploaded successfully!' , 'id' => $imageModel->id]);
    }

    public function show($id)
    {
        $image = Image::findOrFail($id);
        $imagePath = storage_path('app/public/storage/' . $image->file_path);

        if (!file_exists($imagePath)) {
            abort(404);
        }

        // Decompress image and return response
        $decompressedImage = ImageManager::read($imagePath)->encode('jpg');

        // Look into the imageintervention, regarding decompressing

        return response($decompressedImage)->header('Content-Type', 'image/jpeg');
    }
}

