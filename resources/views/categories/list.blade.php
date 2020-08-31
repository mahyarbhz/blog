@extends('layout.layout')
@section('content')
    @foreach($categories as $category)
        <li> {{ $category->title }} </li>
    @endforeach
    <a class="btn btn-primary" href="{{ route('categories.create') }}">Add Category</a>
@stop
