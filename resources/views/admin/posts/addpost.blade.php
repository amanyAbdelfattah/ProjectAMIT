@extends('layouts.admin')
@section('title') Add Posts @endsection
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
                            <h1 class="h4 text-gray-900 mb-4">{{__('Dashboard.AddPost')}}</h1>
                        </div>
                        <form method="POST" action="{{route('post.store')}}" class="user mx-5">
                            <div class="row">
                                @include('sweetalert::alert')
                            </div>
                            <div class="form-group row">
                                @csrf
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user"
                                    name="postbody" placeholder="Post Body">
                                    @error('postbody')
                                    <small class="text-danger"> {{$message}} </small> 
                                    @enderror
                                </div>
                            </div>
                            <input type="submit" value="{{__('Dashboard.AddPost')}}" class="btn btn-primary btn-user btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection