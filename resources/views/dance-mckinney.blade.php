@extends('layouts.app')

@section('title', 'Dance McKinney | Studio 3 Dance')
@section('description', 'Looking for dance classes near McKinney, TX? Studio 3 Dance offers a wide variety of dance lessons for families from McKinney, with a welcoming studio located just a short drive away in Plano.')
@section('content')


    <x-banner banner="/prev/mckinney-dance-studio.jpg" alt="placeholder" position="center" heading="Dance Classes for McKinney Families"/>

    <div id="general-section" class="container my-5 mont">
        <div>
            <p>
                Families searching for dance classes in McKinney, TX or a McKinney dance studio will find many great options in the area, including Studio 3 Dance located nearby in Plano. While we do not have a dance studio in McKinney, many of our dancers travel from McKinney each week to attend classes at our welcoming studio just a short drive away. Students from the McKinney community join us for a wide variety of training, from beginner dance lessons near McKinney to programs for teens and adults looking for adult dance classes in the North Texas area. Our goal is to provide a positive and encouraging environment where dancers can grow, learn, and enjoy the experience of movement. For families exploring McKinney dance classes or searching for a nearby dance studio serving McKinney, TX, Studio 3 Dance is proud to welcome dancers from across the region.
            </p>
            @include('disclaimer')
            <div class="d-flex justify-content-center">
                <a class="mx-3" href="/preschool-dance-classes-plano">
                    <button class="btn btn-lg btn-danger shadow mb-4">See Our Children's Classes</button>
                </a>
                <a class="mx-3" href="/classes">
                    <button class="btn btn-lg btn-danger shadow mb-4">See Our Leveled Classes</button>
                </a>
            </div>
            <div class="d-flex justify-content-center">
                <a style="text-decoration: none;" href="/kpop-dancing-classes-mckinney"><small class="text-muted">Kpop Dancing Classes McKinney</small></a>
{{--                &nbsp; &middot; &nbsp;<a style="text-decoration: none;" href="/placeholder"><small class="text-muted">Placeholder</small></a>--}}
            </div>
        </div>

    </div>


@endsection
