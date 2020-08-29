@extends('layout.layout')
@section('content')
    <form method="post" action="/uploader" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="inputFile1">Photo</label>
            <input type="file" id="inputFile1" name="pic">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop
