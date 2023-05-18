<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function url;
use function redirect;
use function view;

class CategoryController extends Controller
{
//1-Index 2-Create(form) 3-Store 4-Edit(form) 5-Update 6-Show 7-Delete
    public function index()
    {
        //get all categories from database
        //send categories to view
        $categories = DB::table('categories')->get();
        return view('categories.index',compact('categories'));

        $categories = Category::get();
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        // DB::table('categories')->insert([
        //     'name' => $request->name
        // ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect('category');
    }

   public function edit($id)
    {
        // $category = DB::table('categories')->where('id','=', $id)->first();
        // if(!$category){
        //     abort('404');
        // }else{
        //     return view('categories.edit',compact('category'));
        // }
        $category = Category::findOrfail($id);
        return view('categories.edit',compact('category'));
    }

   public function update(Request $request, $id)
   {
    // $category = DB::table('categories')->find($id);
    // if(!$category){
    //     abort(404);
    // }else{
    //     DB::table('categories')->where('id','=',$id)->update(
    //         [
    //             'name' => $request->name,
    //         ]
    //         );
    //     return redirect(url('category'));
    // }
        $category = Category::findOrfail($id);
        $category->name = $request->name;
        $category->save();
        return redirect('category');
    }

    //delete
    public function destroy($id)
    {
        // $categories = DB::table('categories')->find($id);
        // if(!$categories){
        //     abort('404');
        // }else{
        //     DB::table('categories')->where('id','=',$id)->delete();
        //    return redirect(url('category'));
        // }
            $category = Category::findOrfail($id);
            $category->delete();
            return redirect('category');

    }




}
