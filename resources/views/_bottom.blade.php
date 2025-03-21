<section class="mont my-5" id="bottom-cta">
    <div class="container">
        <div class="row">
            <div class="col-md mx-0 mx-md-3"></div>
            <div class="col-md mx-0 mx-md-3 shadow py-4 rounding">
                <div style="width: 100%; font-size: 1.25em;">
                    <div class="d-flex justify-content-center fw-bold my-3" style="color: #E11B22;"><div>Ready to leap in?</div></div>
                    <x-button link="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" button="Enroll Today!" />
                </div>
            </div>
            <div class="col-md mx-0 mx-md-3 shadow py-4 rounding">
                <div style="width: 100%; font-size: 1.25em;">
                    <div class="d-flex justify-content-center fw-bold my-3" style="color: #E11B22;"><div>Still have questions?</div></div>
                    <div class="d-flex justify-content-center my-3">
                        <div style="border: 2px solid #E11B22; width: max-content;" class="rounding shadow px-3 py-2"><a style="color: #E11B22;" class="text-decoration-none" href="#footer">Contact Us!</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md mx-0 mx-md-3"></div>
        </div>
    </div>
</section>

<section class="mont pt-4 mt-5 text-white" style="background: #333333;" id="footer">
    <div class="container">
        <div class="my-3 row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-3 d-flex justify-content-center">
            <div>
                <img src="/images/logo-three-crop.png" alt="logo" class="img-fluid" style="height: 50px; width: auto;">
                <br><ion-icon name="person"></ion-icon> Brenda Wilder, Owner
                <br><ion-icon name="pin"></ion-icon> 2220 Coit Road #440, Plano, Texas 75075
                <br><ion-icon name="call"></ion-icon> 972-964-3838
                <br><ion-icon name="mail"></ion-icon> studiothree.dance@gmail.com
            </div>
            <div class="my-3" style="list-style-type: none;">
                @include('_nav-items')
                <li class="nav-item mx-2 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Studio
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dance-plano">Dance Plano</a></li>
                        <li><a class="dropdown-item" href="/dance-richardson">Dance Richardson</a></li>
                        <li><a class="dropdown-item" href="/dance-frisco">Dance Frisco</a></li>
                        <li><a class="dropdown-item" href="/allen-dance">Dance Allen</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-2">
                    <form style="text-decoration: none;" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="mx-0 px-0 text-white">Admin</button>
                    </form>
                </li>
            </div>
            <div class="my-3">
                <x-contact />
{{--                <form action="" method="POST">--}}
{{--                    <div class="mb-3">--}}
{{--                        <input type="hidden" name="my_name" id="my_name" value="">--}}
{{--                        <input type="checkbox" name="contact_me_by_fax_only" id="contact_me_by_fax_only" value="1" tabindex="-1" autocomplete="off" class="d-none">--}}
{{--                        <label for="name" class="col-form-label">Name</label>--}}
{{--                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>--}}
{{--                        <div>{{ $errors->first('name') }}</div>--}}
{{--                    </div>--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="email" class="col-form-label">Email</label>--}}
{{--                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ old('email') }}" required>--}}
{{--                        <div>{{ $errors->first('email') }}</div>--}}
{{--                    </div>--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="message" class="col-form-label">Message</label>--}}
{{--                        <textarea class="form-control" id="message" name="message" rows="2" required>{{ old('message') }}</textarea>--}}
{{--                        <div>{{ $errors->first('message') }}</div>--}}
{{--                    </div>--}}
{{--                    @csrf--}}
{{--                    --}}{{--                        <button type="submit" class="btn btn-danger">Submit</button>--}}
{{--                    <div type="submit" style="background: #E11B22; width: max-content;" class="rounding shadow px-3 py-2"><a class="text-white text-decoration-none" href="/">Submit</a></div>--}}
{{--                </form>--}}
            </div>
        </div>
    </div>
    <div class="text-center text-white-50 mt-5 pb-1">
        <div style="font-size: 0.75em;">
            Dance Website Design by Denlie Design. &nbsp; Copyright © 2025 Studio 3 Dance. &nbsp; All rights reserved.
        </div>
    </div>
</section>
