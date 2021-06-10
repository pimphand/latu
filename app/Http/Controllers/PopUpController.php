<?php

namespace App\Http\Controllers;

use App\Models\PopUp;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PopUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pop'] = PopUp::all();
        return view('admin.popup.index', $data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PopUp  $popUp
     * @return \Illuminate\Http\Response
     */
    public function show(PopUp $popUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PopUp  $popUp
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['popup'] = PopUp::find($id);
        return view('admin.popup.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PopUp  $popUp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $popup = PopUp::find($id);
        if ($request->hasFile("image")) {
            $imageName = Str::uuid();
            ImageController::popup($request->file("image"), $imageName, $popup->url);
            $popup->image = $imageName;
        }
        if ($request->has("status")) {
            $popup->status = $request->input("status");
        }
        $popup->save();
        return redirect()->route('popup.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PopUp  $popUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(PopUp $popUp)
    {
        //
    }
}
