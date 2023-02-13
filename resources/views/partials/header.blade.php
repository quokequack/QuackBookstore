<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">QUACK BOOKSTORE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('insert') }}">Insert a Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('storage') }}">All books</a>
            </li>
            {{--<li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>--}}
          </ul>
        </div>
      </div>
    </nav>
  </header>