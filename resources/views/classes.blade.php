@extends('layouts.app')
@section('title', $page->title ?? 'Preschool Dance Classes | Studio 3 Dance Plano TX')
@section('description', $page->meta_description ?? "Discover the joy of dance at Studio 3 Dance in Plano, Texas! We offer engaging and fun preschool dance classes and toddler dance classes to nurture your child's passion for movement. Join our supportive dance community and watch your little one shine on the dance floor. Enroll today!")
@section('content')
    <x-banner
        :banner="$content['banner']['image'] ?? 'banner-leveled.jpg'"
        :alt="$content['banner']['alt'] ?? 'staff member leading young dancers in ballet'"
        :position="$content['banner']['position'] ?? '50% 10%'"
        :heading="$content['banner']['heading'] ?? 'Leveled Classes'"
    />

    <div class="container mont my-5">
        @can('update', \App\Models\Page::class)
            <p class="text-center"><a href="{{ route('pages.edit', 'classes') }}">Edit Classes Page</a></p>
        @endcan

        @foreach(($content['sections'] ?? []) as $section)
            @includeIf('pages.sections.' . ($section['type'] ?? ''), ['section' => $section])
        @endforeach
    </div>

@endsection
