<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('site.auth.index') }}">
            {{ env('APP_NAME') }}
    </a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.user.index') }}">Create account</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('site.auth.index') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
