<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua file dari folder public/image
        $files = File::files(public_path('image/laptop'));

        // Filter: hanya file gambar dan bukan logo1.png / logo2.png
        $imageFiles = array_filter($files, function ($file) {
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp', 'gif', 'avif'];
            $filename = strtolower($file->getFilename());
            return in_array($file->getExtension(), $allowedExtensions)
                && !in_array($filename, ['logo1.png', 'logo2.png', 'logo.png', 'background-asus.png', 'background-hp.png', 'banner-lenovo1.png', 'lenovo-background.png']);
        });

        // Ambil 18 gambar acak (boleh sama)
        $randomImages = [];
        for ($i = 0; $i < 18; $i++) {
            $randomImages[] = $imageFiles[array_rand($imageFiles)];
        }

        return view('home', [
            'carouselImages' => $randomImages
        ]);
    }
}
