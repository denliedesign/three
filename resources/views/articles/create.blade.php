@extends('layouts.app')
@section('title', 'Add New Article')
@section('content')

    {{--    <x-banner banner="banner-hub.jpg" alt="one girl lifted by many" position="50% 20%" heading="Add New Article"/>--}}
    <x-banner banner="banner-recital-24.jpg" alt="hip hop girls dance together" position="50% 20%" heading="Add New Article"/>

    <div class="container my-5 mont">
        <div class="row">
            <div class="col-12">
                <form action="/articles" method="POST" enctype="multipart/form-data">
                    @include('articles.form')

                    <div class="mont my-1">
                        <button type="submit" style="border: 2px solid #E11B22; width: max-content;" class="rounding shadow px-3 py-2"><a style="color: #E11B22;" class="text-decoration-none">Add New Article</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
