@extends('layouts.main')

@push('styles')
    <style>

    </style>
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            $(".btn_show_password").click(function() {
                let input_senha = $("#password");
                input_senha.attr('type') == "text" ? input_senha.attr('type', 'password') : input_senha
                    .attr('type',
                        'text');
            });

            $('#password').keyup(function() {
                let pass = $('#password').val()

                let confirm = {
                    'upper': false,
                    'lower': false,
                    'special': false,
                    'number': false,
                    'length': pass.length >= 6 ? true : false,
                };

                for (let i = 0; i < pass.length; i++) {
                    const element = pass[i];

                    if (element >= 'a' && element <= 'z') {
                        confirm.lower = true;
                    } else if (element >= 'A' && element <= 'Z') {
                        confirm.upper = true;
                    } else if (element >= '0' && element <= '9') {
                        confirm.number = true;
                    } else if (element == '!' || element == '@' || element == '#' || element == '$' ||
                        element == '%' || element == '&') {
                        confirm.special = true;
                    }
                }

                const html_new = `
                    <div class="pt-3 d-flex justify-content-between">
                        <span class="${confirm.upper ? 'text-success':'text-danger'}">Uppercase </span>|
                        <span class="${confirm.lower ? 'text-success':'text-danger'}">Lowercase </span>|
                        <span class="${confirm.special ? 'text-success':'text-danger'}">Special </span>|
                        <span class="${confirm.number ? 'text-success':'text-danger'}">Number </span>|
                        <span class="${confirm.length ? 'text-success':'text-danger'}">Minimun 6</span>
                    </div>
                `;

                $('#div-pass-info').html('').html(html_new);

            })

            $('#form').submit(function() {
                let pass = $('#password').val()

                let confirm = {
                    'upper': false,
                    'lower': false,
                    'special': false,
                    'number': false,
                    'length': pass.length >= 6 ? true : false,
                };

                for (let i = 0; i < pass.length; i++) {
                    const element = pass[i];

                    if (element >= 'a' && element <= 'z') {
                        confirm.lower = true;
                    } else if (element >= 'A' && element <= 'Z') {
                        confirm.upper = true;
                    } else if (element >= '0' && element <= '9') {
                        confirm.number = true;
                    } else if (element == '!' || element == '@' || element == '#' || element == '$' ||
                        element == '%' || element == '&') {
                        confirm.special = true;
                    }
                }

                if (!confirm.lower ||
                    !confirm.upper ||
                    !confirm.number ||
                    !confirm.special ||
                    !confirm.length
                ) {
                    const html_new = `
                    <div class="pt-3 d-flex justify-content-between">
                        <span class="${confirm.upper ? 'text-success':'text-danger'}">Uppercase </span>|
                        <span class="${confirm.lower ? 'text-success':'text-danger'}">Lowercase </span>|
                        <span class="${confirm.special ? 'text-success':'text-danger'}">Special </span>|
                        <span class="${confirm.number ? 'text-success':'text-danger'}">Number </span>|
                        <span class="${confirm.length ? 'text-success':'text-danger'}">Minimun 6</span>
                    </div>
                `;

                $('#div-pass-info').html('').html(html_new);
                    $.notify("Password invalid", "error");
                    return false;
                }

            })
        })
    </script>
@endpush

@section('title', 'Create new user')

@section('content')
    @include('components.nav')
    @include('components.title')
    @include('components.alert')

    <form id="form" class="my-form-center shadow-sm border rounded p-3 mt-5" method="post"
        action="{{ route('site.user.store') }}">

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
                    <button class="btn btn-outline-secondary btn_show_password" type="button"><i
                            class="bi bi-eye"></i></button>
                </div>
                <div id="div-pass-info"></div>
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
