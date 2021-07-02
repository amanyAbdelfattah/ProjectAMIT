@extends('layouts.user')
@section('title') User Profile @endsection
@section ('content')

<div class="user-profile my-5">
    <div class="container mt-5">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="{{asset('uploads/users/' . Auth::user()->image)}}" alt="..." style="max-width:100%;border-right: 5px solid dodgerblue">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title mb-3" style="font-size:23px; color:black; font-weight:500;">{{__('UserIndex.USERNAME')}}: {{Auth::user()->name}}</h5>
                <p class="card-text d-block">{{__('UserIndex.EmailAddress')}}: <span>{{Auth::user()->email}}</span></p>
                @foreach ($posts as $post)
                    <p class="card-text d-block">{{__('UserIndex.POSTS')}}: <span>{{$post->postbody}}</span></p>
                @endforeach
                
                </div>
            </div>
            </div>
        </div>
        </div>
</div>

@endsection