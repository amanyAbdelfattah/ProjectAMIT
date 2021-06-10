

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">write post!</h1>
                        </div>
                        <form method="POST" action="{{route('writepost.store')}}" class="user mx-5">
                            <div class="row">
                                @include('sweetalert::alert')
                            </div>
                            <div class="form-group row">
                                @csrf
                                <div class="col-sm-12 mb-3">
                                    <textarea name="postbody" cols="30" rows="10" placeholder="What is your opinoin?>"></textarea>
                                    @error('postbody')
                                    <small class="text-danger"> {{$message}} </small> 
                                    @enderror
                                </div>
                            </div>
                            <input type="submit" value="Write Post" class="btn btn-primary btn-user btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

