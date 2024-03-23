<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phim;
use App\Models\Category;
use App\Models\Nation;
use App\Models\Genre;
use App\Models\Episode;
use Illuminate\Support\Facades\File;
class PhimController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $phim = Phim::with('genre', 'nation','category')->get();
       return view('admin.phim.index',compact('phim'))->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {$nation=Nation::all();
        $genre=Genre::all();
        $category=Category::all();
       return view('admin.phim.create',compact('category','nation','genre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phim = new Phim;
        $phim->name = $request->input('name');
        $phim->status = $request->input('status');
        $phim->director = $request->input('director');
        $phim->category_id = $request->input('category_id');
        $phim->type_movie = $request->input('genre_id');
        $phim->nation_id = $request->input('nation_id');
        $phim->year = $request->input('year');
        $phim->description = $request->input('description');
        $phim->duration = $request->input('duration');
        $phim_check=Phim::where('name',$phim->name)->count();
        if($phim_check>0){
            return redirect()->route('phim.index')->with('thongbao', 'Phim đã bị trùng');
        }else{
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $extension = $image->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $image->move(public_path('images'), $filename);
                $phim->image= $filename;
            }
        
            $phim->save();
            return redirect()->route('phim.index')->with('thongbao', 'Thêm phim thành công');
        }      
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(phim $phim)
    {$nation=Nation::all();
        $genre=Genre::all();
        $category=Category::all();
        return view('admin.phim.edit', compact('phim','genre','category','nation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,phim $phim)
    {$phim= Phim::find($phim->id);
        if ($phim) {
            $phim->name = $request->input('name');
        $phim->status = $request->input('status');
        $phim->director = $request->input('director');
        $phim->category_id = $request->input('category_id');
        $phim->genre_id = $request->input('genre_id');
        $phim->nation_id = $request->input('nation_id');
        $phim->year = $request->input('year');
        $phim->description = $request->input('description');
        $phim->trailer = $request->input('trailer');
            // có file đính kèm trong form update thì tìm và xóa nếu k có thì k xóa
            $anhcu = 'images/' .$phim->image;
        $phim_check=Phim::where('name',$phim->name)->count();
        if($phim_check>0){
            return redirect()->route('phim.index')->with('thongbao', 'Phim đã bị trùng');
        }else{
            if (File::exists($anhcu)) {
                File::delete($anhcu);
            }
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $extension = $image->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $image->move(public_path('images'), $filename);
                $phim->image= $filename;
            }
       $phim-> update();
       return redirect()->route('phim.index')->with('thongbao','cập nhật phim thành công!');
        }
            
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(phim $phim)
    { $anhcu = 'images/' .$phim->image;
        if (File::exists($anhcu)) {
            File::delete($anhcu);
        }
        Episode::whereIn('film_id',[$phim->id])->delete();
        $phim->delete();
        return redirect()->route('phim.index')->with('thongbao','xóa phim thành công!');
    }

}