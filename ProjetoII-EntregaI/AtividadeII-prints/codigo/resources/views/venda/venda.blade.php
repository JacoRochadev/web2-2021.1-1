<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISCONVE - Vendas</title>
    <link rel="shortcut icon" href="./../public/img/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/box-center.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/content-box.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toast.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    @extends("staticViews/navbar");

    <div id="container">
        
        @extends("staticViews/menu");

        <div class="content-center">
            <div class="dashboard">
                <div class="title-content">
                    <div class="title-text">
                        <span>
                        </span>
                        <span>/</span>
                        <span>
                            <img src="../public/img/car-compra.svg" alt="Vendas">
                            Vendas
                        </span>
                        <span>/</span>
                        <span>Ver vendas</span>
                    </div>
                </div>

                <div class="item-area">
                    <div class="manage-item-top">
                        <div class="search-item">
                            <input id="search" onkeyup="search()" type="text" placeholder="Procure por uma venda">
                            <img src="../public/img/search-icon.svg" alt="Search">
                        </div>
                    </div>

                    <div class="table-item-area">
                        <table id="table-item">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cliente</th>
                                    <th>Parcelas</th>
                                    <th>Valor total</th>
                                    <th>Data</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>