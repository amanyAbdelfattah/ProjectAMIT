@extends('layouts.admin')
@section('title') Add Users @endsection
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
                            <h1 class="h4 text-gray-900 mb-4">Create User Account!</h1>
                        </div>
                        <form method="POST" action="{{route('user.store')}}" class="user mx-5" enctype="multipart/form-data">
                            <div class="row">
                                @include('sweetalert::alert')
                            </div>
                            <div class="form-group row">
                                @csrf
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Upload Image</label>
                                    <input class="form-control" type="file" id="formFile" name="image">
                                </div>
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user"
                                    name="name" placeholder="Username">
                                    @error('name')
                                    <small class="text-danger"> {{$message}} </small> 
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user"
                                name="email" placeholder="Email Address">
                                @error('email')
                            <small class="text-danger"> {{$message}} </small>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                name="password" placeholder="Password">
                                @error('password')
                                <small class="text-danger"> {{$message}} </small>
                                @enderror
                                </div>
                            </div>
                            <input type="submit" value="Register Account" class="btn btn-primary btn-user btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection