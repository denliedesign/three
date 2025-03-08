@extends('layouts.app')
@section('title', 'Newsletter | Studio 3 Dance | Plano, Texas')
@section('description', 'See what is new at Studio 3 Dance with our monthly newsletter.')
@section('content')
    <x-banner banner="banner-news.jpg" alt="" position="50% 30%" heading="2025 Newsletters"/>

    <div class="container my-5 mont">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
            <x-newsletter image="/prev/2025-mar.jpg" month="march" preview="Just a reminder, if you have a makeup class you’d like to schedule, please do so in the next 2 weeks!  Makeups will not be scheduled after March 15th."/>
            <x-newsletter image="/prev/news-feb-25.jpg" month="february" preview="MAKEUP CLASSES:  If you have missed a class and you would like to schedule
a makeup, please do so with the front desk during February.
Due to preparations for recital, makeups will not be scheduled after Spring Break.
Your makeup can be scheduled in any age appropriate class."/>
            <x-newsletter image="/prev/news-jan-25.jpg" month="january" preview="Get those dance shoes back out! We’re excited to see everyone the week of Monday, January 6th!"/>
        </div>
    </div>

@endsection
