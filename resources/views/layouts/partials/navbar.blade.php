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
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/profile">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="btn btn-primary" type="submit" id="buttonPrimary">Logout</button>
                        </form>
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