<?php

use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

function newsletterAdmin(): User
{
    return User::factory()->create(['email' => 'customdenlie@gmail.com']);
}

it('moves articles and displays the saved order on both newsletter lists', function () {
    $first = Article::create(['newsTitle' => 'First newsletter', 'sort_order' => 0]);
    $second = Article::create(['newsTitle' => 'Second newsletter', 'sort_order' => 1]);
    $this->actingAs(newsletterAdmin())->patch(route('articles.move', $second), ['direction' => 'up'])->assertRedirect(route('articles.index'));
    foreach (['/articles', '/newsletter'] as $url) {
        $this->get($url)->assertOk()->assertSeeInOrder(['Second newsletter', 'First newsletter']);
    }
    $this->patch(route('articles.move', $second), ['direction' => 'up'])->assertRedirect();
    expect(Article::ordered()->pluck('id')->all())->toBe([$second->id, $first->id]);
});

it('prefills a duplicate and only creates it when saved', function () {
    $source = Article::create(['newsTitle' => 'December 2025', 'articleContent' => 'Holiday details', 'articleImage' => 'uploads/holiday.jpg']);
    $this->actingAs(newsletterAdmin())->get(route('articles.create', ['duplicate' => $source->id]))
        ->assertOk()->assertSee('December 2025 (Copy)')->assertSee('Holiday details');
    expect(Article::count())->toBe(1);
    $this->post('/articles', ['source_id' => $source->id, 'newsTitle' => 'December 2026', 'articleContent' => 'Updated holiday details'])->assertRedirect('/articles');
    $copy = Article::where('newsTitle', 'December 2026')->firstOrFail();
    expect($copy->articleImage)->toBe($source->articleImage);
    expect($source->fresh()->articleContent)->toBe('Holiday details');
});

it('removes images without breaking images shared with a duplicate', function () {
    Storage::fake('public');
    Storage::disk('public')->put('uploads/shared.jpg', 'image');
    $source = Article::create(['newsTitle' => 'Original', 'articleImage' => 'uploads/shared.jpg', 'newsImage' => 'uploads/shared.jpg']);
    $copy = $source->replicate();
    $copy->save();
    $this->actingAs(newsletterAdmin())->patch('/articles/'.$copy->id, ['newsTitle' => 'Copy', 'remove_articleImage' => 1, 'remove_newsImage' => 1])->assertRedirect('/articles');
    expect($copy->fresh()->articleImage)->toBeNull();
    expect($copy->fresh()->newsImage)->toBeNull();
    expect($source->fresh()->articleImage)->toBe('uploads/shared.jpg');
    Storage::disk('public')->assertExists('uploads/shared.jpg');
});

it('rejects newsletter changes from non admins', function () {
    $article = Article::create(['newsTitle' => 'Original']);
    $this->actingAs(User::factory()->create());
    $this->patch(route('articles.move', $article), ['direction' => 'up'])->assertForbidden();
    $this->get(route('articles.create', ['duplicate' => $article->id]))->assertForbidden();
    $this->post('/articles', ['newsTitle' => 'Unauthorized'])->assertForbidden();
    $this->patch('/articles/'.$article->id, ['newsTitle' => 'Unauthorized'])->assertForbidden();
});
