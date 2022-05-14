@extends('layouts.main')

@push('styles')
    <style>

    </style>
@endpush

@push('scripts')
    <script>
        $(".btn_show_password").click(function() {
            let input_senha = $("#password");
            input_senha.attr('type') == "text" ? input_senha.attr('type', 'password') : input_senha.attr('type',
                'text');
        });
    </script>
@endpush

@section('title', 'Create new user')

@section('content')
    @include('components.nav')
    @include('components.title')
    @include('components.alert')

    <form class="my-form-center shadow-sm border rounded p-3 mt-5" method="post" action="{{ route('site.user.store') }}">

        @csrf

        <section>
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                    <small class="error">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" value="{{ old('username') }}">
                @error('username')
                    <small class="error">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <small class="error">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" name="password" id="password"
                        value="{{ old('password') }}">
                    <button class="btn btn-outline-secondary btn_show_password" type="button"><i class="bi bi-eye"></i></button>
                </div>
                @error('password')
                    <small class="error">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-dark w-100">Create new account</button>
            </div>
        </section>
        <hr>
        <section class="mt-3 d-flex justify-content-between">
            <a href="{{ route('site.auth.index') }}" class="text-center text-decoration-none link-dark">Login</a>
        </section>
    </form>
@endsection
