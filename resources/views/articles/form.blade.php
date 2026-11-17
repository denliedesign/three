@if($article->source_id)
    <input type="hidden" name="source_id" value="{{ $article->source_id }}">
    <p class="alert alert-info">This is a copy. Update the title and content, then save to create your new newsletter.</p>
@endif

<div class="form-group mb-4">
    <label for="newsImage">News Image (what shows on the main news page)</label><br>
    @if($article->newsImage)
        <div class="my-2"><img src="{{ asset('/storage/' . $article->newsImage) }}" alt="Current image" style="max-width: 240px; max-height: 180px;"></div>
        <div class="form-check my-2">
            <input id="remove_newsImage" class="form-check-input" type="checkbox" name="remove_newsImage" value="1" @checked(old('remove_newsImage'))>
            <label class="form-check-label" for="remove_newsImage">Remove current image</label>
        </div>
    @endif
    <input id="newsImage" type="file" class="form-control-file" name="newsImage" accept="image/*">
    <small class="d-block text-muted">Uploading a new image replaces the current image.</small>
    <div>{{ $errors->first('newsImage') }}</div>
</div>

<div class="form-group my-4">
    <label for="newsTitle">News Title (example: March 2025 News)</label>
    <input id="newsTitle" type="text" class="form-control" name="newsTitle" value="{{ old('newsTitle') ?? $article->newsTitle }}">
    <div>{{ $errors->first('newsTitle') }}</div>
</div>

<div class="form-group my-4">
    <label for="articleTitle">Article Title (example: Spring Break, Auditions, & Recital Info)</label>
    <input id="articleTitle" type="text" class="form-control" name="articleTitle" value="{{ old('articleTitle') ?? $article->articleTitle }}">
    <div>{{ $errors->first('articleTitle') }}</div>
</div>

<div class="form-group my-4">
    <label for="articleImage">Article Image</label><br>
    @if($article->articleImage)
        <div class="my-2"><img src="{{ asset('/storage/' . $article->articleImage) }}" alt="Current image" style="max-width: 240px; max-height: 180px;"></div>
        <div class="form-check my-2">
            <input id="remove_articleImage" class="form-check-input" type="checkbox" name="remove_articleImage" value="1" @checked(old('remove_articleImage'))>
            <label class="form-check-label" for="remove_articleImage">Remove current image</label>
        </div>
    @endif
    <input id="articleImage" type="file" class="form-control-file" name="articleImage" accept="image/*">
    <small class="d-block text-muted">Uploading a new image replaces the current image.</small>
    <div>{{ $errors->first('articleImage') }}</div>
</div>

<div class="form-group my-4">
    <label for="articleContent">Article Content</label>
    <textarea name="articleContent" cols="30" rows="10" class="form-control" id="tiny">{{ old('articleContent') ?? $article->articleContent }}</textarea>
    <div>{{ $errors->first('articleContent') }}</div>
</div>

@csrf
