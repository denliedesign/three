<section class="my-4 text-center">
    @foreach(($section['links'] ?? []) as $link)
        @if(! empty($link['url']) && ! empty($link['label']))
            <a style="text-decoration: none;" href="{{ $link['url'] }}"><small class="text-muted">{{ $link['label'] }}</small></a>
            @if(! $loop->last)
                &nbsp; &middot; &nbsp;
            @endif
        @endif
    @endforeach
</section>
