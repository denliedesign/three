@extends('layouts.app')
@section('title', 'Newsletter | Studio 3 Dance Plano TX')
{{--@section('description', 'Keep Up To Date With The Latest News From MDU!')--}}
@section('content')

    <x-banner banner="banner-news.jpg" alt="" position="50% 30%" heading="Newsletter"/>

    <div class="container my-5 mont">
        @can('update', \App\Models\Article::class)
            <p class="text-center"><a href="/articles/create">Create New Article</a></p>
        @endcan

        <div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 pb-5">
                @foreach($articles as $article)
                    <div class="col-sm p-2">
                        <div class="card" style="max-width: 400px">
                            <a href="/articles/{{ $article->id }}">
                                @if($article->newsImage)
                                    <img src="{{ asset('/storage/' . $article->newsImage) }}" class="card-img-top" alt="{{ $article->newsTitle }}">
                                @endif
                            </a>
                            <div class="card-body">
                                <p class="card-title poppins text-center text-uppercase fw-bold"><a href="{{ route('articles.show', $article) }}" class="text-reset text-decoration-none">{{ $article->newsTitle }}</a></p>
                                {{--                                <p class="card-text">{!! strip_tags(substr($article->articleTitle, 0, 125)) . '...' !!}</p>--}}
                            </div>
                            @can('update', \App\Models\Article::class)
                                <div class="card-footer">
                                    <div class="d-flex flex-wrap justify-content-center gap-2 mb-2">
                                        <form action="{{ route('articles.move', $article) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button class="btn btn-outline-secondary btn-sm" name="direction" value="up" @disabled($loop->first) aria-label="Move {{ $article->newsTitle }} up">Move up</button>
                                            <button class="btn btn-outline-secondary btn-sm" name="direction" value="down" @disabled($loop->last) aria-label="Move {{ $article->newsTitle }} down">Move down</button>
                                        </form>
                                        <a class="btn btn-outline-secondary btn-sm" href="{{ route('articles.create', ['duplicate' => $article->id]) }}">Duplicate</a>
                                    </div>
                                    <div class="admin-controls d-flex justify-content-center align-items-center pb-2">
                                        <div class="m-2"><a href="/articles/{{ $article->id }}/edit">Edit</a></div>
                                        <div class="m-2">
                                            <form action="/articles/{{ $article->id }}" method="POST">
                                                @method('DELETE')
                                                @csrf

                                                <button class="btn btn-danger ml-4" type="submit" onclick="return confirm('Are you sure you want to delete this?');">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endcan
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
