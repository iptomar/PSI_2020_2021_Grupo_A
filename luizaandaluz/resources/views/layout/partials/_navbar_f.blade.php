<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a href={{route('home')}} class="brand-link">
        <img src="./imagem/logov2.png" width="12%" height="12%">
        <span class="brand-text font-weight-bold">Fundação Luiza Andaluz</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    @dd(user())
    <div class="collapse navbar-collapse" id="navbarsExample03">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Foundation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Contact</a>
        </li>
      </ul>
      <div class="form-inline my-2 my-md-0">
        <a href="#"> PT </a> | <a href="#"> EN </a>
        </div>
    </div>
  </nav>
