@extends('layouts.app')
@section('title', 'Spring Recital Hub | Misty\'s Dance Unlimited')
@section('content')

    <x-banner banner="banner-recital-24.jpg" alt="hip hop girls dance together" position="50% 20%" heading="{{ $hub->hubTitle }}"/>

    <div class="container my-5 mont">
        <div>

            <img src="{{ asset('/storage/' . $hub->hubImage) }}" alt="" class="img-fluid" style="max-width: 400px; width: 100%; height: auto;">

            @if($hub->hubPdf)
                <img src="{{ asset('/storage/' . $hub->hubPdf) }}" class="img-fluid">
            @endif
            <p class="my-5">{!! $hub->hubContent !!}</p>

            <div class="mont my-1">
                <div style="border: 2px solid #E11B22; width: max-content;" class="rounding shadow px-3 py-2"><a style="color: #E11B22;" class="text-decoration-none" href="/recital">Back to Hub</a></div>
            </div>


        </div>
    </div>

@endsection

{{--<style>--}}
{{--    h2 {--}}
{{--        background: #008cc0;--}}
{{--        color: white;--}}
{{--        padding: 5px;--}}
{{--        border-radius: 5px;--}}
{{--        box-shadow: 2px 2px 3px rgba(0,0,0,0.6),--}}
{{--                    -2px -2px 6px rgba(255,255,255,1);--}}
{{--    }--}}
{{--</style>--}}
