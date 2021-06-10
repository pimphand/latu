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

    public static function popup($image, $name, $oldName = null): void
    {
        if ($oldName) {
            Storage::delete('public/popUp/' . $oldName);
        }
        Storage::putFileAs("public/popUp", $image, $name);
    }

    public static function blog($image, $name, $oldName = null): void
    {
        if ($oldName) {
            Storage::delete('public/blog/' . $oldName);
        }
        Storage::putFileAs("public/blog", $image, $name);
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
