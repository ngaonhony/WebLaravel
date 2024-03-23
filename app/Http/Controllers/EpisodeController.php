<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phim;
use App\Models\Episode;
use Illuminate\Support\Facades\File;
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
        $episode = new Episode;
        $episode->film_id = $request->input('film_id');
        $episode->episode_name = $request->input('episode_name');
        $episode->episode = $request->input('episode');
        $episode_check=Episode::where('episode',$episode->episode)->where('film_id',$episode->film_id)->count();
    if($episode_check>0){
        return redirect()->route('episode.index')->with('thongbao', 'Thông tin đã bị trùng');
    }else{
        if ($request->hasFile('content')) {
            $content = $request->file('content');
            $extension = $content->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $content->move(public_path('videos'), $filename);
            $episode->content= $filename;
        }
        $episode->save();
            return redirect()->route('episode.index')->with('thongbao', 'Thêm tap phim thành công!');
    }
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
    {       $episode= Episode::find($episode->id);
        if ($episode) {
            $episode->episode = $request->input('episode');
            $episode->episode_name = $request->input('episode_name');
            $episode->film_id = $request->input('film_id');
            // có file đính kèm trong form update thì tìm và xóa nếu k có thì k xóa
            $videocu = 'videos/' .$episode->content;
            $episode_check=Episode::where('episode',$episode->episode)->where('film_id',$episode->film_id)->count();
            if($episode_check>0){
                return redirect()->route('episode.index')->with('thongbao','Tap Phim đã bị trùng');
            }else{
                if (File::exists($videocu)) {
                    File::delete($videocu);
                }
                if ($request->hasFile('content')) {
                    $content = $request->file('content');
                    $extension = $content->getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    $content->move(public_path('images'), $filename);
                    $episode->content= $filename;
                }
    
    
            $episode->update();
            return redirect()->route('episode.index')->with('thongbao','Cập nhật tap phim thành công!'); 
            }
           
    }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Episode $episode)
    {  $videocu = 'vidoes/' .$episode->content;
        if (File::exists($videocu)) {
            File::delete($videocu);
        }
        $episode->delete();
   return redirect()->route('episode.index')->with('thongbao','Xóa tập phim thành công!');
    }
}
