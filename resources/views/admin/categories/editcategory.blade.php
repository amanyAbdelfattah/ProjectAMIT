@extends('layouts.admin')
@section('title') Edit Category @endsection
@section ('content')

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">{{__('Dashboard.UpdateCategory!')}}</h1>
                            </div>
                            <form method="POST" action="{{route('category.update' , $category->id)}}" class="user m-5" enctype="multipart/form-data">
                                <div class="row">
                                    @include('sweetalert::alert')
                                </div>
                                <div class="form-group row">
                                    @csrf
                                    {{method_field('PUT')}}
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">{{__('Dashboard.UploadImage')}}</label>
                                        <input class="form-control" type="file" id="formFile" name="cat_img">
                                    </div>
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                        name="cat_name" value="{{$category->cat_name}}">
                                        @error('cat_name')
                                        <small class="text-danger"> {{$message}} </small> 
                                        @enderror
                                    </div>
                                </div>
                                <input type="submit" value="{{__('Dashboard.UpdateCategory!')}}" class="btn btn-primary btn-user btn-block">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection