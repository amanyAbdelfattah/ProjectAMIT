@extends('layouts.admin')
@section('title') Add Product @endsection
@section ('content')

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">{{__('Dashboard.AddProduct')}}!</h1>
                        </div>
                        <form method="POST" action="{{route('product.store')}}" class="user mx-5" enctype="multipart/form-data">
                            <div class="row">
                                @include('sweetalert::alert')
                            </div>
                            <div class="form-group row">
                                @csrf
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">{{__('Dashboard.UploadImage')}}</label>
                                    <input class="form-control" type="file" id="formFile" name="pimg">
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <input type="text" class="form-control form-control-user"
                                    name="pname" placeholder="Product name">
                                    @error('pname')
                                    <small class="text-danger"> {{$message}} </small> 
                                    @enderror
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <input type="text" class="form-control form-control-user"
                                    name="pprice" placeholder="Product price">
                                    @error('pprice')
                                    <small class="text-danger"> {{$message}} </small> 
                                    @enderror
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <input type="text" class="form-control form-control-user"
                                    name="ptype" placeholder="Product Type">
                                    @error('ptype')
                                    <small class="text-danger"> {{$message}} </small> 
                                    @enderror
                                </div>
                            </div>
                            
                            <h5>{{__('Dashboard.CHOOSECAT')}}</h5>
                            <div class="checkbox"> 
                                <div class="btn-group-vertical">
                                    @foreach ($categories as $category)
                                    <label for=""><input type="radio" name="cat_id" value="{{$category->id}}"> {{$category->cat_name}}</label>
                                    
                                    @endforeach
                                    
                                </div>
                            </div>
                            <input type="submit" value="{{__('Dashboard.AddProduct')}}" class="btn btn-primary btn-user btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
