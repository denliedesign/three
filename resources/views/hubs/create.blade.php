@extends('layouts.app')
@section('title', 'Add New Hub')
@section('content')

{{--    <x-banner banner="banner-hub.jpg" alt="one girl lifted by many" position="50% 20%" heading="Add New Hub"/>--}}
    <x-banner banner="banner-recital-24.jpg" alt="hip hop girls dance together" position="50% 20%" heading="Add New Hub"/>

        <div class="container my-5 mont">
            <div class="row">
                <div class="col-12">
                    <form action="/hubs" method="POST" enctype="multipart/form-data">
                        @include('hubs.form')

                        <div class="mont my-1">
                            <button type="submit" style="border: 2px solid #E11B22; width: max-content;" class="rounding shadow px-3 py-2"><a style="color: #E11B22;" class="text-decoration-none">Add New Hub</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


@endsection
