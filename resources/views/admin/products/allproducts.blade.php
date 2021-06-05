@extends('layouts.admin')
@section('title') All Products @endsection
@section ('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 m-5">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">All Products</h1>
                </div>
                <a class="btn btn-primary mx-5" href="{{route('product.create')}}">Add New Product</a>
            </div>
            <div class="row">
                @include('sweetalert::alert')
            </div>
    <div class="container">
        <div class="row">
    <table class="table m-5">
        <thead>
        <tr>
            <th scope="col">Product Picture</th>
            <th scope="col">Product name</th>
            <th scope="col">Product Price</th>
            <th scope="col">Product Category</th>
            <th scope="col">Control</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td><img src="{{asset('uploads/products/' . $product->pimg)}}" style="max-width: 68%; border-bottom-width:0"></td>
                <th>{{$product->pname}}</th>
                <th>{{$product->pprice}}</th>
                <th>{{$product->category->cat_name}}</th>
                <td class="d-flex tablestyle">
                    @if (Auth::user()->role == 1)
                    <a class="btn btn-info m-1" href="{{route('product.show' , $product->id)}}">Show</a>
                    <a class="btn btn-warning m-1" href="{{route('product.edit' , $product->id)}}">Edit</a>
                    <form method="POST" action="{{route('product.destroy' , $product->id)}}">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" class="btn btn-danger m-1" value="Delete">
                    </form>
                    @else
                    <a class="btn btn-info m-1" href="{{route('product.show' , $product->id)}}">Show</a>
                    @endif
                    
                    
                </td>
            </tr>
            @endforeach
        
        </tbody>
    </table>
        </div>
    </div>
    <div class="container pagination">
        {{$products->links()}}
    </div>
    
</div>

@endsection