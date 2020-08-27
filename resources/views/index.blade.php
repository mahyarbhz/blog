@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-group">
                    <!-- Cards START -->
                    @foreach($articles as $article)
                    <div class="card" style="width: 18rem">
                        <img src="{{ $article->image }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">
                                {{ $article->title }}
                            </h4>
                            <h6 class="card-title" style="direction: rtl">
                                {{ Verta::instance($article->created_at)->format('%B %d, %Y') }}
                            </h6>
                            <h6 class="card-title">
                                {{ $article->user->name }}
                            </h6>
                            <p class="card-text">
                                {{ $article->demo }}
                            </p>
                            <a href="/detail/{{ $article->id }}" class="btn btn-primary">Link</a>
                        </div>
                    </div>
                    @endforeach
                    <!-- Cards End -->

                </div>
            </div>
        </div>
        <br>
        {{ $articles->links() }}
    </div>
@endsection
