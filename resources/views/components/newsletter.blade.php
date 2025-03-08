<div class="col-sm my-3">
    <a href="/news/{{ $month }}" style="text-decoration: none; color: black;">
        <div style="border: 4px solid #CDC4D9;" class="rounded shadow">
            <img src="/images/{{ $image }}" alt="monthly news" class="img-fluid rounded" style="height: 250px; width: 100%; object-fit: cover; object-position: center;">
            <h2 class="text-center styled-font fw-bold text-capitalize" style="font-size: 2em;">{{ $month }}</h2>
            <p class="px-3">
                {!! strip_tags(substr("
                    $preview
                ", 0, 150)) . '...' !!}
            </p>
        </div>
    </a>
</div>
