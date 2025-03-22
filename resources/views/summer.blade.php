@extends('layouts.app')
@section('title', 'Summer Dance Camps Workshops & Classes | Studio 3 Dance Plano TX')
{{--@section('description', '')--}}
@section('content')
    <x-banner banner="summer-dance-plano.jpg" alt="" position="50% 35%" heading="Summer Dance in Plano"/>

    <div class="container mt-5 mont d-flex justify-content-center">
        <div>
            <div>
                Welcome to Studio 3 Dance’s ultimate summer dance experience! This June and July, young dancers can ignite their passion for movement with our all-inclusive programs—featuring dynamic summer dance camps, focused summer dance intensives, creative summer dance workshops, and engaging summer dance classes in Plano. Each option is designed to inspire creativity, build confidence, and nurture talent in a fun, supportive environment. Join us to make your summer truly unforgettable!
            </div>

            <x-button link="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" button="Register Now"/>
            <img src="/images/25-summer-camps-workshops.jpg" alt="summer camp info" class="img-fluid mt-5">
            <img src="/images/25-summer-classes-1.jpg" alt="summer dance class info" class="img-fluid">
            <img src="/images/25-summer-classes-2.jpg" alt="summer dance class info" class="img-fluid">
        </div>
    </div>

@endsection
