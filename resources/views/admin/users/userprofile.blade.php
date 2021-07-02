@extends('layouts.admin')
@section('title') User Profile @endsection
@section ('content')

<div class="card" style="width: 25rem; margin: 80px auto;">
    <img src="{{asset('uploads/users/' . $user->image)}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title my-4">{{__('Dashboard.Username')}}: {{$user->name}}</h5>
        <p class="card-text mb-3">{{__('Dashboard.Email')}}: {{$user->email}}</p>
        <p class="card-text mb-3">{{__('Dashboard.Role')}}: {{$user->role}}</p>
    </div>
</div>
@endsection