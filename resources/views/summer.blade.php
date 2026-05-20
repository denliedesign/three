@extends('layouts.app')
@section('title', $page->title ?? 'Summer Dance Camps Workshops & Classes | Studio 3 Dance Plano TX')
@section('description', $page->meta_description ?? 'Plano Dance classes taught by skilled teachers who take pride in creating a learning experience that is positive and rewarding for dancers of all ages and ability levels.')
@section('content')
    <x-banner
        :banner="$content['banner']['image'] ?? 'summer-dance-plano.jpg'"
        :alt="$content['banner']['alt'] ?? ''"
        :position="$content['banner']['position'] ?? '50% 35%'"
        :heading="$content['banner']['heading'] ?? 'Summer Dance in Plano'"
    />

    <div class="container mt-5 mont d-flex justify-content-center">
        <div>
            @can('update', \App\Models\Page::class)
                <p class="text-center"><a href="{{ route('pages.edit', 'summer') }}">Edit Summer Page</a></p>
            @endcan

            @foreach(($content['sections'] ?? []) as $section)
                @includeIf('pages.sections.' . ($section['type'] ?? ''), ['section' => $section])
            @endforeach

        </div>
    </div>

@endsection
