@php
    $columns = max(1, min((int) ($section['columns'] ?? 3), 4));
@endphp

<section class="my-5">
    @if(! empty($section['heading']))
        <h2 class="h3 text-center mb-4">{{ $section['heading'] }}</h2>
    @endif

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-{{ $columns }} g-3">
        @foreach(($section['cards'] ?? []) as $card)
            <div class="col">
                <div class="h-100 text-center p-3 border">
                    @if(! empty($card['image']))
                        <img src="{{ $card['image'] }}" alt="" class="img-fluid mb-2">
                    @endif

                    @if(! empty($card['title']))
                        <div class="fw-bold">{{ $card['title'] }}</div>
                    @endif

                    @if(! empty($card['subtitle']))
                        <small class="text-muted d-block">{{ $card['subtitle'] }}</small>
                    @endif

                    @if(! empty($card['body']))
                        <p class="mb-0 mt-2">{!! nl2br(e($card['body'])) !!}</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</section>
