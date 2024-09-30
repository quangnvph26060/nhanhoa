<footer class="footer">
    {{-- <div class="container-fluid d-flex justify-content-between">
      <nav class="pull-left">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="http://www.themekita.com">
              ThemeKita
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> Help </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> Licenses </a>
          </li>
        </ul>
      </nav> --}}
      <div class="copyright" style="text-align: center">
        {{-- <i class="fa fa-heart heart text-danger"></i> --}}
        <a href="{{ config('app.url') }}">{{ $config->store_name }}</a>
      </div>
      {{-- <div>
        Distributed by
        <a target="_blank" href="https://themewagon.com/">ThemeWagon</a>.
      </div> --}}
    </div>
  </footer>
