<form action="{{ route('contact.send') }}" method="POST" style="color: #747474;">
    @csrf
    <div class="mb-3">
        <label for="name" class="col-form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        <div>{{ $errors->first('name') }}</div>
    </div>
    <div class="mb-3">
        <label for="email" class="col-form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ old('email') }}" required>
        <div>{{ $errors->first('email') }}</div>
    </div>
    <div class="mb-3">
        <label for="message" class="col-form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="2" required>{{ old('message') }}</textarea>
        <div>{{ $errors->first('message') }}</div>
    </div>
    <button type="submit" style="background: #E11B22; width: max-content;" class="rounding shadow px-3 py-2 text-white">Submit</button>
</form>
