<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow py-3">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="./image/Logo 1.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">

            <li class="nav-item">
                  <a class="nav-link" href="{{ route('welcome') }}">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('about') }}">About</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('menu') }}">Menu</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('reservasi.index') }}">Reservasi</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('contact') }}">Contact</a>
              </li>

            </ul>
            <button type="button" class="btn btn-brand" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            
          </div>
        </div>
    </nav>