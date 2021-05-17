<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a href={{route('home')}} class="brand-link">
        <img src="./imagem/logo_origin.png" width="207px" height="12%">
        <span class="brand-text font-weight-bold">@lang('fullstack.logo')</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExample03">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('map')}}">@lang('frontoffice.home')</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('foundation')}}">@lang('frontoffice.foundation')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('history')}}">@lang('frontoffice.history')</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">@lang('frontoffice.contact')</a>
        </li>
      </ul>
      <div class="form-inline my-2 my-md-0">
        <a href="locale/pt"> PT </a> | <a href="locale/en"> EN </a>
        </div>
    </div>
  </nav>
