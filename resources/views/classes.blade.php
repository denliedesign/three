@extends('layouts.app')
@section('title', 'Preschool Dance Classes | Studio 3 Dance Plano TX')
@section('description', 'Discover the joy of dance at Studio 3 Dance in Plano, Texas! We offer engaging and fun preschool dance classes and toddler dance classes to nurture your child\'s passion for movement. Join our supportive dance community and watch your little one shine on the dance floor. Enroll today!')
@section('content')
    <x-banner banner="banner-leveled.jpg" alt="staff member leading young dancers in ballet" position="50% 10%" heading="Leveled Classes"/>

    <div class="container mont my-5">
        <div>
            Studio 3 takes pride in creating a learning experience that is positive and rewarding for dancers of all ages & levels. We offer a diverse schedule of dance classes in Plano, TX for children ages 18 months and up year round. Our main dance season runs from mid August through the end of May. To get the most out of your dance year, enrollment at the beginning of our season is best.
        </div>

        <x-button link="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" button="Register Now"/>

        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 my-3">
            <img src="/images/prev/classes-leveled-24-25.jpg" alt="class schedule" class="img-fluid">
            <img src="/images/prev/24-fall_page-0005.jpg" alt="class schedule" class="img-fluid">
        </div>

        <div>
            <img src="/images/prev/24-pathways.jpg" alt="path" class="img-fluid">
        </div>


    </div>

@endsection
