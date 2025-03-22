<form action="{{ route('contact.send') }}" method="POST" style="color: #747474;">
    @csrf
    <div class="mb-3">
        <input type="hidden" name="my_name" id="my_name" value="">
        <input type="checkbox" name="contact_me_by_fax_only" id="contact_me_by_fax_only" value="1" tabindex="-1" autocomplete="off" class="d-none">
        <input type="hidden" name="submitted_at" value="{{ \Carbon\Carbon::now()->timestamp }}">
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
