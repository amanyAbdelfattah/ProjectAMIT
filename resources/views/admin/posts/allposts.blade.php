@extends('layouts.admin')
@section('title') All Posts @endsection
@section ('content')


<div class="container">
    <div class="row">
        <div class="col-lg-12 m-5">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">All Posts</h1>
                </div>
                <a class="btn btn-primary mx-5" href="{{route('user.create')}}">Add Post</a>
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
            <th scope="col">Post</th>
            <th scope="col">Control</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                {{-- <td><img src="{{asset('uploads/users/' . $user->image)}}" style="max-width: 50%;"></td> --}}
                <td><img src="{{asset('uploads/users/' . $post->user->image)}}" alt="" style="max-width: 50%;"></td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->postbody}}</td>
                <td class="d-flex tablestyle">
                    @if (Auth::user()->role == "Admin")
                    <a class="btn btn-info m-1" href="{{route('post.show' , $post->id)}}">Show</a>
                    <a class="btn btn-warning m-1" href="{{route('post.edit' , $post->id)}}">Edit</a>
                    <form method="POST" action="{{route('post.destroy' , $post->id)}}">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" class="btn btn-danger m-1" value="Delete">
                    </form>
                    @else
                    <a class="btn btn-info m-1" href="{{route('post.show' , $post->id)}}">Show</a>
                    @endif
                    
                    
                </td>
            </tr>
            @endforeach
        
        </tbody>
    </table>
        </div>
    </div>
    <div class="container pagination">
        {{$posts->links()}}
    </div>
    
</div>
@endsection