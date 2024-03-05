<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phim;
use App\Models\Category;
use App\Models\Nation;
use App\Models\Genre;
class PhimController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $phim = Phim::all();
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
        $data = $request->all();
        $data['num_view'] = 0; // Đặt giá trị mặc định cho trường num_view
        $data['review'] = 0;
        Phim::create($data);
       return redirect()->route('phim.index')->with('thongbao', 'Thêm phim thành công');
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
    {
       $phim-> update( $request->all());
       return redirect()->route('phim.index')->with('thongbao','cập nhật phim thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(phim $phim)
    {
        $phim->delete();
        return redirect()->route('phim.index')->with('thongbao','xóa phim thành công!');
    }
}