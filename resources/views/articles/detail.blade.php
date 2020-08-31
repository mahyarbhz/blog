@extends('layout.layout')
@section('content')
    <br> <br>
    <div class="media">
        <img src="{{ $article->image }}" class="align-self-center mr-3" alt="...">
        <div class="media-body">
            <h4 class="mt-0">{{ $article->title }}</h4>
            <h6 class="mt-0">{{ $article->user->name }}</h6>
            <h6 class="mt-0">{{ Verta::instance($article->created_at)->format('%B %d, %Y') }}</h6> {{-- Time is in Solar Year --}}
            <p>{{ $article->demo }}</p>
        </div>
    </div>
    <p style="margin: 20px">{{ $article->text }}</p>
    <br> <br>
    <div class="container">
        Comments :
        <br> <br>
        <div class="card col-lg-8">
            <div class="card-body">
                <form action="/comment/{{ $article->id }}">
                    {{ csrf_field() }}
                    <input type="text" name="comment" class="form-control" placeholder="Your comment">
                        @if($errors->has('comment'))  {{-- Error Warner --}}
                            <p class="alert alert-danger">{{$errors->first('comment')}}</p> {{-- Error Warner --}}
                        @endif
                    <br>
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>
            </div>
        </div>
        <br>
        <div class="justify-content-center">
        @foreach($article->comment as $comment)
            <div class="card col-lg-8">
                <div class="card-body">
                    <p class="h5 card-title">
                        <em>{{ $comment->user->name }}</em>
                    </p>
                    <p class="card-text" style="font-size: 15px">
                        {{ $comment->comment }}
                    </p>
                </div>
            </div>
            <br>
        @endforeach
        </div>
    </div>
@endsection
