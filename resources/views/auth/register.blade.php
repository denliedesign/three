@extends('layouts.app')
@section('content')

   <div class="container my-5 mont">
       <div class="row">
           <div class="col-sm"></div>
           <div class="col-sm">
               <form method="POST" action="{{ route('register') }}">
               @csrf

               <!-- Name -->
                   <div class="mb-3">
                       <label for="name" class="form-label">{{ __('Name') }}</label>
                       <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                       @error('name')
                       <div class="alert alert-danger mt-2">{{ $message }}</div>
                       @enderror
                   </div>

                   <!-- Email Address -->
                   <div class="mb-3">
                       <label for="email" class="form-label">{{ __('Email') }}</label>
                       <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                       @error('email')
                       <div class="alert alert-danger mt-2">{{ $message }}</div>
                       @enderror
                   </div>

                   <!-- Password -->
                   <div class="mb-3">
                       <label for="password" class="form-label">{{ __('Password') }}</label>
                       <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
                       @error('password')
                       <div class="alert alert-danger mt-2">{{ $message }}</div>
                       @enderror
                   </div>

                   <!-- Confirm Password -->
                   <div class="mb-3">
                       <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                       <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                       @error('password_confirmation')
                       <div class="alert alert-danger mt-2">{{ $message }}</div>
                       @enderror
                   </div>

                   <div class="d-flex justify-content-between">
                       <a class="btn btn-link" href="{{ route('login') }}">
                           {{ __('Already registered?') }}
                       </a>

                       <button type="submit" class="btn btn-primary ms-3">
                           {{ __('Register') }}
                       </button>
                   </div>
               </form>
           </div>
           <div class="col-sm"></div>
       </div>
   </div>

@endsection
