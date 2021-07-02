@extends('layouts.admin')
@section('title') Product Profile @endsection
@section ('content')

<div class="card" style="width: 25rem; margin: 80px auto;">
    <img src="{{asset('uploads/products/' . $product->pimg)}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title my-4">{{__('UserIndex.ProductName')}}: {{$product->pname}}</h5>
        <p class="card-text mb-3">{{__('UserIndex.ProductPrice')}}: {{$product->pprice}}</p>
        <p class="card-text mb-3">{{__('Dashboard.ProductCategory')}}: {{$product->category->cat_name}}</p>
        <p class="card-text mb-3">{{__('Dashboard.ProductType')}}: {{$product->ptype}}</p>
    </div>
</div>
@endsection