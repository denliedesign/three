@extends('layouts.app')
@section('title', 'Preschool Dance Classes | Studio 3 Dance Plano TX')
@section('description', 'Discover the joy of dance at Studio 3 Dance in Plano, Texas! We offer engaging and fun preschool dance classes and toddler dance classes to nurture your child\'s passion for movement. Join our supportive dance community and watch your little one shine on the dance floor. Enroll today!')
@section('content')
    <x-banner banner="banner-childrens.jpg" alt="staff member leading young dancers in stretches" position="50% 30%" heading="Children's Dance Classes"/>

    <div class="container mont my-5">
        <div>
            Studio 3 takes pride in creating a learning experience that is positive and rewarding for dancers of all ages & levels. We offer a diverse schedule of dance classes in Plano, TX for children ages 18 months and up year round. Our main dance season runs from mid August through the end of May. To get the most out of your dance year, enrollment at the beginning of our season is best.
        </div>

        {{--        <div class="d-flex justify-content-center">--}}
        {{--            <a href="/images/23-fall-b.pdf" target="_blank">--}}
        {{--                <button class="btn btn-lg btn-danger shadow mb-4">View 2023-2024 Classes PDF</button>--}}
        {{--            </a>--}}
        {{--        </div>--}}

{{--        <div class="d-flex justify-content-center">--}}
{{--            <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank" class="mx-3">--}}
{{--                <button class="btn btn-lg btn-danger shadow mb-4">Register Now</button>--}}
{{--            </a>--}}
{{--        </div>--}}
        <x-button link="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" button="Register Now" />

        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 my-3">
            <img src="/images/prev/classes-preschool-24-25.jpg" alt="class schedule" class="img-fluid">
            <img src="/images/prev/classes-childrens-24-25.jpg" alt="class schedule" class="img-fluid">
        </div>

        <div>
            <img src="/images/prev/24-pathways.jpg" alt="path" class="img-fluid">
        </div>

        {{--        <div class="d-flex justify-content-center">--}}
        {{--            <a href="/images/23-fall-b.pdf" target="_blank">--}}
        {{--                <button class="btn btn-lg btn-danger shadow mb-4">View 2023-2024 Classes PDF</button>--}}
        {{--            </a>--}}
        {{--        </div>--}}

        {{--        <div class="d-flex justify-content-center">--}}
        {{--            <img src="/images/ready-set-logos.png" alt="ready set logos" class="img-fluid">--}}
        {{--        </div>--}}
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 my-5">
            {{--            <div class="d-flex align-items-center" style="border: 1px solid #747474;">--}}
            {{--                <div class="col text-center">--}}
            {{--                    <img src="/images/dance-with-me-logo.png" alt="childrens class logo" class="img-fluid m-2">--}}
            {{--                    <small class="text-muted d-block">ages 18 months - 2 1/2</small>--}}
            {{--                    <p>--}}
            {{--                        Creative movement class for tiny dancers and moms/caregivers. Singing & dancing with props for our youngest imaginations.--}}
            {{--                    </p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="d-flex align-items-center" style="border: 1px solid #747474;">
                <div class="col text-center">
                    <img src="/images/prev/logo-ready-move.png" alt="childrens class logo" class="img-fluid m-2">
                    <small class="text-muted d-block">ages 18 months - 3 years</small>
                    <p>

                    </p>
                </div>
            </div>
            {{--            <div class="d-flex align-items-center" style="border: 1px solid #747474;">--}}
            {{--                <div class="col text-center">--}}
            {{--                    <img src="/images/prev/child-2.png" alt="childrens class logo" class="img-fluid m-2">--}}
            {{--                    <small class="text-muted d-block">ages 2 - 3</small>--}}
            {{--                    <p>--}}
            {{--                        Designed for 2 - 3 year olds to enhance gross motor coordination and listening skills through music, props,  and basic ballet.--}}
            {{--                    </p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="d-flex align-items-center" style="border: 1px solid #747474;">
                <div class="col text-center">
                    <img src="/images/prev/ready-set-logos.png" alt="childrens class logo" class="img-fluid m-2">
                    <small class="text-muted d-block">I for ages 2 1/2 - 4 & II for ages 5 - 6</small>
                    <p>

                    </p>
                </div>
            </div>
            <div class="d-flex align-items-center" style="border: 1px solid #747474;">
                <div class="col text-center">
                    <img src="/images/prev/logo-ready-acro.png" alt="childrens class logo" class="img-fluid m-2">
                    <small class="text-muted d-block">I for ages 2 1/2 - 4 & II for ages 5 - 6</small>
                    <p>

                    </p>
                </div>
            </div>
            <div class="d-flex align-items-center" style="border: 1px solid #747474;">
                <div class="col text-center">
                    <img src="/images/prev/logo-ready-set-dance.png" alt="childrens class logo" class="img-fluid m-2">
                    <small class="text-muted d-block">ages 3 - 5</small>
                    <p>
                        A combo class of Jazz, Hip Hop, Singing and Music and a whole lot of fun! This class is designed to give boys and girls confidence, coordination and creativity.
                    </p>
                </div>
            </div>

            {{--            <div class="d-flex align-items-center" style="border: 1px solid #747474;">--}}
            {{--                <div class="col text-center">--}}
            {{--                    <img src="/images/prev/child-4.png" alt="childrens class logo" class="img-fluid m-2">--}}
            {{--                    <small class="text-muted d-block">ages 3 - 5</small>--}}
            {{--                    <p>--}}
            {{--                        Designed for 3 - 5 year olds to enhance gross motor coordination and listening skills through music, props, and ballet.--}}
            {{--                    </p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="d-flex align-items-center" style="border: 1px solid #747474;">
                <div class="col text-center">
                    <img src="/images/prev/child-5.png" alt="childrens class logo" class="img-fluid m-2">
                    <small class="text-muted d-block">Pink - 3+  |  Lilac - 4+  | Yellow - 5+</small>
                    <p>
                        The TWIRL experience will add a little sparkle and merriment to our ballet and tap combo class one week per month. $30 supply fee includes a book, ribbon, rhinestones, and end of year certificate.
                    </p>
                </div>
            </div>
            {{--            <div class="d-flex align-items-center" style="border: 1px solid #747474;">--}}
            {{--                <div class="col text-center">--}}
            {{--                    <img src="/images/prev/dance-upon-a-star.png" alt="childrens class logo" class="img-fluid m-2">--}}
            {{--                    <small class="text-muted d-block">ages 5+</small>--}}
            {{--                    <p>--}}
            {{--                        Ballet class for dancers with special needs.--}}
            {{--                    </p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="d-flex align-items-center" style="border: 1px solid #747474;">--}}
            {{--                <div class="col text-center">--}}
            {{--                    <img src="/images/prev/child-6.jpg" alt="childrens class logo" class="img-fluid m-2">--}}
            {{--                    <small class="text-muted d-block">ages 4+</small>--}}
            {{--                    <p>--}}
            {{--                        Introduces the young dancer to basic ballet skills.--}}
            {{--                    </p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="d-flex align-items-center" style="border: 1px solid #747474;">--}}
            {{--                <div class="col text-center">--}}
            {{--                    <img src="/images/prev/child-8.png" alt="childrens class logo" class="img-fluid m-2">--}}
            {{--                    <small class="text-muted d-block">ages 4 - 5</small>--}}
            {{--                    <p>--}}
            {{--                        Tumbling class combines dance technique with precision acrobatic elements.--}}
            {{--                    </p>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <div class="d-flex align-items-center" style="border: 1px solid #747474;">
                <div class="col text-center">
                    <img src="/images/prev/petite-1.png" alt="childrens class logo" class="img-fluid m-2">
                    <small class="text-muted d-block">ages 5 - 6</small>
                    <p>
                        Introduces the young dancer to the steps and grace of ballet with barre, center work & combinations.
                    </p>
                </div>
            </div>
            <div class="d-flex align-items-center" style="border: 1px solid #747474;">
                <div class="col text-center">
                    <img src="/images/prev/petite-2.png" alt="childrens class logo" class="img-fluid m-2">
                    <small class="text-muted d-block">ages 5 - 6</small>
                    <p>
                        Introduces the young dancer to the fun and rhythm of tap.   Co-enrollment with ballet recommended.
                    </p>
                </div>
            </div>
            <div class="d-flex align-items-center" style="border: 1px solid #747474;">
                <div class="col text-center">
                    <img src="/images/prev/petite-3.png" alt="childrens class logo" class="img-fluid m-2">
                    <small class="text-muted d-block">ages 5 - 6</small>
                    <p>
                        Introduces the young dancer to the basic steps of jazz. Co-enrollment with ballet recommended.
                    </p>
                </div>
            </div>
            <div class="d-flex align-items-center" style="border: 1px solid #747474;">
                <div class="col text-center">
                    <img src="/images/prev/beginning-1.jpg" alt="childrens class logo" class="img-fluid m-2">
                    <small class="text-muted d-block">ages 7 - 8</small>
                    <p>
                        Introduces the young dancer to the steps and grace of ballet with barre, center work & combinations.
                    </p>
                </div>
            </div>
            <div class="d-flex align-items-center" style="border: 1px solid #747474;">
                <div class="col text-center">
                    <img src="/images/prev/beginning-2.png" alt="childrens class logo" class="img-fluid m-2">
                    <small class="text-muted d-block">ages 7 - 8</small>
                    <p>
                        Introduces young dancers to the fun and rhythm of tap.
                        <br>Co-enrollment with ballet recommended.
                    </p>
                </div>
            </div>
            <div class="d-flex align-items-center" style="border: 1px solid #747474;">
                <div class="col text-center">
                    <img src="/images/prev/beginning-3.jpg" alt="childrens class logo" class="img-fluid m-2">
                    <small class="text-muted d-block">ages 7 - 8</small>
                    <p>
                        Introduces the young dancer to jazz technique.
                        <br>Co-enrollment with ballet recommended.
                    </p>
                </div>
            </div>
            <div class="d-flex align-items-center" style="border: 1px solid #747474;">
                <div class="col text-center">
                    <img src="/images/prev/hippity-hop.jpg" alt="childrens class logo" class="img-fluid m-2">
                    <small class="text-muted d-block">ages 5+</small>
                    <p>
                        Bounce along to the beat in this introductory hip hop class for kids!
                    </p>
                </div>
            </div>
            <div class="d-flex align-items-center" style="border: 1px solid #747474;">
                <div class="col text-center">
                    <img src="/images/prev/musical-theater.jpg" alt="childrens class logo" class="img-fluid m-2">
                    <small class="text-muted d-block">ages 5+</small>
                    <p>
                        Introduces jazz dancing and acting to music from Broadway's favorite musicals
                    </p>
                </div>
            </div>
            {{--            <div class="d-flex align-items-center" style="border: 1px solid #747474;">--}}
            {{--                <div class="col text-center">--}}
            {{--                    <img src="/images/prev/acro.jpg" alt="childrens class logo" class="img-fluid m-2">--}}
            {{--                    <small class="text-muted d-block">ages 6+</small>--}}
            {{--                    <p>--}}
            {{--                        Tumbling class combines dance technique with precision acrobatic elements.--}}
            {{--                    </p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
{{--        <div class="d-flex justify-content-center">--}}
{{--            <a href="/images/prev/24-fall.pdf" target="_blank" class="mx-3">--}}
{{--                <button class="btn btn-lg btn-danger shadow mb-4">View 2024-2025 Classes PDF</button>--}}
{{--            </a>--}}
{{--            <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank" class="mx-3">--}}
{{--                <button class="btn btn-lg btn-danger shadow mb-4">Register Now</button>--}}
{{--            </a>--}}
{{--        </div>--}}
    </div>

@endsection
