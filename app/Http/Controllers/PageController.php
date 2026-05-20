<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function summer()
    {
        $page = Page::where('slug', 'summer')->firstOrFail();

        return view('summer', [
            'page' => $page,
            'content' => $page->content,
        ]);
    }

    public function classes()
    {
        $page = Page::where('slug', 'classes')->firstOrFail();

        return view('classes', [
            'page' => $page,
            'content' => $page->content,
        ]);
    }

    public function preschoolDanceClassesPlano()
    {
        $page = Page::where('slug', 'preschool-dance-classes-plano')->firstOrFail();

        return view('preschool-dance-classes-plano', [
            'page' => $page,
            'content' => $page->content,
        ]);
    }

    public function edit(Page $page)
    {
        Gate::authorize('update', Page::class);

        return view('pages.edit', [
            'page' => $page,
        ]);
    }

    public function update(Request $request, Page $page)
    {
        Gate::authorize('update', Page::class);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string'],
            'content' => ['required', 'array'],
            'content.banner.image' => ['required', 'string', 'max:255'],
            'content.banner.alt' => ['nullable', 'string', 'max:255'],
            'content.banner.position' => ['required', 'string', 'max:255'],
            'content.banner.heading' => ['required', 'string', 'max:255'],
            'content.sections' => ['required', 'array'],
            'content.sections.*.type' => ['required', 'string', 'in:rich_text,button_group,image_grid,text_image,card_grid,media_grid,callout,link_list'],
            'content.sections.*.body' => ['nullable', 'string'],
            'content.sections.*.heading' => ['nullable', 'string', 'max:255'],
            'content.sections.*.subheading' => ['nullable', 'string', 'max:255'],
            'content.sections.*.layout' => ['nullable', 'string', 'in:text_left,image_left'],
            'content.sections.*.image' => ['nullable', 'array'],
            'content.sections.*.image.src' => ['nullable', 'string', 'max:255'],
            'content.sections.*.image.alt' => ['nullable', 'string', 'max:255'],
            'content.sections.*.columns' => ['nullable', 'integer', 'min:1', 'max:4'],
            'content.sections.*.buttons' => ['nullable', 'array'],
            'content.sections.*.buttons.*.label' => ['required_with:content.sections.*.buttons', 'string', 'max:255'],
            'content.sections.*.buttons.*.url' => ['required_with:content.sections.*.buttons', 'url', 'max:2048'],
            'content.sections.*.images' => ['nullable', 'array'],
            'content.sections.*.images.*.src' => ['required_with:content.sections.*.images', 'string', 'max:255'],
            'content.sections.*.images.*.alt' => ['nullable', 'string', 'max:255'],
            'content.sections.*.cards' => ['nullable', 'array'],
            'content.sections.*.cards.*.image' => ['nullable', 'string', 'max:255'],
            'content.sections.*.cards.*.title' => ['nullable', 'string', 'max:255'],
            'content.sections.*.cards.*.subtitle' => ['nullable', 'string', 'max:255'],
            'content.sections.*.cards.*.body' => ['nullable', 'string'],
            'content.sections.*.media' => ['nullable', 'array'],
            'content.sections.*.media.*.type' => ['required_with:content.sections.*.media', 'string', 'in:image,video'],
            'content.sections.*.media.*.src' => ['required_with:content.sections.*.media', 'string', 'max:255'],
            'content.sections.*.media.*.alt' => ['nullable', 'string', 'max:255'],
            'content.sections.*.links' => ['nullable', 'array'],
            'content.sections.*.links.*.label' => ['required_with:content.sections.*.links', 'string', 'max:255'],
            'content.sections.*.links.*.url' => ['required_with:content.sections.*.links', 'string', 'max:2048'],
        ]);

        $page->update($validated);

        return response()->json([
            'message' => 'Page saved.',
            'page' => $page->fresh(),
        ]);
    }

    public function upload(Request $request)
    {
        Gate::authorize('update', Page::class);

        $validated = $request->validate([
            'image' => ['required', 'file', 'image', 'max:5000'],
        ]);

        $path = $validated['image']->store('uploads/pages', 'public');

        return response()->json([
            'path' => Storage::url($path),
        ]);
    }
}
