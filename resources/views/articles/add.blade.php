@extends('layout.layout')
@section('content')

<!-- Form START -->
    <form method="post" action="/store" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">        {{-- Title Input --}}
            <input type="text" class="form-control" placeholder="Title" name="title">
            @if($errors->has('title'))  {{-- Error Warner --}}
                <p class="alert alert-danger">{{$errors->first('title')}}</p> {{-- Error Warner --}}
            @endif                      {{-- Error Warner --}}
        </div>
        <div class="form-group">        {{-- Title Input --}}
            <select class="form-control" multiple name="category[]">
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
            @if($errors->has('title'))  {{-- Error Warner --}}
                <p class="alert alert-danger">{{$errors->first('title')}}</p> {{-- Error Warner --}}
            @endif                      {{-- Error Warner --}}
        </div>
        <div class="form-group">        {{-- Demo Input --}}
            <input type="text" class="form-control" placeholder="Demo" name="demo">
            @if($errors->has('demo'))   {{-- Error Warner --}}
                <p class="alert alert-danger">{{$errors->first('demo')}}</p> {{-- Error Warner --}}
            @endif                      {{-- Error Warner --}}
        </div>
        <div class="form-group">        {{-- Text Input --}}
            <textarea type="text" class="form-control" placeholder="Text" name="text" rows="5"></textarea>
            @if($errors->has('text')) {{-- Error Warner --}}
                <p class="alert alert-danger">{{$errors->first('text')}}</p> {{-- Error Warner --}}
            @endif                      {{-- Error Warner --}}
        </div>
        <div class="form-group"> {{-- File Input --}}
            <label for="inputFile1">Photo</label>
            <input type="file" id="inputFile1" name="pic">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<!-- Form END -->
@endsection
