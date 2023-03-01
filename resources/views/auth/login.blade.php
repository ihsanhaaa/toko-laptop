@extends('layouts.app')

@section('content')
    <section class="login-section">
        <div class="map"></div>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-4 offset-lg-4">
                    <div class="login-box">
                        <div class="section-heading mb-30">
                            <h2>Login To Your Account</h2>
                            <p>Multipurpose Saas Startup Template.</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="default-btn btn-blue">Masuk</button>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
