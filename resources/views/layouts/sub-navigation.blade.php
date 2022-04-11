<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
            <!-- Responsive Settings Options -->
            <div class="nav-link">
                <span class="h6" data-feather="file">
                    {{ Auth::user()->name }}
                    {{ Auth::user()->email }}
                </span>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('freelancer.free-mostrar')}}">
                <span data-feather="shopping-cart"></span>
                Freelancers
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('temas.show')}}">
                <span data-feather="file"></span>
                Temas
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('titulos.titulos-mostrar')}}">
                <span data-feather="users"></span>
                Títulos
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="users"></span>
                Subtítulos
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="users"></span>
                Parágrafos
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="users"></span>
                Pagamentos
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                Informações
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                Conta
            </a>
        </li>
      </ul>
    </div>
</nav>
