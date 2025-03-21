@extends('layouts.app')
@section('title', 'Newsletter | Studio 3 Dance Plano TX')
{{--@section('description', 'Keep Up To Date With The Latest News From MDU!')--}}
@section('content')

    <x-banner banner="banner-recital-24.jpg" alt="hip hop girls dance together" position="50% 20%" heading="Newsletter"/>

    <div class="container my-5 mont">
        @can('update', \App\Article::class)
            <p class="text-center"><a href="/articles/create">Create New Article</a></p>
        @endcan

        <div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 pb-5">
                @foreach($articles as $article)
                    <div class="col-sm p-2">
                        <div class="card" style="max-width: 400px">
                            <a href="/articles/{{ $article->id }}">
                                <img src="{{ asset('/storage/' . $article->newsImage) }}" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <p class="card-title poppins text-center text-uppercase fw-bold">{{ $article->newsTitle }}</p>
                                {{--                                <p class="card-text">{!! strip_tags(substr($article->articleTitle, 0, 125)) . '...' !!}</p>--}}
                            </div>
                            @can('update', \App\Article::class)
                                <div class="card-footer">
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
