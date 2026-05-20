@php
    $imageFirst = ($section['layout'] ?? 'text_left') === 'image_left';
@endphp

<section class="my-5">
    <div class="row align-items-center">
        @if($imageFirst)
            <div class="col-sm mb-3 mb-sm-0">
                @if(! empty($section['image']['src']))
                    <img src="{{ $section['image']['src'] }}" alt="{{ $section['image']['alt'] ?? '' }}" class="img-fluid shadow rounded">
                @endif
            </div>
        @endif

        <div class="col-sm">
            @if(! empty($section['heading']))
                <h2 class="h3 text-center mb-3">{{ $section['heading'] }}</h2>
            @endif

            @if(! empty($section['body']))
                <div>{!! nl2br(e($section['body'])) !!}</div>
            @endif
        </div>

        @if(! $imageFirst)
            <div class="col-sm mt-3 mt-sm-0">
                @if(! empty($section['image']['src']))
                    <img src="{{ $section['image']['src'] }}" alt="{{ $section['image']['alt'] ?? '' }}" class="img-fluid shadow rounded">
                @endif
            </div>
        @endif
    </div>
</section>
