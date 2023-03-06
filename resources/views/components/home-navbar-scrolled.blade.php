<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="#" id="navbar-brand">
            <img src="{{ asset('images/pulp-light.png') }}" alt="logo" height="32" id="navbar-brand-img-top">
            <img src="{{ asset('images/pulp.png') }}" alt="logo" height="32" id="navbar-brand-img-scroll">
            Pulp Dental Clinic
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
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
                @if (Auth::check())
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <a class="nav-link" aria-current="page" href="/logout">Logout</a>
                        </form>
                    </li>
                @else
                    <a href="{{ route('register') }}">
                        <button class="btn btn-outline-light" type="submit" id="button">Request an
                            appointment</button>
                    </a>
                @endif
            </ul>

        </div>
    </div>
</nav>
