@php
    $columns = max(1, min((int) ($section['columns'] ?? 3), 4));
@endphp

<section class="my-5">
    @if(! empty($section['heading']))
        <h2 class="h3 text-center mb-4">{{ $section['heading'] }}</h2>
    @endif

    <div class="row row-cols-1 row-cols-md-{{ $columns }} g-3">
        @foreach(($section['media'] ?? []) as $media)
            <div class="col">
                @if(($media['type'] ?? 'image') === 'video')
                    <video width="100%" height="auto" controls>
                        <source src="{{ $media['src'] ?? '' }}" type="video/mp4">
                    </video>
                @elseif(! empty($media['src']))
                    <img src="{{ $media['src'] }}" alt="{{ $media['alt'] ?? '' }}" class="img-fluid">
                @endif
            </div>
        @endforeach
    </div>
</section>
