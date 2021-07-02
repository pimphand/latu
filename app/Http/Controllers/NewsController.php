<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', [
            'news' => $news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News();
        $news->title = $request->title;
        $news->body = $request->body;
        if ($request->has("image")) {
            $imageName = Str::uuid();
            $news->image = $imageName;
            ImageController::news($request->file("image"), $imageName);
        }
        $news->published = $request->published;
        $news->save();

        return  redirect()->route('news.index')->with('success', "Berita berhasil ditambahkan");
    }

    public function unPublish($id)
    {
        $news = News::findOrFail($id);
        $news->published = 1;
        $news->save();

        return back()->with('success', "$news->title  dipublish");
    }

    public function Publish($id)
    {
        $news = News::findOrFail($id);
        $news->published = 0;
        $news->save();

        return back()->with('success', "$news->title Tidak dipublish");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data['news'] = News::findOrFail($id);
        return view('admin.news.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->title = $request->title;
        $news->body = $request->body;
        if ($request->has("image")) {
            $imageName = Str::uuid();
            $news->image = $imageName;
            ImageController::news($request->file("image"), $imageName);
        }
        $news->published = $request->published;
        $news->save();

        return  redirect()->route('news.index')->with('success', "Berita berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);
        return back()->with('danger', "Data berhasil dihapus");
    }
}
