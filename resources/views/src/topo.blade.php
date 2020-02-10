<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <label class="navbar-brand">AcheTudo</label>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">Contato</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Serviços
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <form action="/listarEmpresas" method="post">
                    {{ csrf_field() }}
                    @foreach($servico as $servico)
                        <button class="dropdown-item" type="submit" onclick="getServicoId({{ $loop->iteration }})">{{ $servico->nome }}</button>
                        <div class="dropdown-divider"></div>
                    @endforeach
                    <script>
                        function getServicoId(a){
                            document.getElementById("servicoId").value = a;
                        }
                    </script>
                    <input type="hidden" value="" id="servicoId" name="servicoId">
                </form>
            </div>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Procurar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
        </form>
    </div>
</nav>
