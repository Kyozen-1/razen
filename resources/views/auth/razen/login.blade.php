@extends('auth.razen.layouts.app')

@section('content')
    <div class="col-12 col-lg-auto h-100 pb-4 px-4 pt-0 p-lg-0">
        <div class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
        <div class="sw-lg-50 px-5">
            <div class="sh-11">
            <a href="index.html">
                <div class="logo-default"></div>
            </a>
            </div>
            <div class="mb-5">
            <h2 class="cta-1 mb-0 text-primary">Welcome,</h2>
            <h2 class="cta-1 text-primary">let's get started!</h2>
            </div>
            <div class="mb-5">
            <p class="h6">Please use your credentials to login.</p>
            {{-- <p class="h6">
                If you are not a member, please
                <a href="Pages.Authentication.Register.html">register</a>
                .
            </p> --}}
            </div>
            <div>
            <form id="loginForm" action="{{ route('razen.login.submit') }}" method="POST" class="tooltip-end-bottom" novalidate>
                @csrf
                <div class="mb-3 filled form-group tooltip-end-top">
                <i data-acorn-icon="email"></i>
                    <input class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" name="email" autocomplete="email" autofocus required/>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 filled form-group tooltip-end-top">
                <i data-acorn-icon="lock-off"></i>
                    <input class="form-control pe-7 @error('password') is-invalid @enderror" name="password" type="password" placeholder="Password" required autocomplete="current-password"/>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                {{-- <a class="text-small position-absolute t-3 e-3" href="Pages.Authentication.ForgotPassword.html">Forgot?</a> --}}
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Login</button>
            </form>
            </div>
        </div>
        </div>
    </div>
@endsection
