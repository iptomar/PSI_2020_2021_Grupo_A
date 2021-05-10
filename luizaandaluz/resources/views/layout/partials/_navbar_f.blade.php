<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a href={{route('home')}} class="brand-link">
        <img src="./imagem/logov2.png" width="12%" height="12%">
        <span class="brand-text font-weight-bold">@lang('fullstack.logo')</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExample03">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">@lang('frontoffice.home')</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">@lang('frontoffice.foundation')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">@lang('frontoffice.history')</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="#">@lang('frontoffice.contact')</a>
        </li>
      </ul>
      <div class="form-inline my-2 my-md-0">
        <a href="locale/pt"> PT </a> | <a href="locale/en"> EN </a>
        </div>
    </div>
  </nav>
