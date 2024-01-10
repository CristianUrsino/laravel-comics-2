<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;

use App\Models\Comic;
use Illuminate\Http\Request;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

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
    public function store(StoreComicRequest $request)
    {
        // $formData = $request->all();
        // $request->validate([
        //     'title' => 'required|min:3|max:255',
        //     'price' => 'required|max:255',
        //     'series' => 'required|max:100',
        // ]);

        // $formData = $this->validation($request->all());

        $formData = $request->validated();

        $newComic = new Comic();
        $newComic->fill($formData);
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
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        {
            // $formData = $request->all();
            $formData = $request->validated();
            $comic->fill($formData);
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
        $comic->delete();
        return to_route('comics.index')->with('message', "il prodotto $comic->title è stato eliminato");
    }

    // private function validation($data)
    // {
    //     $validator = Validator::make($data,[
    //         'title' => 'required|min:3|max:255',
    //         'price' => 'required|max:255',
    //         'sale_date' => 'required',
    //         'series' => 'required|max:100',
    //         'type' => 'required'
    //     ],
    //     [
    //         'title.required' => 'il campo titolo è obbligatorio',
    //         'title.min' => 'il campo titolo deve avere almeno :min caratteri',
    //         'title.max' => 'il campo titolo deve avere almeno :max caratteri',
    //         'price.required' => 'il campo price è obbligatorio',
    //         'price.max' => 'il campo price deve avere almeno :max caratteri',
    //         'series.required' => 'il campo series è obbligatorio',
    //         'series.max' => 'il campo series deve avere almeno :max caratteri',
    //         'sale_date.required' => 'il campo sale_date è obbligatorio',
    //         'type' => 'il campo type è obbligatorio',

    //     ])->validate();
    //     return $validator;
    // }
}
