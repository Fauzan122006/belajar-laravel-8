<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">RPL 3 </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Daftar siswa' ? 'active' : '' }}" href="/daftarsiswa">daftar
                        siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Blog' ? 'active' : '' }}" href="/blog">blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
