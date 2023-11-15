@extends('layout/master')

@section('title', 'home')

@section('content')

<div class="container">
    <div class="col-md-3">
       @include('layout.sidebar')
    </div>
    <div class="col-md-9">
        <h3>content</h3>
    </div>
</div>


@endsection