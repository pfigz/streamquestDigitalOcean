<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Http\Requests\StoreFavoriteRequest;
use App\Http\Requests\UpdateFavoriteRequest;

class FavoriteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Favorite::orderBy('created_at', 'DESC')->get();
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
     * @param  \App\Http\Requests\StoreFavoriteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFavoriteRequest $request, $id)
    {
        // if (auth()->user()->id == $id) {
            $newFavorite =  new Favorite;

            $newFavorite->user_id = $id;

            $newFavorite->fill($request->only(
                [
                    'user_id',
                    'title', 
                    'title_id', 
                    'backdrop_url', 
                    'plot_overview', 
                    'sources',
                ]
            ));
        
            $newFavorite->save();

            return $newFavorite;
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        if (auth()->user()->id == $id) {
            
            $favorites = Favorite::where('user_id', '=', $id)->get();
            return $favorites;
        }
        abort(403);

        // $favorites = Favorite::where('user_id', '=', $id)->get();
        //     return $favorites;
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function edit(Favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFavoriteRequest  $request
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFavoriteRequest $request, Favorite $favorite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favorite $favorite)
    {
        //
    }
}
