@extends('layouts.user')
@section('title') Cart @endsection
@section ('content')

<div class="container">
    <div class="row">
        
        <div class="products m-5">
            <div class="container my-5">
                @if ($cart)
                <div class="row justify-content-around">
                    @foreach ($cart->items as $product)
                    
                    <div class="card" style="width: 18rem; padding-bottom: 74px;">
                        
                        <img src="{{asset('uploads/products/' . $product['pimg'])}}" alt="" style="height: 87%">
                        <div class="card-body">
                            <h5 class="card-title mb-3">{{__('UserIndex.ProductName')}}: {{$product['pname']}}</h5>
                            <div class="card-text">
                                {{__('UserIndex.ProductPrice')}}: {{$product['pprice']}}
                                <br>
                                {{__('UserIndex.ProductQuantity')}}: {{$product['qty']}}
                            </div>
                        </div>
                            
                    @endforeach
                </div>
            </div>
            @else
                            <p style="font-size:30px; color:red; text-align:center">{{__('UserIndex.NOCART')}}</p>
                    @endif
                    </div>
        </div>
    </div>
</div>
@endsection