@extends('layouts.app')
@section('title', 'Edit Article')
@section('content')

    <x-banner banner="banner-recital-24.jpg" alt="hip hop girls dance together" position="50% 20%" heading="Edit Article"/>

    <div class="container my-5 mont">
        <form action="{{ route('articles.update', ['article' => $article]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('articles.form')

            <div class="mont my-1">
                <button type="submit" style="border: 2px solid #E11B22; width: max-content;" class="rounding shadow px-3 py-2"><a style="color: #E11B22;" class="text-decoration-none">Save</a></button>
            </div>
        </form>
    </div>

@endsection
