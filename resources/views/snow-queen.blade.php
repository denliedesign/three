@extends('layouts.app')
@section('title', 'Snow Queen Gallery | Studio 3 Dance Plano TX')
@section('description', 'Relive the magic and wonder of our Snow Queen Production with these images.')
@section('content')
    <x-banner banner="/snowqueen/sq23-17.jpg" alt="dancers on stage for snow queen" position="center" heading="Snow Queen"/>

    <div class="container mt-5 mont">
        <div class="text-center">
            <strong>Snow Queen Summer Workshop and Audition:</strong> June 24th - 26th
            <br><strong>2nd audition:</strong>  Saturday, August 9th
            <br><strong>Snow Queen Performance Dates:</strong>  November 15th & 16th
{{--            Snow Queen 2025 information coming spring of 2025.--}}
            {{--            We present our winter ballet, Snow Queen every other year.--}}
            {{--            Snow Queen 2023 will be held the weekend of November 11th and 12th at the Eisemann Bank of America Theatre in Richardson. We have openings for dancers ages 3 - 18. If you are interested in auditioning, join us August 5th or August 12th at 1:00pm.  Please call or email the studio for additional information.--}}
            {{--            Rehearsals begin Friday August 18th.--}}
            {{--            Dates for our next ballet are November 13, 14, 2021. Auditions are August 14th at 1:00pm at the studio.--}}
            {{--        <span class="text-capitalize">View The <a href="/images/prev/snow-queen-rehearsal-schedule.pdf" target="_blank">Rehearsal schedule for the fall</a></span>--}}
        </div>


        <section id="vision" class="container my-5">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3">
                <col>
                    <video width="100%" height="auto" controls class="my-2">
                        <source src="/images/prev/snow-queen-2017.mp4" type="video/mp4">
                    </video>
                </col>
                <col>
                    <video width="100%" height="auto" controls class="my-2">
                        <source src="/images/prev/snow-queen-1.mp4" type="video/mp4">
                    </video>
                </col>
                <col>
                    <video width="100%" height="auto" controls class="my-2">
                        <source src="/images/prev/snow-queen-2.mp4" type="video/mp4">
                    </video>
                </col>

                <col><img src="/images/prev/snow-queen-1.jpg" alt="snow queen performance red" class="img-fluid my-2"></col>
                <col><img src="/images/prev/snow-queen-2.jpg" alt="snow queen performance red" class="img-fluid my-2"></col>
                <col><img src="/images/prev/snow-queen-3.jpg" alt="snow queen performance red" class="img-fluid my-2"></col>
                <col><img src="/images/prev/snow-queen-4.jpg" alt="snow queen performance red" class="img-fluid my-2"></col>

                <col><img src="/images/snowqueen/sq23-2.jpg" alt="snow queen performance red" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-3.jpg" alt="snow queen performance mix" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-4.jpg" alt="snow queen performance yellow" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-5.jpg" alt="snow queen performance yellow" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-6.jpg" alt="snow queen performance yellow" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-7.jpg" alt="snow queen performance yellow" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-8.jpg" alt="snow queen performance yellow" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-9.jpg" alt="snow queen performance yellow" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-10.jpg" alt="snow queen performance yellow" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-11.jpg" alt="snow queen performance yellow" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-12.jpg" alt="snow queen performance yellow" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-13.jpg" alt="snow queen performance trees" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-14.jpg" alt="snow queen performance blue" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-15.jpg" alt="snow queen performance blue" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-16.jpg" alt="snow queen performance blue" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-17.jpg" alt="snow queen performance blue" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-18.jpg" alt="snow queen performance blue" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-19.jpg" alt="snow queen performance blue" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-20.jpg" alt="snow queen performance blue" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-21.jpg" alt="snow queen performance brown" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-22.jpg" alt="snow queen performance brown" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-23.jpg" alt="snow queen performance curtain" class="img-fluid my-2"></col>
                <col><img src="/images/snowqueen/sq23-24.jpg" alt="snow queen performance curtain" class="img-fluid my-2"></col>
            </div>
        </section>
    </div>

@endsection
