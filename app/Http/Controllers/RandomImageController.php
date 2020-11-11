<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class RandomImageController extends BaseController
{
    public static $imageName = array(
        "5d9cf1430531d.jpeg",
        "b36b003caad4406372266c04df77d48f.jpg",
        "Captura.JPG",
        "descarga (1).jpg",
        "descarga.jpg",
        "Einstein.JPG",
        "images.jpg",
        "inspir.JPG",
        "inspira.JPG",
        "inspirar.JPG",
        "inspirr.JPG",
        "lag.JPG",
        "motto.JPG",
        "paulo-coelho-frase.jpg",
        "silla.JPG",
        "sueños.JPG",
    );

    public function randomImages()
    {
        $totalQuotes = (count(RandomImageController::$imageName));
        $randomNumber = (rand(0, ($totalQuotes - 1)));
        $randomImage = RandomImageController::$imageName[$randomNumber];
        $data['imageName'] = $randomImage;
        $data['ip'] = gethostbyname(gethostname());
        $data['storage'] = Storage::disk('s3');

        return view('randomImage')->with("data", $data);
    }
}
