@extends('layouts.main')

@push('styles')

@endpush

@push('scripts')

@endpush

@section('title', 'User show')

@section('content')
    @include('components.nav')
    @include('components.title')
    @include('components.alert')

    <section class="container mt-5 section-data-user">
        <div class="card">
            <div class="card-header">
                Data user
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <span>Name:</span>
                    <span>{{ $user->name }}</span>
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <span>Username:</span>
                    <span>{{ $user->username }}</span>
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <span>Email:</span>
                    <span>{{ $user->email }}</span>
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <span>Email verified:</span>
                    <span>{{ $user->email_verified_at }}</span>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="d-flex justify-content-around">
                    <a href="{{ route('site.auth.index') }}" class="text-decoration-none text-secondary">Login</a>
                    <a href="{{ route('site.dashboard.index') }}" class="text-decoration-none text-secondary">Dashboard</a>
                </div>
            </div>
        </div>
    </section>

@endsection
