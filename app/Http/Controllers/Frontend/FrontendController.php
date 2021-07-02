<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\About;
use App\Models\News;
use App\Models\Product;
use App\Models\Product_Category;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $kat = Product_Category::all();
        $news = News::limit(3)->latest();
        $slider = Slider::where('status', 0)->get();
        $pro = Product::limit(10)->get();
        $service = Service::all();
        return view('frontend.home', [
            'kat' => $kat,
            'service' => $service,
            'pro' => $pro,
            'slider' => $slider,
            'news' => $news,
        ]);
    }

    public function service()
    {
        return view('frontend.service');
    }

    public function about()
    {
        $about = About::first();
        return view('frontend.about', [
            'about' => $about
        ]);
    }

    public function produk()
    {
        $produk['produk'] = Product::all();
        return view('frontend.produk', $produk);
    }

    public function produkDetail($id)
    {
        $product = Product::findOrFail($id);
        return view('frontend.produkDetail', compact('product'));
    }

    public function kontak()
    {
        return view('frontend.kontak');
    }

    public function berita()
    {
        $news = News::all();
        $oli = Product::where('category_id', 1)->limit(3)->get();
        $ban = Product::where('category_id', 0)->limit(3)->get();
        return view('frontend.berita', [
            'ban' => $ban,
            'news' => $news,
            'oli' => $oli,

        ]);
    }

    public function beritaDetail($id)
    {
        $news = News::findOrFail($id);
        return view('frontend.beritaDetail', compact('news'));
    }
}
