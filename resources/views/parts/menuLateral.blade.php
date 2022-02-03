<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    
    <nav class="navbar navbar-light bg-light shadow">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Sisconve</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    </nav>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a class="nav-link active" aria-current="page" href="/sisconve/public/dashboard">Dashboard</a>   
                </li>
                <li class="list-group-item">
                    <a class="nav-link active" aria-current="page" href="/sisconve/public/compra">Compras</a>   
                </li>
                <li class="list-group-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('venda.page') }}">Vendas</a>   
                </li>
        </ul>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
        </div>
        </div>
    </div>
    </div>
    <div class="btn-group d-flex justify-content-center m-5">
        <a href="/sisconve/public/dashboard" class="btn btn-outline-secondary" aria-current="page">Dashboard</a>
        <a href="/sisconve/public/compra" class="btn btn-outline-secondary">Compras</a>
        <a href="{{ route('venda.page') }}" class="btn btn-outline-secondary">Vendas</a>
    </div>
    @yield('content')
</body>
</html>

