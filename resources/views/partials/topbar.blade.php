<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">FoodApp</a>

    <ul class="navbar-nav ms-auto">
      @auth
        <li class="nav-item"><a class="nav-link" href="{{ route('foods.index') }}">Foods</a></li>
        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-link nav-link">Logout</button>
          </form>
        </li>
      @else
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
      @endauth
    </ul>
  </div>
</nav>
