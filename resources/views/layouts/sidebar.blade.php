<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-home"></i>
            <span>Início</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/channels">
            <i class="fas fa-fw fa-users"></i>
            <span>Canais</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/courses">
            <i class="fas fa-graduation-cap"></i>
            <span>Cursos</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/videos">
            <i class="fas fa-fw fa-video"></i>
            <span>Vídeos</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Categorias</span>
        </a>
        <div class="dropdown-menu">
            <h6 class="dropdown-header">Cursos:</h6>
            <a class="dropdown-item" href="/categories">Música (300)</a>
            <a class="dropdown-item" href="/categories">Teatro (10)</a>
            <a class="dropdown-item" href="/categories">Dança (12)</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Vídeos:</h6>
            <a class="dropdown-item" href="/categories">Desporto (90)</a>
            <a class="dropdown-item" href="/categories">Programação (90)</a>
            <a class="dropdown-item" href="/categories">Ciência (89)</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/history-page">
            <i class="fas fa-fw fa-history"></i>
            <span>Histórico</span>
        </a>
    </li>
    <li class="nav-item channel-sidebar-list">
        <h6>Subscrições</h6>
        <ul>
            <li>
                <a href="/subscriptions">
                    <img class="img-fluid" alt="" src="{{ asset('assets/img/s1.png') }}"> Your Life
                </a>
            </li>
            <li>
                <a href="/subscriptions">
                    <img class="img-fluid" alt="" src="{{ asset('assets/img/s2.png') }}"> Unboxing  <span class="badge badge-warning">2</span>
                </a>
            </li>
            <li>
                <a href="/subscriptions">
                    <img class="img-fluid" alt="" src="{{ asset('assets/img/s3.png') }}"> Product / Service
                </a>
            </li>
            <li>
                <a href="/subscriptions">
                    <img class="img-fluid" alt="" src="{{ asset('assets/img/s4.png') }}">  Gaming
                </a>
            </li>
        </ul>
    </li>
</ul>