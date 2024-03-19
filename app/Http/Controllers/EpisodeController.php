<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phim;
use App\Models\Episode;
class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $episode = Episode::with('phim')->get();
        return view('admin.episode.index',compact('episode'))->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {$phim = Phim::all();
        return view('admin.episode.create',compact('phim'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Episode::create($request->all());
        return redirect()->route('episode.index')->with('thongbao', 'Thêm tap phim thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Episode $episode)
    {
        $phim = Phim::all();
        return view('admin.episode.edit',compact('phim','episode'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Episode $episode)
    {
        $episode->update($request->all());
        return redirect()->route('episode.index')->with('thongbao','Cập nhật tap phim thành công!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Episode $episode)
    {
        $episode->delete();
   return redirect()->route('episode.index')->with('thongbao','Xóa tập phim thành công!');
    }
}
