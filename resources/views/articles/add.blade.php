@extends('layout.layout')
@section('content')
{{--@if($errors->any())--}}
{{--    <div class="alert alert-danger" role="alert">--}}
{{--        <ul>--}}
{{--            @foreach($errors->all() as $error)--}}
{{--                <li>{{ $error }}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endif--}}
<!-- Form START -->
    <form method="post" action="/store">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Title" name="title">
            @if($errors->has('title'))
                <p class="alert alert-danger">{{$errors->first('title')}}</p>
            @endif
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Demo" name="demo">
            @if($errors->has('demo'))
                <p class="alert alert-danger">{{$errors->first('demo')}}</p>
            @endif
        </div>
        <div class="form-group">
            <textarea type="text" class="form-control" placeholder="Text" name="text" rows="5"></textarea>
            @if($errors->has('text'))
                <p class="alert alert-danger">{{$errors->first('text')}}</p>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<!-- Form END -->
@endsection
