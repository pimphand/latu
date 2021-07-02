<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public static function slider($image, $name, $oldName = null): void
    {
        if ($oldName) {
            Storage::delete('public/slider/' . $oldName);
        }
        Storage::putFileAs("public/slider", $image, $name);
    }

    public static function service($image, $name, $oldName = null): void
    {
        if ($oldName) {
            Storage::delete('public/service/' . $oldName);
        }
        Storage::putFileAs("public/service", $image, $name);
    }

    public static function popup($image, $name, $oldName = null): void
    {
        if ($oldName) {
            Storage::delete('public/popUp/' . $oldName);
        }
        Storage::putFileAs("public/popUp", $image, $name);
    }

    public static function news($image, $name, $oldName = null): void
    {
        if ($oldName) {
            Storage::delete('public/news/' . $oldName);
        }
        Storage::putFileAs("public/news", $image, $name);
    }

    public static function produk($image, $name, $oldName = null): void
    {
        if ($oldName) {
            Storage::delete('public/produk/' . $oldName);
        }
        Storage::putFileAs("public/produk", $image, $name);
    }

    public static function category($image, $name, $oldName = null): void
    {
        if ($oldName) {
            Storage::delete('public/category/' . $oldName);
        }
        Storage::putFileAs("public/category", $image, $name);
    }
}
