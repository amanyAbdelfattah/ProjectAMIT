@extends('layouts.admin')
@section('title') All Users @endsection
@section ('content')


<div class="container">
    <div class="row">
        <div class="col-lg-12 m-5">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">{{__('Dashboard.AllUsers')}}</h1>
                </div>
                <a class="btn btn-primary mx-5" href="{{route('user.create')}}">{{__('Dashboard.AddUser')}}</a>
            </div>
            <div class="row">
                @include('sweetalert::alert')
            </div>
    <div class="container">
        <div class="row">
    <table class="table m-5">
        <thead class="thead-dark">
        <tr>
            <th scope="col">{{__('Dashboard.UserPicture')}}</th>
            <th scope="col">{{__('Dashboard.Username')}}</th>
            <th scope="col">{{__('Dashboard.Email')}}</th>
            <th scope="col">{{__('Dashboard.Role')}}</th>
            <th scope="col">{{__('Dashboard.Control')}}</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td><img src="{{asset('uploads/users/' . $user->image)}}" style="max-width: 50%;"></td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td class="d-flex tablestyle">
                    @if (Auth::user()->role == "Admin")
                    <a class="btn btn-info m-1" href="{{route('user.show' , $user->id)}}">{{__('Dashboard.SHOW')}}</a>
                    <a class="btn btn-warning m-1" href="{{route('user.edit' , $user->id)}}">{{__('Dashboard.EDIT')}}</a>
                    <form method="POST" action="{{route('user.destroy' , $user->id)}}">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" class="btn btn-danger m-1" value="{{__('Dashboard.DESTROY')}}">
                    </form>
                    @else
                    <a class="btn btn-info m-1" href="{{route('user.show' , $user->id)}}">{{__('Dashboard.SHOW')}}</a>
                    @endif
                    
                    
                </td>
            </tr>
            @endforeach
        
        </tbody>
    </table>
        </div>
    </div>
    <div class="container pagination">
        {{$users->links()}}
    </div>
    
</div>
@endsection