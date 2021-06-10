<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $data['slider'] = Slider::all();
        return view('frontend.home', $data);
    }
}
