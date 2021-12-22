<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="shortcut icon" href="<=// URL ?>/public/img/favicon.svg" type="image/x-icon">-->
    <title>SISCONVE - Dashboard</title>
    <!-- estilos -->
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

    <!-- navbar topo -->
    @extends("staticViews/navbar");


    <div id="container">

        <!-- menu lateral -->
        @extends("staticViews/menu");

        <div class="content-center">
            <!-- conteudo do centro -->
            <div class="dashboard">
                <div class="title-content">
                    <div class="title-text">
                        <span>
                            <img src="../public/img/dashboard-verde.svg" alt="Dashboard">
                            Dashboard
                        </span>
                        <span>/</span>
                    </div>
                </div>
                <div class="main-page">
                    <div class="dash-btns">
                        <!--<a href="?= URL ?>/ClientesController/listarClientes" style="background-color: #31736F;" class="button">-->
                            <span><img src="../public/img/clientes-btn.svg" alt="">Clientes</span>
                        </a>
                        <!--<a href="?= URL ?>/ProdutosController/listarProdutos" style="background-color: #A50000;" class="button">-->
                            <span><img src="../public/img/produtos-btn.svg" alt="">Produtos</span>
                        </a>
                        <!--<a href="?= URL ?>/ProdutosController/listarProdutos" style="background-color: #A50000;" class="button">-->
                            <span><img src="../public/img/categorias-btn.svg" alt="">Categorias</span>
                        </a>
                        <!--<a href="?= URL ?>/ProdutosController/listarProdutos" style="background-color: #A50000;" class="button">-->
                            <span><img src="../public/img/vendas-btn.svg" alt="">Vendas</span>
                        </a>
                        <!--<a href="?= URL ?>/ProdutosController/listarProdutos" style="background-color: #A50000;" class="button">-->
                            <span><img src="../public/img/compas-btn.svg" alt="">Compras</span>
                        </a>
                        <!--<a href="?= URL ?>/ProdutosController/listarProdutos" style="background-color: #A50000;" class="button">-->
                            <span><img src="../public/img/fornecedor-btn.svg" alt="">Fornecedor</span>
                        </a>
                        
                            <!--<a href="?= URL ?>/ProdutosController/listarProdutos" style="background-color: #A50000;" class="button">-->
                                <span><img src="../public/img/funcionario.svg" alt="">Funcionário</span>
                            </a>
                        
                        <a href="#" style="background-color: #47948F;" class="button">
                            <span><img src="../public/img/financas-btn.svg" alt="">Finanças</span>
                        </a>
                    </div>

                    <div class="content-dashboard">
                        <div class="content">
                            <div class="section">
                                <div class="section-title">
                                    <span><img src="../public/img/chart-icon.svg" alt="">Números</span>
                                </div>
                                <div class="section-card">
                                    <div class="card" style="background-color: #00A3FF !important;">
                                        <div class="title-card" style="background-color: #0095E9 !important;">
                                            <span>Total de Venda / dia</span>
                                        </div>
                                        <div class="card-body">
                                    
                                            <span>vendas</span>
                                        </div>
                                    </div>
                                    <div class="card" style="background-color: #00A507 !important;">
                                        <div class="title-card" style="background-color: #1C9821 !important;">
                                            <span>Média de Lucro / dia</span>
                                        </div>
                                        <div class="card-body">
                                            <span>R$</span>

                                        </div>
                                    </div>
                                    <div class="card" style="background-color: #11858C !important;">
                                        <div class="title-card" style="background-color: #25767B !important;">
                                            <span>Total de Clientes</span>
                                        </div>
                                        <div class="card-body">
                                            <span>clientes</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Produtos que tem baixa no estoque... -->
                                <div class="section">
                                    <div class="section-title">
                                        <span><img src="../public/img/probaixoestoque-btn.svg" alt="">Produtos com baixa no Estoque</span>
                                    </div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nome do Produto</th>
                                                <th>Valor Unitario</th>
                                                <th>Quantidade</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>


                            <!-- clientes que devem... -->
                                <div class="section">
                                    <div class="section-title">
                                        <span><img src="../public/img/cliParcleasVencendo.svg" alt="">Clientes com parcelas vencendo</span>
                                    </div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nome do Cliente</th>
                                                <th scope="col">Valor da Parcela</th>
                                                <th scope="col">Vencimento</th>
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

        </div>
    </div>

</body>

<!-- scripts -->

</html>