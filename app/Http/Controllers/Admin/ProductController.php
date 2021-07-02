<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //To show all products
        $products = Product::paginate(5);
        return view('admin.products.allproducts' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //To redirect admin or moderator to add new Product
        $categories = Category::all();
        return view('admin.products.addproduct', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //To validate Products inputs and store it in DB
        $validator = Validator::make($request->all() , [
            'pimg' => ['required'],
            'pname' => ['required', 'min:4' , 'max:225'],
            'pprice' => ['required'],
            'ptype' => ['required'],
            'cat_id' => ['required'],
        ]);
        //To start storing Products in DB
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $product = new Product();
        $product->pname = $request->input('pname');
        $product->pprice = $request->input('pprice');
        $product->ptype = $request->input('ptype');
        $product->cat_id = $request->input('cat_id');
        if($request->hasFile('pimg')){
            $file = $request->file('pimg');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/products/' , $filename);
            $product->pimg = $filename;
        }
        else{
            return $request;
            $product->pimg = '';
        }
        $product->save();
        return redirect()->back()->with(['success' => 'New Product was added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //To show product's details
        $product = Product::findOrFail($id);
        return view('admin.products.productinfo' , compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //To edit product's information
        $product = Product::findOrFail($id);
        return view('admin.products.editproduct', compact('product'));
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
        //To update product information: first validate product inputs
        $validator = Validator::make($request->all() , [
            'pimg' => ['required'],
            'pname' => ['required', 'min:4' , 'max:225'],
            'pprice' => ['required'],
            'ptype' => ['required'],
        ]);
        //Now start updating Products
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        // Second insert new inputs in DB
        $product = Product::findOrFail($id);
        $product->pname = $request->input('pname');
        $product->pprice = $request->input('pprice');
        $product->ptype = $request->input('ptype');

        if($request->hasFile('pimg')){
            $file = $request->file('pimg');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/products/' , $filename);
            $product->pimg = $filename;
        }
        else{
            return $request;
            $product->pimg = '';
        }
        $product->update();
        return redirect()->back()->with(['success' => 'Product was updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //To delete Product
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back()->with(['success' => 'Product was deleted']);
    }
}
