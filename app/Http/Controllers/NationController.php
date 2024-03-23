<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nation;
class NationController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $nation = Nation::all();
       return view('admin.nation.index',compact('nation'))->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.nation.create');
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

        $existingCategory = Nation::where('name', $name)->first();
     
        if ($existingCategory) {
            // Giá trị đã tồn tại trong cơ sở dữ liệu
            return redirect()->route('nation.index')->with('thongbao', 'Quốc gia đã tồn tại!');
        }
     
        // Giá trị không tồn tại trong cơ sở dữ liệu, tạo danh mục mới
        Nation::create($request->all());
     
        return redirect()->route('nation.index')->with('thongbao', 'Thêm quốc gia thành công!');
     
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
    public function edit(Nation $nation)
    {
        return view('admin.nation.edit', compact('nation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Nation $nation)
    {
        $name = $request->input('name');

        $existingCategory = Nation::where('name', $name)->first();
     
        if ($existingCategory) {
            // Giá trị đã tồn tại trong cơ sở dữ liệu
            return redirect()->route('nation.index')->with('thongbao', 'Quốc gia đã tồn tại!');
        }
       $nation-> update( $request->all());
       return redirect()->route('nation.index')->with('thongbao','cập nhật quốc gia thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nation $nation)
    {
        $nation->delete();
        return redirect()->route('nation.index')->with('thongbao','xóa quốc gia thành công!');
    }
}
