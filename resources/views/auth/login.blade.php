@extends('layouts.master')
@section('content')
<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Masuk</h1>
        </div>
    </div>
</div>
<!-- Hero End -->
<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded h-100 p-5">
                    <div class="section-title">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Masuk</h5>
                        <h1 class="display-6 mb-4">AKUN</h1>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <!-- <i class="bi bi-geo-alt fs-1 text-primary me-3"></i> -->
                        <div class="text-start">
                            <!-- <h5 class="mb-0">Our Office</h5> -->
                            <span>Silahkan masuk dengan akun yang anda yang telah dibuat.</span>
                        </div>
                    </div>
                    <!-- <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Email Us</h5>
                            <span>info@example.com</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Call Us</h5>
                            <span>+012 345 6789</span>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <input id="username" type="text" class="form-control border-0 bg-light px-4" placeholder="Username atau Email" style="height: 55px;" name="username" required autocomplete="username" autofocus>
                            @include('sweetalert::alert')
                        </div>
                        <div class="col-12">
                            <input id="password" type="password" class="form-control border-0 bg-light px-4" placeholder="Password" style="height: 55px;" name="password" required autocomplete="current-password">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Masuk</button>
                            @if (Route::has('register'))
                            <a class="btn btn-link" href="{{ route('register') }}">
                                {{ __('Buat akun') }}
                            </a>
                            @endif
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Lupa kata sandi?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection