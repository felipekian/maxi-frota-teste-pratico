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

    <section class="container mt-5">

        <h1 class="text-center my-5 text-secondary">Congratulations {{ Auth::user()->name }}, you made it!</h1>

        <div class="row">
            <div class="col-6">
                <img src="https://i.pinimg.com/originals/64/d2/b1/64d2b1c4242fc4751c05006d16a0f877.jpg" alt="emoji feliz"
                    srcset="https://i.pinimg.com/originals/64/d2/b1/64d2b1c4242fc4751c05006d16a0f877.jpg" loading="lazy"
                    class="img-thumbnail rounded img-size">
            </div>

            <div class="col-6">

                <table class="table table-striped table-hover table-responsive fw-bold">
                    <tbody>
                        <tr>
                            <td scope="row">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <label class="form-check-label">
                                        Laravel 9
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <label class="form-check-label">
                                        MySQL / MariaDB
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <label class="form-check-label">
                                        Bootstrap 5
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <label class="form-check-label">
                                        Bootstrap 5 icons
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <label class="form-check-label">
                                        JQuey
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <label class="form-check-label">
                                        Javascript
                                    </label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

@endsection
