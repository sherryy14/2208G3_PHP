@extends('layout.layout')



@section('section')
<div class="container mt-5">
    <h1 class="text-center">Upload Image</h1>

    <form action="{{'/file'}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" class="form-control">
        <input type="submit" value="Upload" class="btn btn-dark">
    </form>
</div>
@endsection