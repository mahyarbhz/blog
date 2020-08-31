@extends('layout.layout')
@section('content')
    <div class="media">
        <img src="{{ $article->image }}" class="mr-3" alt="" style="margin: 20px">
        <div class="media-body" style="float: right">
            <h5 class="mt-0">{{ $article->title }}</h5>
            <h6 class="mt-0">{{ $article->user->name }}</h6>
            <h6 class="mt-0">{{ Verta::instance($article->created_at)->format('%B %d, %Y') }}</h6>
            {{ $article->demo }}
        </div>
    </div>
    <p style="margin: 20px">{{ $article->text }}</p>
    <br>
    <br>
    <br>
    <br>
    Comments :
    <br>
    <form action="/comment/{{ $article->id }}">
        {{ csrf_field() }}
        <input type="text" name="comment">
        @if($errors->has('comment'))  {{-- Error Warner --}}
        <p class="alert alert-danger">{{$errors->first('comment')}}</p> {{-- Error Warner --}}
        @endif
        <br>
        <input type="submit" value="ثبت نظر">
    </form>
    <br>
    @foreach($article->comment as $comment)
        <h3>{{ $comment->user->name }}</h3>
        <p>{{ $comment->comment }}</p>
        <br>
        <hr>
    @endforeach
@endsection
