@extends('layouts.admin')
@section('title') Category Information @endsection
@section ('content')

<div class="card" style="width: 25rem; margin: 80px auto;">
    <img src="{{asset('uploads/categories/' . $category->cat_img)}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title my-4">{{__('Dashboard.CategoryName')}}: {{$category->cat_name}}</h5>
    </div>
</div>
@endsection