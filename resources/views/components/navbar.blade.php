<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="{{ route('home') }}">Gabuts</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('posts') ? 'active' : '' }}" href="{{ route('posts') }}">Posts</a>
          </li>
          @if (Auth::check())
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}">Profile</a>
            </li>
          @endif
        </ul>
        <ul class="navbar-nav">
          @if (Auth::check())
          <li class="nav-item">
            <a class="nav-link btn btn-light text-dark ms-auto px-3" href="{{ route('logout') }}"><strong>Logout</strong></a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link btn btn-light text-dark ms-auto px-3" href="{{ route('login') }}"><strong>Login</strong></a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>