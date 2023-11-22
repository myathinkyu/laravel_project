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
                <img src="{{asset('/uploads/'.unserialize($product->imgs)[0])}}" alt="img" style="height: 303px;">
                <div class="caption">
                    <h3 style="text-align: center;" class="burmese">{{$product->title}}</h3>
                    <p style="text-align: center;" class="burmese">${{$product->price}}</p>
                    <p class="burmese">{{substr($product->description,0,65)}}</p>
                    <p>
                        <a href="#" class="btn btn-info burmese" role="button">View Detail</a> 
                        <a href="{{action('App\Http\Controllers\PageController@add', $product->id)}}" class="btn btn-default pull-right burmese" role="button">Add to Cart</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection