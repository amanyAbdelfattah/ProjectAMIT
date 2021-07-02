@extends('layouts.admin')
@section('title') All Categories @endsection
@section ('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 m-5">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">{{__('Dashboard.CATEGORIES')}}</h1>
                </div>
                <a class="btn btn-primary mx-5" href="{{route('category.create')}}">{{__('Dashboard.AddCategory')}}</a>
            </div>
            <div class="row">
                @include('sweetalert::alert')
            </div>
    <div class="container">
        <div class="row">
    <table class="table m-5">
        <thead>
        <tr>
            <th scope="col">{{__('Dashboard.CategoryPicture')}}</th>
            <th scope="col">{{__('Dashboard.CategoryName')}}</th>
            <th scope="col">{{__('Dashboard.Control')}}</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td><img src="{{asset('uploads/categories/' . $category->cat_img)}}" style="max-width: 50%;"></td>
                <th>{{$category->cat_name}}</th>
                <td class="d-flex tablestyle">
                    @if (Auth::user()->role == 'Admin')
                    <a class="btn btn-info m-1" href="{{route('category.show' , $category->id)}}">{{__('Dashboard.SHOW')}}</a>
                    <a class="btn btn-warning m-1" href="{{route('category.edit' , $category->id)}}">{{__('Dashboard.EDIT')}}</a>
                    <form method="POST" action="{{route('category.destroy' , $category->id)}}">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" class="btn btn-danger m-1" value="{{__('Dashboard.DESTROY')}}">
                    </form>
                    @else
                    <a class="btn btn-info m-1" href="{{route('category.show' , $category->id)}}">{{__('Dashboard.SHOW')}}</a>
                    @endif
                    
                    
                </td>
            </tr>
            @endforeach
        
        </tbody>
    </table>
        </div>
    </div>
    <div class="container pagination">
        {{$categories->links()}}
    </div>
    
</div>

@endsection