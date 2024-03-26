<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
class GenreController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $genre = Genre::all()->reverse();
       return view('admin.genre.index',compact('genre'))->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.genre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');

        $existingCategory = Genre::where('name', $name)->first();
     
        if ($existingCategory) {
            // Giá trị đã tồn tại trong cơ sở dữ liệu
            return redirect()->route('genre.index')->with('thongbao', 'Thể lọai đã tồn tại!');
        }
     
        // Giá trị không tồn tại trong cơ sở dữ liệu, tạo danh mục mới
        $nation = new Genre();
        $nation->name = $name;
        $nation->save();
        return redirect()->route('genre.index')->with('thongbao', 'Thêm thể loại thành công!');
     
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
    public function edit(Genre $genre)
    {
        return view('admin.genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Genre $genre)
    {
        $name = $request->input('name');

        $existingCategory = Genre::where('name', $name)->first();
     
        if ($existingCategory) {
            // Giá trị đã tồn tại trong cơ sở dữ liệu
            return redirect()->route('genre.index')->with('thongbao', 'Thể loại đã tồn tại!');
        }
       $genre-> update();
       return redirect()->route('genre.index')->with('thongbao','cập nhật thể loại thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect()->route('genre.index')->with('thongbao','xóa thể loại thành công!');
    }
}
