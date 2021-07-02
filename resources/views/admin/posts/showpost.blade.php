@extends('layouts.admin')
@section('title') Post Information @endsection
@section ('content')

<div class="card" style="width: 25rem; margin: 80px auto;">
    <img src="{{asset('uploads/users/' . $post->user->image)}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title my-4">{{__('Dashboard.Username')}}: {{$post->postbody}}</h5>
        <p>{{__('Dashboard.WrittenBy')}}: {{$post->user->name}}</p>
    </div>
</div>
@endsection