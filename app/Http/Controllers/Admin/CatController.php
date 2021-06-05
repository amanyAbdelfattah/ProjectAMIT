<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //To show all cateogries
        $categories = Category::paginate(5);
        return view('admin.categories.allcategories' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //To redirect admin or moderator to add new category
        return view('admin.categories.addcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //To validate user inputs and store it in DB
        $validator = Validator::make($request->all() , [
            'cat_img' => ['required'],
            'cat_name' => ['required', 'min:4' , 'max:225'],
        ]);
        // ERROR: There is no validation rule named string
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $category = new Category();
        $category->cat_name = $request->input('cat_name');
        if($request->hasFile('cat_img')){
            $file = $request->file('cat_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/categories/' , $filename);
            $category->cat_img = $filename;
        }
        else{
            return $request;
            $category->cat_img = '';
        }
        $category->save();
        return redirect()->back()->with(['success' => 'New Category has been added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //To show category's details
        $category = Category::findOrFail($id);
        return view('admin.categories.categoryinfo' , compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //To edit category's information
        $category = Category::findOrFail($id);
        return view('admin.categories.editcategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //To update category information: first validate category inputs
        $validator = Validator::make($request->all() , [
            'cat_name' => ['required', 'min:4' , 'max:225'],
        ]);
        // ERROR: There is no validation rule named string
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        // Second insert new inputs in DB
        $category = Category::findOrFail($id);
        $category->cat_img = $request->input('cat_img');
        $category->cat_name = $request->input('cat_name');

        if($request->hasFile('cat_img')){
            $file = $request->file('cat_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/categories/' , $filename);
            $category->cat_img = $filename;
        }
        else{
            return $request;
            $category->cat_img = '';
        }
        $category->update();
        return redirect()->back()->with(['success' => 'Category has been updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //To delete category
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back()->with(['success' => 'Category has been deleted']);
    }
}
