<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand ps-3" href="">estacionamento</a>

    <button class="btn btn-link btn-sm order-lg-0 me-lg-0 order-1 me-4" id="sidebarToggle" href="#!">
        <i class="fas fa-bars"></i>
    </button>

    <ul class="navbar-nav me-md-3 my-md-0 my-2 me-0 ms-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" id="navbarDropdown" href="#"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://ui-avatars.com/api/?name=Joao+Manoel&background=0d6efd&color=fff&size=32"
                    alt="Avatar" class="rounded-circle" width="32" height="32">
            </a>
            <ul class="dropdown-menu dropdown-menu-end border-0 shadow" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item py-2" href="#!"><i class="fas fa-cog fa-fw text-muted me-2"></i>
                        Configurações</a></li>
                <li><a class="dropdown-item py-2" href="#!"><i class="fas fa-list fa-fw text-muted me-2"></i> Log
                        de Atividades</a></li>
                <li>
                    <hr class="dropdown-divider my-1" />
                </li>
                <li>
                    <form method="POST" action="#">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger py-2">
                            <i class="fas fa-sign-out-alt fa-fw me-2"></i> Sair
                        </button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>
