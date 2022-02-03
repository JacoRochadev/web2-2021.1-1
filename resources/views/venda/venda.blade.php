<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/nav-bar.css"> 
    <title>Sisconve - Vendas</title>
</head>
<body>
    @extends('parts.menuLateral')
    @section('title','Vender')
    @section('content')
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
  <!-- <tbody>
    <tr>
      <th scope="row">1</th>
      <td>10.00</td>
      <td>10</td>
      <td>100.00</td>
      <td>ex</td>
    </tr>
  </tbody>
</table> -->
    
</body>
  <footer class="footer d-flex justify-content-center">
      <a href="{{ route('venda.cadastrarVenda') }}" type="button" class="btn btn-outline-secondary">Vender</a>
  </footer>
  
@endsection
</html>