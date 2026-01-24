<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route("home")}}">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route("home")}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("products_index")}}">Prodotti</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{route("products_create")}}">Crea Prodotto</a>
                </li>
                @endauth
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Benvenut* {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <form action="{{route("logout")}}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li> 
                @else
                   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Benvenuto utente
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route("register")}}">Registrati</a></li>
                        <li><a class="dropdown-item" href="{{route("login")}}">Login</a></li>
                        
                    </ul>
                </li>
                @endauth
             
            </ul>
            
        </div>
    </div>
</nav>