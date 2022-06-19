  <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm p-3 mb-3">
    <div class="container">
      <a class="navbar-brand" href="/">Myblog-app</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "Home") ? 'active fw-bold' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "About") ? 'active fw-bold' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "Blog") ? 'active fw-bold' : '' }}" href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "Categories") ? 'active fw-bold' : '' }}" href="/categories">Categories</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "Login") ? 'active fw-bold' : '' }}" href="/login"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>