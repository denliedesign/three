@extends('layouts.app')

@section('title', 'Dance Frisco | Studio 3 Dance')
@section('description', 'Discover the joy of dance at Studio 3 Dance in Frisco, TX! Offering a variety of dance classes for all ages, our studio is dedicated to fostering a love of dance in a supportive community. Join us to experience the best dance lessons Frisco has to offer.')
@section('content')


    <x-banner banner="dance-studio-in-plano-tx.jpg" alt="trail in plano" position="center" heading="Explore Top Dance Classes in Frisco at Studio 3 Dance"/>


    <div id="general-section" class="container my-5 mont">
{{--        <h1 class="text-center mb-4 mt-0 py-0">Explore Top Dance Classes in Frisco at Studio 3 Dance</h1>--}}
        <div>
            <p>
                Studio 3 Dance stands as a beacon for aspiring dancers in Frisco, TX, offering a comprehensive range of dance classes that cater to all skill levels and ages. Whether you're looking for ballet, hip-hop, contemporary, or jazz, our studio provides a vibrant, supportive environment where students can grow and excel. With experienced instructors and state-of-the-art facilities, Studio 3 Dance is committed to delivering top-notch dance education and experiences to the Frisco community. Our dance lessons are designed to nurture talent and passion, making us one of the top dance studios in Frisco. Join us and become part of a community that celebrates the art of dance in every move.
            </p>
            <div class="d-flex justify-content-center">
                <a class="mx-3" href="/preschool-dance-classes-plano">
                    <button class="btn btn-lg btn-danger shadow mb-4">See Our Children's Classes</button>
                </a>
                <a class="mx-3" href="/classes">
                    <button class="btn btn-lg btn-danger shadow mb-4">See Our Leveled Classes</button>
                </a>
            </div>
            {{--            <div class="d-flex justify-content-center">--}}
            {{--                <a style="text-decoration: none;" href="/dance-classes-richardson"><small class="text-muted">Dance Classes Richardson</small></a>--}}
            {{--            </div>--}}
        </div>

    </div>


@endsection
