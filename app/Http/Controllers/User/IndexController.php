<?php

namespace App\Http\Controllers\User;

use App\User\Cart;
use App\Http\Controllers\Controller;
use App\Models\Admin\Post;
use App\Models\Admin\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //To displau all products and posts
    public function index()
    {
        //To display all Prodcust and Posts
        $products = Product::all();
        $posts = Post::all();
        return view('user.index',compact('products' , 'posts'));
    }
    //To display women items when click on women link
    public function women()
    {
        $products = Product::all();
        $posts = Post::all();
        $womenitems = DB::table('products')
        ->where('cat_id', '=', 1)
        ->get();
        return view('user.items.women',compact('products','posts','womenitems'));
    }

    //To display men items when click on women link
    public function men()
    {
        $products = Product::all();
        $posts = Post::all();
        $menitems = DB::table('products')
        ->where('cat_id', '=', 2)
        ->get();
        return view('user.items.men',compact('products','posts','menitems'));
    }

    //To display kids items when click on women link
    public function kids()
    {
        $products = Product::all();
        $posts = Post::all();
        $kidsitems = DB::table('products')
        ->where('cat_id', '=', 3)
        ->get();
        return view('user.items.kids',compact('products','posts','kidsitems'));
    }
    
    public function addToCart(Product $product)
    {
        //To add Products to cart
        if(session()->has('cart'))
        {
            $cart = new Cart(session()->get('cart'));
        }else{
            $cart = new Cart();
        }
        $cart->add($product);
        session()->put('cart' , $cart);
        return redirect()->route('user-view')->with('success','Product was addes to your cart');
    }

    public function showcart()
    {   
        //To show Products that was added to cart
        if(session()->has('cart'))
        {
            $cart = new Cart(session()->get('cart'));
        }else{
            $cart = null;
        }
        
        return view('user.carts.showcart' , compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //To show user profile
        $user = User::findOrFail($id);
        $posts = DB::table('posts')
        ->where('user_id', '=', Auth::user()->id)
        ->get();
        return view('user.profiles.showprofile' , compact('user','posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
