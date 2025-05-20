<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom shadow-sm px-3">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="https://via.placeholder.com/40" alt="Logo" width="40" height="40" class="rounded me-2">
            MARCA
        </a>

        <form class="d-none d-lg-flex mx-auto" role="search" style="width: 40%;">
            <input class="form-control me-2" type="search" placeholder="Buscar una persona" aria-label="Buscar">
        </form>

        <div class="d-flex align-items-center gap-2">
            <div class="dropdown">
                <button class="btn btn-outline-secondary" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bi bi-grid-3x3-gap-fill"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end p-0">
                    <div class="dropdown-grid">
                        <a href="{{ route('admin.academia.index') }}"><i
                                class="bi bi-buildings"></i><small>Academia</small></a>
                        <a href="#"><i class="bi bi-backpack3"></i><small>Escolares</small></a>
                        <a href="#"><i class="bi bi-credit-card"></i><small>Finanzas</small></a>
                        <a href="#"><i class="bi bi-pie-chart"></i><small>Estadísticos</small></a>
                        <a href="#"><i class="bi bi-calendar-event"></i><small>Calendario</small></a>
                        <a href="#"><i class="bi bi-chat-left-text"></i><small>Chat</small></a>
                        <a href="#"><i class="bi bi-bar-chart"></i><small>Gráficas</small></a>
                        <a href="#"><i class="bi bi-folder"></i><small>Archivos</small></a>
                        <a href="#"><i class="bi bi-info-circle"></i><small>Info</small></a>
                    </div>
                </div>
            </div>

            <div class="dropdown">
                <button class="btn btn-outline-primary rounded-circle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Mi perfil</a></li>
                    <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
