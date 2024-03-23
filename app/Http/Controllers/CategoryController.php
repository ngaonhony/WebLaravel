<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
      /** 
    
    */
    public function index()
{
    $category = Category::all();
    return view('admin.category.index',compact('category'))->with('i', (request()->input('page', 1) -1) *5);
}
public function create()
{
    return view('admin.category.create');
}

public function store(Request $request)
{
   $name = $request->input('name');

   $existingCategory = Category::where('name', $name)->first();

   if ($existingCategory) {
       // Giá trị đã tồn tại trong cơ sở dữ liệu
       return redirect()->route('category.index')->with('thongbao', 'Danh mục đã tồn tại!');
   }

   // Giá trị không tồn tại trong cơ sở dữ liệu, tạo danh mục mới
   Category::create($request->all());

   return redirect()->route('category.index')->with('thongbao', 'Thêm danh mục thành công!');

}
/** 
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
public function edit(Category $category)
{
   return view('admin.category.edit',compact('category'));
}

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request,Category $category)
{
   $name = $request->input('name');

        $existingCategory = Category::where('name', $name)->first();
     
        if ($existingCategory) {
            // Giá trị đã tồn tại trong cơ sở dữ liệu
            return redirect()->route('category.index')->with('thongbao', 'Danh mục đã tồn tại!');
        }
   $category->update($request->all());
   return redirect()->route('category.index')->with('thongbao','Cập nhật danh mục thành công!'); 
}

/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy(Category $category)
{
   $category->delete();
   return redirect()->route('category.index')->with('thongbao','Xóa danh mục thành công!');
}
}
?>