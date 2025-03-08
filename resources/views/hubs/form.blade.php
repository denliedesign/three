<div class="form-group mb-4">
    <label for="hubImage">Hub Image</label><br>
    <input type="file" class="form-control-file" name="hubImage">
    <div>{{ $errors->first('hubImage') }}</div>
</div>

<div class="form-group my-4">
    <label for="hubTitle">Hub Title</label>
    <input id="hubTitle" type="text" class="form-control" name="hubTitle" value="{{ old('hubTitle') ?? $hub->hubTitle }}">
    <div>{{ $errors->first('hubTitle') }}</div>
</div>

<div class="form-group my-4">
    <label for="hubPdf">Hub Pdf</label><br>
    <input type="file" class="form-control-file" name="hubPdf">
    <div>{{ $errors->first('hubPdf') }}</div>
</div>

<div class="form-group my-4">
    <label for="hubContent">Hub Content</label>
    <textarea name="hubContent" cols="30" rows="10" class="form-control" id="tiny">{{ old('hubContent') ?? $hub->hubContent }}</textarea>
    <div>{{ $errors->first('hubContent') }}</div>
</div>

@csrf
