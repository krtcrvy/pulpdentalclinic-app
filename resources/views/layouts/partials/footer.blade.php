<footer class="py-4" id="footer">
    <div class="container d-flex align-items-center justify-content-center">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/pulp-light.png') }}" alt="logo" height="32" class="me-2">
        </a>
        <p class="mb-0 text-light">&copy; {{ now()->format('Y') }} Pulp Dental Clinic</p>
    </div>
</footer>
