<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class WatermarkController extends Controller
{
    public static function AddWatermark($image_path)
    {
        $img = Image::make(public_path($image_path));

        /* insert watermark at bottom-right corner with 10px offset */
        $img->insert(public_path('images/watermark.jpg'), 'bottom-right', 10, 10);
        $img->encode('jpg');
        $img->save(public_path($image_path)); 

        return $image_path;
    }
}
