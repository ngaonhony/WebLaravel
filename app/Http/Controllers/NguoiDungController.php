<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NguoiDung;

class NguoiDungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nguoidung = NguoiDung::paginate(5);
        return view('admin.nguoidung.index',compact('nguoidung'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.nguoidung.create');
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
    public function edit(NguoiDung $nguoidung)
    {
        return view('admin.nguoidung.edit',compact('nguoidung'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NguoiDung $nguoidung)
    {
        $data = $request->all();
      
        $nguoidung->update($data);
       
        return redirect()->route('nguoidung.index')->with('thongbao','Cập nhật User thành công!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(NguoiDung $nguoidung)
    {
        $nguoidung->delete();
        return redirect()->route('nguoidung.index')->with('thongbao','Xóa sinh viên thành công!');
    }

    // public function nguoidung($id)
    // {
    //     $nguoidung = NguoiDung::find($id); // Lấy người dùng từ cơ sở dữ liệu bằng ID

    //     if ($nguoidung) {
    //         // Thực hiện các xử lý với thông tin người dùng
    //         return view('nguoidung', ['nguoidung' => $nguoidung]);
    //     } else {
    //         return redirect()->back()->with('error', 'Người dùng không tồn tại.');
    //     }
    // }
}