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

@section('title', 'Dashboard')

@section('content')
    @include('components.nav')
    @include('components.title')
    @include('components.alert')

    <section class="container">
        <p>área restrita</p>
        {{ Auth::user() }}
    </section>

@endsection
