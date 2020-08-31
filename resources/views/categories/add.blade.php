@extends('layout.layout')
@section('content')

    <!-- Form START -->
    <form method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">        {{-- Title Input Group --}}
            <input type="text" class="form-control" placeholder="Title" name="title">
            @if($errors->has('title'))  {{-- Error Warner --}}
            <p class="alert alert-danger">{{$errors->first('title')}}</p> {{-- Error Warner --}}
            @endif                      {{-- Error Warner --}}
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <!-- Form END -->
@endsection
