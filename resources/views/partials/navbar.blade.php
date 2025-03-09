<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Libreria</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('dettagli') }}">Dettagli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('autori') }}">Autori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled text-white" aria-disabled="true">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
