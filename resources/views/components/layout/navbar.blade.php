
    <nav class="navbar navbar-dark p-3 bg-dark d-flex justify-content-beetwen">
        <a class="navbar-brand" href="#">
            <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
            API de form's
        </a>
        
        <ul class="navbar-nav d-flex flex-row">
            <li class="nav-link mx-2">
                asass
            </li>
            <li class="nav-link mx-2">
                asass
            </li>
            <li class="nav-link mx-2">
                asass
            </li>
            <li class="nav-link mx-2">
                <a href="/logout">sair</a>
            </li>
        </ul>
        @empty($logged)
        <ul class="navbar-nav  d-flex flex-row">
            <li class="nav-link">
                <a href="/login/create" class="btn btn-outline-warning mx-2">Criar conta</a>
            </li>
            <li class="nav-link">
                <a href="/login" class="btn btn-warning">Login</a>
            </li>
        </ul>
        @endempty
        
    </nav>
    
   