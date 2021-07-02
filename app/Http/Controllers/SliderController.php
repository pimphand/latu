<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider['slider'] = Slider::all();
        return view('admin.slider.index', $slider);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = new Slider();
        if ($request->has("slider")) {
            $imageName = Str::uuid();
            $product->url = $imageName;
            ImageController::slider($request->file("slider"), $imageName);
        }
        $product->status = $request->status;
        $product->save();

        return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['slider'] = Slider::findOrFail($id);

        return view('admin.slider.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        if ($request->hasFile("slider")) {
            $imageName = Str::uuid();
            ImageController::slider($request->file("slider"), $imageName, $slider->url);
            $slider->url = $imageName;
        }
        if ($request->has("status")) {
            $slider->status = $request->input("status");
        }
        $slider->save();
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Slider::findOrFail($id);
        Slider::destroy($id);
        Storage::delete('public/slider/' . $image->image);
        return back();
    }
}
