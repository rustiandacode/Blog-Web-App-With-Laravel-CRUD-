  <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm p-3 mb-3">
    <div class="container">
      <a class="navbar-brand" href="/">Myblog-app</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active fw-bold' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('about') ? 'active fw-bold' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('posts') ? 'active fw-bold' : '' }}" href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('categories') ? 'active fw-bold' : '' }}" href="/categories">Categories</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome Back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/dashboard"><i class="fa-solid fa-table-columns"></i> Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item">
                <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
              </button>
              </form>
            </li>
          </ul>
        </li>
        @else
          <li class="nav-item">
            <a class="nav-link {{ Request::is('login') ? 'active fw-bold' : '' }}" href="/login"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
          </li>
        @endauth
      </ul>
        
      </div>
    </div>
  </nav>