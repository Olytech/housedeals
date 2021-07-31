@extends('layouts.app')
<div class="login-form">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="text-center">
            <a href="index.html" aria-label="Space">
                <img class="mb-3" src="assets/image/logo.png" alt="Logo" width="60" height="60">
            </a>
          </div>
        <div class="text-center mb-4">
            <h1 class="h3 mb-0">Please sign in to House Deals Africa</h1>
            <p>Signin to manage your account.</p>
        </div>
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif
        <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <i class="fa fa-user form__text-inner"></i>
                </span>
              </div>
              <input type="email" class="form-control form__input  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Email" autocomplete="email" autofocus">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </span>
                </div>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Password" autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-6">
              <!-- Checkbox -->
              <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                <input class="custom-control-input"type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label" for="remember">
                  Remember Me
                </label>
              </div>
              <!-- End Checkbox -->
            </div>
            <div class="col-6 text-right">
              <a class="float-right" href="{{route('forget-password')}}">Forgot Password?</a>
            </div>
        </div>
        <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary login-btn btn-block">Signin</button>
        </div>

        <div class="text-center mb-3">
            <p class="text-muted">Do not have an account? <a href="{{route('register')}}">Signup</a></p>
        </div>
		<div class="or-seperator"><i>OR</i></div>

        <div class="row mx-gutters-2 mb-4">
            <div class="col-sm-6 mb-2 mb-sm-0">
              <a href="{{url('/redirect')}}" class="btn btn-block btn-sm btn-facebook">
                <i class="fa fa-facebook mr-2"></i>
                Signin with Facebook
              </a>
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-block btn-sm btn-twitter">
                <i class="fa fa-twitter mr-2"></i>
                Signin with Twitter
              </button>
            </div>
        </div>
        <p class="small text-center text-muted mb-0">All rights reserved. © House Deals Africa. 2021 housedealafrica.com</p>
    </form>
</div>
