<nav class="navbar navbar-expand-lg bg-body-tertiary navcustom">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Benvenuto {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href=""
                                    onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout!</a>
                            </li>
                            <form method="POST" action="{{ route('logout') }}" id="form-logout" class="d-none">@csrf</form>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('profile') }}">Profilo!</a></li>
                        </ul>
                    @else
                        <a class="nav-link " href="{{ route('register') }}" 
                            aria-expanded=""><i class="bi bi-person-fill"></i>
                        </a>
                    </li>
                </ul>
            @endauth

        </div>
    </div>
</nav>
