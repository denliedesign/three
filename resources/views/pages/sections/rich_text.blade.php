<section class="my-4">
    @if(! empty($section['heading']))
        <h2 class="h3 text-center mb-3">{{ $section['heading'] }}</h2>
    @endif

    @if(! empty($section['body']))
        <div>{!! nl2br(e($section['body'])) !!}</div>
    @endif
</section>
