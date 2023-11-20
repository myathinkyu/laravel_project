@extends('layout/master')

@section('title', 'home')

@section('content')

<div class="container">
    <div class="col-md-3">
       @include('layout.sidebar')
    </div>
    <div class="col-md-9">
        <h3>Content</h3> 
        @foreach($products as $product)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('/uploads/'.$product->imgs)}}" alt="img" style="height: 303px;">
                <div class="caption">
                    <h3 style="text-align: center;" class="burmese">{{$product->title}}</h3>
                    <p style="text-align: center;" class="burmese">${{$product->price}}</p>
                    <p class="burmese">{{$product->description}}</p>
                    <p>
                        <a href="#" class="btn btn-info burmese" role="button">View Detail</a> 
                        <a href="#" class="btn btn-default pull-right burmese" role="button">Add to Cart</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection