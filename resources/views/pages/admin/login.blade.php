@extends('layouts.web')
@section('page-title')
    <title>Job4u : Jobs in design, marketing, programming, teaching ...</title>
@stop
@section('content')
    @php
    $heading = 'Login';
    $paragraph = '';
    $link_1 = 'Login';
    @endphp
    <livewire:hero-section :heading="$heading" :paragraph="$paragraph" />
    <livewire:bread-crumb-second-level :link_1="$link_1" />
    <section class="container pb-5">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="form-control p-2 p-md-3 @error('email') is-invalid @enderror" id="email"
                    aria-describedby="emailHelp" required autofocus />
                @error('email')
                    <div id="emailHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password"
                    class="form-control p-2 p-md-3 @error('password') is-invalid @enderror" id="password"
                    aria-describedby="passwordHelp" required autocomplete="current-password" />
                @error('password')
                    <div id="passwordHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="remember_me" />
                <label class="form-check-label" for="remember_me">Remember me</label>
            </div>
            <button type="submit" class="btn btn-danger btn-lg px-5 mb-3">Login</button>
            <div>
                @if (Route::has('forgot-password'))
                    <a class="text-decoration-none fs-20 fw-500 text-danger" href="{{ route('forgot-password') }}">
                        Forgot Your Password ?
                    </a>
                @endif
            </div>
        </form>
    </section>
@stop
