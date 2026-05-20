<section class="my-5 text-center">
    @if(! empty($section['heading']))
        <h2 class="h3 mb-2">{{ $section['heading'] }}</h2>
    @endif

    @if(! empty($section['subheading']))
        <div class="text-muted mb-3">{{ $section['subheading'] }}</div>
    @endif

    @if(! empty($section['body']))
        <div>{!! nl2br(e($section['body'])) !!}</div>
    @endif
</section>
