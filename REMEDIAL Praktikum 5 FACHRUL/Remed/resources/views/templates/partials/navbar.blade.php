<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto">
            <a class="nav-item nav-link {{ (request()->segment(1) == '') ? 'active' : '' }}"
                href="{{ url('/') }}">Home</a>
            <a class="nav-item nav-link {{ (request()->segment(1) == 'vaccine') ? 'active' : '' }}"
                href="{{ route('vaccine.index') }}">Vaccine</a>
            <a class="nav-item nav-link {{ (request()->segment(1) == 'patient') ? 'active' : '' }}"
                href="{{ route('patient.index') }}">Patient</a>
        </div>
    </div>
</nav>