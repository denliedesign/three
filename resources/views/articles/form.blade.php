<div class="form-group mb-4">
    <label for="newsImage">News Image (what shows on the main news page)</label><br>
    <input type="file" class="form-control-file" name="newsImage">
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
    <input type="file" class="form-control-file" name="articleImage">
    <div>{{ $errors->first('articleImage') }}</div>
</div>

<div class="form-group my-4">
    <label for="articleContent">Article Content</label>
    <textarea name="articleContent" cols="30" rows="10" class="form-control" id="tiny">{{ old('articleContent') ?? $article->articleContent }}</textarea>
    <div>{{ $errors->first('articleContent') }}</div>
</div>

@csrf
