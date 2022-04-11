<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <!-- Responsive Settings Options -->
        <div></div>
        <div></div>
        <!-- Alerta de falta de informação na base de dados -->
        <div class="alert alert-danger">
            <span class="text-white h6">Termina de preencher os teus dados. clique em conta</span>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a class="btn btn-sm" href="{{route('dashboard')}}" role="button">Informação Geral</a>
            <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Seriços
            </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{route('projetos.projetos-mostar')}}">Projeto</a></li>
                <li><a class="dropdown-item" href="#">Contrato</a></li>
                <li><a class="dropdown-item" href="{{route('solicitacao.sol-mostrar')}}">Solicitações</a></li>
              </ul>
            <a class="btn btn-sm" href="{{route('notificacao.not-mostar')}}" role="button">Notificações</a>
          </div>
          <a class="btn btn-sm btn-outline-secondary" href="#" role="button">
            Configurações
          </a>
        </div>
    </div>
</nav>
