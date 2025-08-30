<form id="contact-form" action="{{ route('contact.send') }}" method="POST" style="color:#747474;">
    @csrf

    {{-- Honeypots (visually/semantically hidden) --}}
    <div class="d-none" aria-hidden="true">
        <input type="hidden" name="my_name" id="my_name" value="">
        <input type="checkbox" name="contact_me_by_fax_only" id="contact_me_by_fax_only" value="1" tabindex="-1" autocomplete="off">
    </div>

    {{-- Server-side time trap --}}
    <input type="hidden" name="submitted_at" value="{{ \Carbon\Carbon::now()->timestamp }}">

    <div class="mb-3">
        <label for="name" class="col-form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autocomplete="name">
        <div class="text-danger small">{{ $errors->first('name') }}</div>
    </div>

    <div class="mb-3">
        <label for="email" class="col-form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" >
        {{-- or add help text and keep aria-describedby --}}
        {{-- <small id="emailHelp" class="form-text text-muted">We’ll only use this to reply.</small> --}}
        <div class="text-danger small">{{ $errors->first('email') }}</div>
    </div>

    <div class="mb-3">
        <label for="message" class="col-form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="3" required>{{ old('message') }}</textarea>
        <div class="text-danger small">{{ $errors->first('message') }}</div>
    </div>

    {{-- reCAPTCHA v3 --}}
    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
    <div class="text-danger small mb-2">{{ $errors->first('captcha') }}</div>

    <button id="contact-submit" type="submit" class="rounding shadow px-3 py-2 text-white" style="background:#E11B22;width:max-content;">
        Submit
    </button>
</form>

<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}" async defer></script>
<script>
    (function () {
        const form = document.getElementById('contact-form');
        const submitBtn = document.getElementById('contact-submit');

        function disableBtn() { if (submitBtn) submitBtn.disabled = true; }
        function enableBtn()  { if (submitBtn) submitBtn.disabled = false; }

        grecaptcha.ready(() => {
            form.addEventListener('submit', async function (e) {
                e.preventDefault();
                disableBtn();
                try {
                    const token = await grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', { action: 'contact_form' });
                    document.getElementById('g-recaptcha-response').value = token;
                    // Programmatic submit bypasses the event handler, so no infinite loop.
                    form.submit();
                } catch (err) {
                    enableBtn();
                    alert('Could not verify you are human. Please reload the page and try again.');
                }
            }, { passive: false });
        });
    })();
</script>
