@php
    $columns = max(1, min((int) ($section['columns'] ?? 1), 4));
@endphp

<section class="my-4">
    @if(! empty($section['heading']))
        <h2 class="h3 text-center mb-3">{{ $section['heading'] }}</h2>
    @endif

    <div class="row row-cols-1 row-cols-md-{{ $columns }} g-3">
        @foreach(($section['images'] ?? []) as $image)
            @if(! empty($image['src']))
                <div class="col">
                    <img src="{{ $image['src'] }}" alt="{{ $image['alt'] ?? '' }}" class="img-fluid">
                </div>
            @endif
        @endforeach
    </div>
</section>
