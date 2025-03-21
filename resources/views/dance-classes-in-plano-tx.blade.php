@extends('layouts.app')

@section('title', 'Dance Classes In Plano TX | Studio 3 Dance')
@section('description', 'Discover the joy of movement at Studio 3 Dance, the premier dance studio in Plano, Texas. We offer dynamic and engaging dance classes in Plano for children of all ages and skill levels. Join us today and explore the world of dance in a supportive and nurturing environment.')
@section('content')
    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div id="general-section" class="container my-5 mont">
        <h1 class="my-4 text-center">Welcome to Studio 3 Dance</h1>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <div>
                    <p class="text-center" style="font-size: 1.5em;"><strong>Unleash Your Passion for Dance in Plano, TX</strong></p>
                    <p>
                        At Studio 3 Dance, we are proud to be one of the leading dance studios in Plano, Texas. We provide a vibrant and inclusive community where children can discover their love for dance while developing essential skills, self-confidence, and lifelong friendships. Our experienced and passionate instructors are dedicated to fostering a positive and encouraging environment, ensuring that every child's unique abilities are nurtured and celebrated.
                        <br><br>
                        Joining our dance studio in Plano opens up a world of possibilities for your child. From classical ballet to energetic hip-hop, we offer a wide range of dance classes to cater to various interests and age groups. Whether your child is a beginner or an experienced dancer, our carefully structured programs are designed to challenge and inspire growth, while ensuring that each child feels supported and motivated to reach their full potential.
                    </p>
                    <div class="d-flex justify-content-center">
                        <a href="/classes">
                            <button class="btn btn-lg btn-danger shadow mb-4">See Our Classes</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <img src="/images/prev/dance-classes-in-plano.jpg" alt="children practicing their balance in class" class="img-fluid shadow rounded">
            </div>
        </div>

        <div class="row my-4">
            <div class="col-sm">
                <img src="/images/prev/dance-classes-in-plano-tx.jpg" alt="view of recital stage from behind the curtain" class="img-fluid shadow rounded">
            </div>
            <div class="col-sm d-flex align-items-center">
                <div>
                    <p class="text-center" style="font-size: 1.5em;"><strong>Explore our Dance Classes in Plano: Find Your Rhythm and Express Yourself</strong></p>
                    <p>
                        Located in the heart of Plano, our state-of-the-art dance facility is equipped with spacious studios, sprung floors, and top-notch sound systems, providing an optimal environment for learning and expression. We believe in the transformative power of dance and its ability to instill discipline, foster creativity, and promote a healthy lifestyle. Our dedicated team of instructors utilizes innovative teaching techniques and engaging choreography to make each class a joyful and rewarding experience.
                        <br><br>
                        We understand the importance of flexibility in busy family schedules. That's why we offer a variety of class schedules and options, including after-school and weekend classes, to accommodate different lifestyles. Our commitment to excellence extends beyond the studio walls, as we regularly organize recitals, workshops, and community performances to showcase our students' progress and celebrate their accomplishments.
                        <br><br>
                        Join Studio 3 Dance today and discover the joy and artistry of dance in Plano, Texas. Whether your child dreams of pirouetting across the stage or simply wants to have fun and stay active, our passionate instructors and supportive community are here to guide them every step of the way. Experience the magic of dance with us at Studio 3 Dance, the leading dance studio in Plano, TX.
                    </p>
                    <div class="d-flex justify-content-center">
                        <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">
                            <button class="btn btn-lg btn-danger shadow mb-4">Register Now</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
