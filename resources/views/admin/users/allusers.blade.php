@extends('layouts.admin')
@section('title') All Users @endsection
@section ('content')


<div class="container">
    <div class="row">
        <div class="col-lg-12 m-5">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">All Users</h1>
                </div>
                <a class="btn btn-primary mx-5" href="{{route('user.create')}}">Add User</a>
            </div>
            <div class="row">
                @include('sweetalert::alert')
            </div>
    <div class="container">
        <div class="row">
    <table class="table m-5">
        <thead class="thead-dark">
        <tr>
            <th scope="col">User Picture</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Control</th>
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
                    <a class="btn btn-info m-1" href="{{route('user.show' , $user->id)}}">Show</a>
                    <a class="btn btn-warning m-1" href="{{route('user.edit' , $user->id)}}">Edit</a>
                    <form method="POST" action="{{route('user.destroy' , $user->id)}}">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" class="btn btn-danger m-1" value="Delete">
                    </form>
                    @else
                    <a class="btn btn-info m-1" href="{{route('user.show' , $user->id)}}">Show</a>
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