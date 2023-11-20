@extends('layout.master')
@section('title','Create Product')

@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="well">
        <!-- Form Start -->
        <form method="post" enctype="multipart/form-data">
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach
            @if(session('status'))
                <p class="alert alert-success">{{session('status')}}</p>
            @endif
            <legend style="border-bottom: 0;">Insert A new Product</legend>
            {{CSRF_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Price">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">File input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file[]" multiple>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!-- Form End -->
    </div>
</div>
@endsection