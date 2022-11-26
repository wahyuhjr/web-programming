<nav class="navbar bg-warning">
    <div class="container-fluid justify-content-center" >
      <span class="navbar-brand mb-3 h1 text-white">Giant Book Supplier</span>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-primary" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Romance</a></li>
              <li><a class="dropdown-item" href="#">Comedy</a></li>
              <li><a class="dropdown-item" href="#">Adventure</a></li>
              <li><a class="dropdown-item" href="#">Action</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="{{ url ('publisher') }}">Publisher</a>
          </li>
          <a class="nav-link text-primary" href="{{ url ('contact') }}">Contact</a>
          <li class="nav-item">
          </li>

        </ul>
      </div>
    </div>
  </nav>
