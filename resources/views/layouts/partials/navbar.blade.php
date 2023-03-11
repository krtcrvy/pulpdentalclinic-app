<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm" id="navbar">
    <div class="container">
        <a class="navbar-brand text-primary" href="{{ route('home') }}">
            <img src="{{ asset('images/pulp.png') }}" alt="logo" height="32">
            Pulp Dental Clinic
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/"><i class="bi bi-house me-2"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/"><i
                            class="bi bi-hospital me-2"></i>Services</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/services') ? 'active' : '' }}" href="/services"><i
                                class="bi bi-person-circle me-2"></i>Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/services') ? 'active' : '' }}" href="/services"><i
                                class="bi bi-box-arrow-right me-2"></i>Logout</a>
                    </li>
                @else
                    <a href="{{ route('login') }}">
                        <button class="btn btn-outline-primary me-lg-2 mb-sm-2" type="button"
                            id="buttonOutline">Login</button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button class="btn btn-primary" type="button" id="buttonPrimary">Sign Up</button>
                    </a>
                @endif
            </ul>
        </div>
    </div>
</nav>
