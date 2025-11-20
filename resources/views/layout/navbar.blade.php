<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href={{ route('home') }} class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="https://sma1klaten.sch.id/sw-content/sw-log1.png" alt="">
        {{-- <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2> --}}
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href={{ route('home') }}
                class="nav-item nav-link {{ $page_meta['title'] == 'Home Page' ? 'active' : '' }}">Home</a>
            <a href={{ route('profil') }}
                class="nav-item nav-link {{ $page_meta['title'] == 'Profil Page' ? 'active' : '' }}">Profil</a>
            <a href={{ route('ekstrakurikuler') }}
                class="nav-item nav-link {{ $page_meta['title'] == 'Ekstrakurikuler Page' ? 'active' : '' }}">Ekstrakurikuler</a>
            <a href={{ route('gallery') }}
                class="nav-item nav-link {{ $page_meta['title'] == 'Gallery Page' ? 'active' : '' }}">Gallery</a>
            <a href={{ route('contact') }}
                class="nav-item nav-link {{ $page_meta['title'] == 'Contact Page' ? 'active' : '' }}">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
