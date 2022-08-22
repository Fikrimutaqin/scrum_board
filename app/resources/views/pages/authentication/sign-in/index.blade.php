@extends('layouts.authentication.index')
@push('add-css')
@endpush

@section('content')
    <section class="auth-section-style">
        <div class="container d-flex align-items-center justify-content-center h-100">
            <div class="row w-100 bg-white rounded-20 py-5 px-5">
                <div class="col-lg-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="my-3 mb-5">
                        <img class="img-fluid" src="{{ URL::to('assets/authentication/images/Logo.png') }}" alt="Logo" />
                    </div>
                    <h2 class="color-primary auth-head-font-style">
                        Sign In
                    </h2>
                    <p class="color-secondary auth-desc-font-style">
                        Selamat Datang di Aplikasi Manajemen Proyek
                    </p>
                    <form method="POST" action="/auth/signin">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label auth-label-input color-primary">Email*</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="form-control rounded-50 auth-input-style color-primary h-50" autofocus>
                        </div>
                        <div class="mb-3">
                            <label class="form-label auth-label-input color-primary">Password*</label>
                            <input type="password" name="password" value="{{ old('password') }}"
                                class="form-control rounded-50 auth-input-style color-primary h-50" autofocus>
                        </div>
                        <div class="mb-3 d-grid gap-2 mt-5">
                            <button type="submit" class="btn btn-primary btn-block auth-btn-style rounded-50">
                                Login
                            </button>
                        </div>
                        <div class="mb-3 d-grid gap-2 mt-5">
                            <a href="#" class="btn btn-outline-primary btn-block auth-btn-style rounded-50">
                                Register
                            </a>
                        </div>
                    </form>
                    <p class="color-secondary auth-desc-font-style text-center font-size-16">
                        Copyright © 2016 - 2022 Fikri Mutaqin
                    </p>
                </div>
                <div class="col-lg-6 col-lg-6 col-sm-12 col-xs-12 d-none d-sm-none d-lg-block">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <img class="img-fluid auth-style-background-image"
                            src="{{ URL::to('assets/authentication/images/Background_Right.png') }}" />
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@push('add-js')
@endpush
