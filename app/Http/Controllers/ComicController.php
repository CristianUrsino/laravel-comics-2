<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        $products = Comic::all(); 
        return view('comics.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData = $request->all();
        $newComic = new Comic();
        $newComic->title = $formData['title'];
        $newComic->price = $formData["price"];
        $newComic->sale_date = $formData["sale_date"];
        $newComic->series = $formData["series"];
        $newComic->type = $formData["type"];
        $newComic->save();
        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        {
            $formData = $request->all();
            $comic->title = $formData['title'];
            $comic->price = $formData["price"];
            $comic->sale_date = $formData["sale_date"];
            $comic->series = $formData["series"];
            $comic->type = $formData["type"];
            $comic->update();
            return to_route('comics.show', $comic);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
