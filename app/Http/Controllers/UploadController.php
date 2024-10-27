<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Img;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }
    public function upload(Request $request)
    {
        $request->validate([
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp,avif,pdf|max:32768',
        ]);

        $uploadedFiles = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('uploads');
                $uploadedFiles[] = $path;
            }
        }

        return response()->json([
            'success' => true,
            'paths' => $uploadedFiles,
        ]);
    }
}
