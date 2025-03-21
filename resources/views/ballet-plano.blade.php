@extends('layouts.app')

@section('title', 'Ballet Plano | Studio 3 Dance')
@section('description', 'Discover the joy of ballet in Plano, TX with Studio 3 Dance (S3D). Elevate your child\'s dance journey with our exceptional ballet classes, experienced instructors, and a focus on timeless etiquette and lifelong values. Unleash the grace and passion of ballet at Studio 3 Dance.')
@section('content')
    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div id="general-section" class="container my-5">
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <div>
                    <p class="text-center" style="font-size: 1.5em;"><strong>Enchanting Ballet Classes in Plano, TX</strong></p>
                    <p>
                        At Studio 3 Dance, we offer captivating ballet classes in Plano that cater to all skill levels. From beginners to budding ballerinas, our expert instructors create a nurturing environment where passion meets technique. Explore the beauty of movement, master fundamental positions, and watch your child blossom into a confident dancer. Join us for an enchanting ballet journey at Studio 3 Dance.
                    <div class="d-flex justify-content-center">
                        <a class="mx-3" href="/preschool-dance-classes-plano">
                            <button class="btn btn-lg btn-danger shadow mb-4">See Our Children's Classes</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <img src="/images/prev/ballet-plano.jpg" alt="ballerinas" class="img-fluid shadow rounded">
            </div>
        </div>

        <div class="row my-4">
            <div class="col-sm">
                <img src="/images/prev/plano-ballet.jpg" alt="ballerinas" class="img-fluid shadow rounded">
            </div>
            <div class="col-sm d-flex align-items-center">
                <div>
                    <p class="text-center" style="font-size: 1.5em;"><strong>Meet Our Dedicated Ballet Instructors in Plano</strong></p>
                    <p>
                        At Studio 3 Dance, our ballet instructors in Plano are not just teachers; they are mentors, guides, and sources of inspiration. With years of experience and a deep love for the art of ballet, our instructors are committed to nurturing each student's potential. Your child will receive personalized attention, constructive feedback, and the encouragement needed to flourish as a ballet dancer. Discover the passion and expertise our instructors bring to every dance class at Studio 3 Dance.
                    <div class="d-flex justify-content-center">
                        <a href="/staff">
                            <button class="btn btn-lg btn-danger shadow mb-4">Meet Our Team</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <div>
                    <p class="text-center" style="font-size: 1.5em;"><strong>Cultivating Grace: Ballet Etiquette and Lifelong Values</strong></p>
                    <p>
                        At Studio 3 Dance, we go beyond teaching dance steps – we instill ballet etiquette and lifelong values. Our Plano ballet studio emphasizes discipline, teamwork, and respect, creating an environment where young dancers not only excel in their art but also grow as individuals. Join us to witness the transformation of your child into a graceful and confident dancer, equipped with the values that extend far beyond the dance floor. Experience the magic of ballet with Studio 3 Dance in Plano, TX.
                    </p>
                    <div class="d-flex justify-content-center">
                        <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">
                            <button class="btn btn-lg btn-danger shadow mb-4">Register Now</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <img src="/images/prev/ballet-in-plano-tx.jpg" alt="ballerinas" class="img-fluid shadow rounded">
            </div>
        </div>

    </div>
@endsection
