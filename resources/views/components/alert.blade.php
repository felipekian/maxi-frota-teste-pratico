@error('alerta')
    <div class="alert alert-{{ $message }} alert-dismissible fade show text-center" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        @error('mensagem')
            <strong>{{ $message }}</strong>
        @enderror
    </div>
@enderror

@if (session('alerta'))
    <div class="alert alert-{{ session('alerta') }} alert-dismissible fade show text-center" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        @if (session('mensagem'))
            <strong>{{ session('mensagem') }}</strong>
        @endif
    </div>
@endif
