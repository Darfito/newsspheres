<link href="css/components/navbar.css" rel="stylesheet" />

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand text-light" href="#">
      <img class="navbar-logo" src="{{ asset('img/SPHERE-removebg.png') }}" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kategori
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($category as $cat)
            <li><a class="dropdown-item" href="{{ $cat->slug }}">{{ $cat->name_category }}</a></li>
            @endforeach
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <a class="btn btn-primary ms-2" href="{{ route('login') }}" role="button">Login</a>
      </form>
    </div>
  </div>
</nav>
