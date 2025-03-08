<!-- card -->
<div class="col p-4">
    <div class="card mb-4">
        <img src="/images/{{ $image }}" alt="" class="img-fluid" style="height: 338px; width: auto; object-fit: cover; object-position: top; filter: grayscale(100%);">
        <div class="card-body p-2">
            <!-- accordion -->
            <div class="accordion" id="accordionExample">
                <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="headingOne">
                        <div class="acc-btn" data-bs-toggle="collapse" data-bs-target="#{{ $tag }}" aria-expanded="true" aria-controls="{{ $tag }}">
                            <div class="text-uppercase fw-bold text-center" style="font-size: 0.5em;">{{ $name }}</div>
                        </div>
                    </h2>
                    <div id="{{ $tag }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body p-2">
                        {!! $bio !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- end accordion -->
        </div>
    </div>
</div>
<!-- end card -->
