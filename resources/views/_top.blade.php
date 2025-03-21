<section class="mont">
    <div style="background: #333;" class="d-md-flex justify-content-around align-items-center text-white py-3">
        <div class="text-center my-1"><ion-icon name="pin"></ion-icon> 2220 Coit Road #440, Plano, Texas 75075</div>
        <div class="text-center my-1"><ion-icon name="call"></ion-icon> 972-964-3838</div>
        <div class="text-center my-1"><ion-icon name="mail"></ion-icon> studiothree.dance@gmail.com</div>
        <x-button link="/preschool-dance-classes-plano" button="Register Ages 1-7" />
        <x-button link="/classes" button="Register Ages 7+" />
{{--        <div style="background: #E11B22;" class="rounding shadow px-3 py-2"><a class="text-white text-decoration-none" href="/">Register Ages 1-7</a></div>--}}
{{--        <div style="background: #E11B22;" class="rounding shadow px-3 py-2"><a class="text-white text-decoration-none" href="/">Register Ages 7+</a></div>--}}
        <div class="text-center my-1" style="font-size: 1.5em;">
            <span class="mx-1"><a href="https://www.facebook.com/Studio3Dance" target="_blank" class="text-white"><ion-icon name="logo-facebook"></ion-icon></a></span>
            <span class="mx-1"><a href="https://www.instagram.com/studiothreedance/" target="_blank" class="text-white"><ion-icon name="logo-instagram"></ion-icon></a></span>
        </div>
    </div>
</section>

<section class="mt-3">
    <div class="d-flex justify-content-center align-items-center">
        <a href="/"><img src="/images/logo-three.png" class="img-fluid" alt="logo" style="height: 150px;"></a>
    </div>
</section>

<section class="mont d-flex justify-content-around">
    <nav class="navbar navbar-expand-lg d-flex justify-content-center">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-around" style="font-size: 1em; text-transform: uppercase;">
                    @include('_nav-items')
                </ul>
            </div>
        </div>
    </nav>
</section>
