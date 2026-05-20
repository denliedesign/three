<section class="my-4">
    <div class="d-flex flex-wrap justify-content-center gap-3">
        @foreach(($section['buttons'] ?? []) as $button)
            @if(! empty($button['url']) && ! empty($button['label']))
                <x-button :link="$button['url']" :button="$button['label']"/>
            @endif
        @endforeach
    </div>
</section>
