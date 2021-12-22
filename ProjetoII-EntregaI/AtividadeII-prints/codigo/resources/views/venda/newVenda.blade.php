<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Sisconve - Vendas</title>
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
            <li class="list-group-item">Dashboard</li>
            <li class="list-group-item">Compras</li>
            <li class="list-group-item">Vendas</li>
        </ul>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
        </div>
        </div>
    </div>
    </div>
    <nav class="navbar m-5">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Vender:</span>
        <button type="button" class="btn btn-success">+ Adicionar Produto</button>
        </button>
    </div>
    </nav>
    <!-- tabela -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome do Produto</th>
      <th scope="col">Valor de venda</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Valor Total</th>
      <th scope="col">Ações</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>bola</td>
      <td>10.00</td>
      <td>10</td>
      <td>100.00</td>
      <td>ex</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>bala</td>
      <td>1.00</td>
      <td>3</td>
      <td>3.00</td>
      <td>ex</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>chapa</td>
      <td>5.00</td>
      <td>100</td>
      <td>500.00</td>
      <td>ex</td>
    </tr>
  </tbody>
</table>
    
</body>
<footer class="footer d-flex justify-content-center m-5">
<div class="btn-group">
  <a href="#" class="btn btn-primary m-5 btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2">Cliente</a>
  <a href="#" class="btn btn-primary m-5 btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2">Método de pagamento</a>
  <a href="#" class="btn btn-primary m-5 btn-success">Vender</a>
</div>
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        teste
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</footer>
</html>