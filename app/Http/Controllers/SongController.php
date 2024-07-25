<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Song::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'album_art' => 'required|url',
            'audio_url' => 'required|url',
        ]);

        return Song::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        //
        return $song;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        //
        $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'album_art' => 'required|url',
            'audio_url' => 'required|url',
        ]);

        $song->update($request->all());
        return $song;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        //
        $song->delete();
        return response()->json(null, 204);
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        return Song::where('title', 'like', "%$query%")
            ->orWhere('artist', 'like', "%$query%")
            ->get();
    }
}
