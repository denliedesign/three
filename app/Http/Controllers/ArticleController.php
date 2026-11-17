<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getArticles()
    {
        return Article::ordered()->get();
    }

    public function index()
    {
        return view('articles.index', ['articles' => $this->getArticles()]);
    }

    public function move(Request $request, Article $article)
    {
        Gate::authorize('update', Article::class);
        $data = $request->validate(['direction' => 'required|in:up,down']);

        DB::transaction(function () use ($article, $data) {
            $articles = Article::ordered()->lockForUpdate()->get();
            $index = $articles->search(fn ($item) => $item->id === $article->id);
            $target = $index + ($data['direction'] === 'up' ? -1 : 1);
            if ($index === false || $target < 0 || $target >= $articles->count()) {
                return;
            }
            $items = $articles->all();
            [$items[$index], $items[$target]] = [$items[$target], $items[$index]];
            foreach ($items as $position => $item) {
                $item->update(['sort_order' => $position]);
            }
        });

        return redirect()->route('articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Gate::authorize('update', Article::class);
        //        $this->authorize('update', Article::class);
        $article = new Article;
        if ($request->filled('duplicate')) {
            $source = Article::findOrFail($request->query('duplicate'));
            $article = $source->replicate();
            $article->newsTitle .= ' (Copy)';
            $article->setAttribute('source_id', $source->id);
        }

        return view('articles.create', compact('article'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Gate::authorize('update', Article::class);
        $data = $this->validateRequest();
        if (request()->filled('source_id')) {
            $source = Article::findOrFail(request('source_id'));
            foreach (['newsImage', 'articleImage'] as $field) {
                $data[$field] = $source->$field;
            }
        }
        $data['sort_order'] = (Article::min('sort_order') ?? 1) - 1;
        $article = Article::create($data);
        $this->storeImage($article);

        return redirect('articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        Gate::authorize('update', Article::class);

        //        $this->authorize('update', Article::class);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        Gate::authorize('update', Article::class);
        $article->update($this->validateRequest());
        $this->storeImage($article);

        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Gate::authorize('update', Article::class);
        $article->delete();

        return redirect('/articles');
    }

    private function validateRequest()
    {
        request()->validate([
            'source_id' => 'nullable|integer|exists:articles,id',
            'newsImage' => 'nullable|file|image|max:5000',
            'articleImage' => 'nullable|file|image|max:10000',
            'remove_newsImage' => 'sometimes|boolean',
            'remove_articleImage' => 'sometimes|boolean',
        ]);

        return request()->validate([
            'newsTitle' => 'required',
            'articleTitle' => 'nullable',
            'articleContent' => 'nullable',
        ]);
    }

    private function storeImage($article)
    {
        foreach (['newsImage', 'articleImage'] as $field) {
            // Copies can share images, so removing one only clears this article's reference.
            if (request()->boolean('remove_'.$field)) {
                $article->update([$field => null]);
            }
            if (request()->hasFile($field)) {
                $article->update([$field => request()->file($field)->store('uploads', 'public')]);
            }
        }
    }
}
