@extends('layouts.app')
{{--@section('title', '')--}}
@section('content')

    <section class="mb-5">
        <div>
            <img src="/images/header-welcome.jpg" alt="young dancers moving across the floor" class="img-fluid" style="height: 500px; width: 100%; object-fit: cover; object-position: top;">
        </div>
    </section>

    <section class="mont my-5">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center"><img src="/images/logo-mtjgd.png" alt="" class="img-fluid" style="height: 240px;"></div>
{{--                    <div style="font-size: 2em; color: #E11B22;" class="fw-bold text-uppercase">Welcome to Studio 3 Dance</div>--}}
                    <div style="font-size: 1.5em; color: #E11B22;" class="fw-bold">WE ARE A MORE THAN JUST GREAT DANCING® AFFILIATED STUDIO</div>
                    <div>
                        What is MTJGD? It's a licensed affiliation of dance studios that subscribe to a higher standard of dance instruction and management principles.
{{--                        <br><br>--}}
{{--                        S3D is committed to providing MORE than excellent dance instruction. Dancers go beyond technique to develop important life skills, learning to be respectful, confident, and conscientious young people who share their gifts and talents with their community.--}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center"><img src="/images/logo-star-leadership.png" alt="" class="img-fluid p-4" style="height: 240px;"></div>
{{--                    <div style="font-size: 2em; color: #E11B22;" class="fw-bold text-uppercase">Welcome to Studio 3 Dance</div>--}}
                    <div style="font-size: 1.5em; color: #E11B22;" class="fw-bold">WE OFFER THE STAR LEADERSHIP PROGRAM</div>
                    <div>
                        Tracey Wozny's Star Leadership program is designed to cultivate leadership skills in young dancers by promoting responsibility, teamwork, and self-confidence. This transformative program empowers students to take on leadership roles within the studio and in their everyday lives, fostering personal growth and community impact.
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-sm">
                    <div class="d-flex justify-content-center"><img src="/images/logo-acroarts.png" alt="" class="img-fluid p-4" style="height: 240px;"></div>
                    {{--                    <div style="font-size: 2em; color: #E11B22;" class="fw-bold text-uppercase">Welcome to Studio 3 Dance</div>--}}
                    <div style="font-size: 1.5em; color: #E11B22;" class="fw-bold">WE ARE ACROBATIC ARTS TRAINED</div>
                    <div>
                        The program is based on safe and effective progressions with proven results in five divisions of AcroDance: Flexibility, Strength, Balancing, Limbering and Tumbling. Simple thoughtful progressions take the beginner preschool level dancer from log rolls and summersaults to the advanced dancer tumbling effortlessly across the stage!
                        {{--                        <br><br>--}}
                        {{--                        S3D is committed to providing MORE than excellent dance instruction. Dancers go beyond technique to develop important life skills, learning to be respectful, confident, and conscientious young people who share their gifts and talents with their community.--}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center"><img src="/images/logo-ready-set-dance.png" alt="" class="img-fluid" style="height: 240px;"></div>
                    {{--                    <div style="font-size: 2em; color: #E11B22;" class="fw-bold text-uppercase">Welcome to Studio 3 Dance</div>--}}
                    <div style="font-size: 1.5em; color: #E11B22;" class="fw-bold">WE HAVE READY SET DANCE CLASSES</div>
                    <div>
                        Ready Set Dance is an innovative program designed specifically to introduce young children to the world of dance. In each class teachers explore aspects of the Ready Set Dance curriculum through playful approaches which are responsive to the curiosity and imagination of young learners.
{{--                        <br><br>--}}
{{--                        Through regular and sustained participation in Ready Set Dance classes children develop positive dispositions to learning such as enthusiasm, independence, concentration, persistence, co-operation and the three C’s of confidence, coordination, and creativity. Ready Set Dance offers much to support the play and learning of young children.--}}
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="mont my-5">
        <div style="position: relative; height: 600px;">
            <div style="position: absolute; background: #E11B22; height: 100%; width: 100%; opacity: 50%; z-index: 3;"></div>
            <div style="position: absolute; width: 50%; top: 50%; left: 2.5%; transform: translateY(-50%); z-index: 4;" class="text-white">
                <div class="d-none d-md-block">
                    <div style="font-size: 2em;" class="fw-bold">Parents <ion-icon name="heart"></ion-icon> S3D</div>
                    <div style="font-size: 1.25em;" class="d-none d-md-block">
                        Studio 3 Dance offers a diverse schedule of dance classes in Plano for children ages 18 months and up. Our classes are taught by skilled teachers who take pride in creating a learning experience that is positive and rewarding for dancers of all ages and ability levels. Our costumes and choreography are always age-appropriate. But Studio 3 is More Than Just Great Dancing. Our dancers go beyond technique and poise to develop important life skills - learning to be respectful, confident and conscientious young people. Competition and performance opportunities are available for those interested.
                    </div>
                </div>
                <div class="d-block d-md-none">
                    <div style="font-size: 1.5em;" class="fw-bold">Parents <ion-icon name="heart"></ion-icon> S3D</div>
                    <div style="font-size: 0.9em;">
                        Studio 3 Dance offers a diverse schedule of dance classes in Plano for children ages 18 months and up. Our classes are taught by skilled teachers who take pride in creating a learning experience that is positive and rewarding for dancers of all ages and ability levels. Our costumes and choreography are always age-appropriate. But Studio 3 is More Than Just Great Dancing. Our dancers go beyond technique and poise to develop important life skills - learning to be respectful, confident and conscientious young people. Competition and performance opportunities are available for those interested.
                    </div>
                </div>
            </div>
            <img src="/images/parents-love-studio-3.jpg" alt="" style="object-fit: cover; object-position: top; height: 600px; width: 100%;">
        </div>
    </section>

    <section class="mont my-5">
        <div class="container">
            <div class="row">
                <div class="col-sm my-2 text-center d-flex align-items-center justify-content-center">
                    <div>
                        <a href="/preschool-dance-classes-plano"><img src="/images/classes-children-sm.jpg" alt="young jazz dancers having fun" class="img-fluid rounded shadow pressed" style="max-height: 500px; width: auto;"></a>
                        <div class="text-uppercase fw-bold" style="font-size: 1.5em;">CHILDREN'S CLASSES</div>
                        <div>Ages 1-7</div>
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <div style="background: #E11B22; width: max-content;" class="rounding shadow px-3 py-2"><a class="text-white text-decoration-none" href="/">Learn More</a></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-sm my-2 text-center d-flex align-items-center justify-content-center">
                    <div>
                        <a href="/classes"><img src="/images/classes-leveled-sm.jpg" alt="teacher helps ballet dancer at barre" class="img-fluid rounded shadow pressed" style="max-height: 500px; width: auto;"></a>
                        <div class="text-uppercase fw-bold" style="font-size: 1.5em;">LEVELED CLASSES</div>
                        <div>Ages 7+</div>
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <div style="background: #E11B22; width: max-content;" class="rounding shadow px-3 py-2"><a class="text-white text-decoration-none" href="/">Learn More</a></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-sm my-2 text-center">
                    <a href="/snow-queen"><img src="/images/performance-2023.jpg" alt="teacher helps ballet dancer at barre" class="img-fluid rounded shadow pressed" style="height: 250px; width: 375px; object-fit: cover;"></a>
                    <div class="text-uppercase fw-bold" style="font-size: 1.5em;">PERFORMANCES</div>
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <div style="border: 2px solid #E11B22; width: max-content;" class="rounding shadow px-3 py-2"><a style="color: #E11B22;" class="text-decoration-none" href="/">Learn More</a></div>--}}
{{--                    </div>--}}
                    <a href="/competition"><img src="/images/teams-2025.JPG" alt="teacher helps ballet dancer at barre" class="mt-4 img-fluid rounded shadow pressed" style="height: 250px; width: 375px; object-fit: cover;"></a>
                    <div class="text-uppercase fw-bold" style="font-size: 1.5em;">TEAMS</div>
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <div style="border: 2px solid #E11B22; width: max-content;" class="rounding shadow px-3 py-2"><a style="color: #E11B22;" class="text-decoration-none" href="/">Learn More</a></div>--}}
{{--                    </div>--}}
                </div>

            </div>
        </div>
    </section>

@endsection
