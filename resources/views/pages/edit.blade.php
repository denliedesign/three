@extends('layouts.app')
@section('title', 'Edit ' . $page->title)
@section('content')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <div class="container my-5 mont">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h2 mb-0">Edit {{ ucfirst($page->slug) }} Page</h1>
            <a href="{{ url($page->slug) }}">View Page</a>
        </div>

        <div
            id="page-editor"
            data-page="{{ base64_encode($page->toJson()) }}"
            data-update-url="{{ route('pages.update', $page) }}"
            data-upload-url="{{ route('pages.uploads.store') }}"
        ></div>
    </div>
@endsection
