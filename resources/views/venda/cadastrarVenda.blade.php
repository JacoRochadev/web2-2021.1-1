<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/nav-bar.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Sisconve - Vendas</title>
</head>
<body>
    @extends('parts.menuLateral')
    @section('title','Vender')
    @section('content')
    <!-- formulario de venda -->
    <h1 class="text-center">Realizar venda</h1>
    <div id="form" class="col-8 m-auto">
        <div id="form-group"> 
            <form action="{{ route('venda.vendido')}}" method="post">
            @method('post')
            @csrf
            <div class="m-4">
                <select class="form-select" name="id_cliente" id="id_cliente" required>
                    <option selected>Selecione um cliente</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="m-4">
                <select class="form-select" name="id_produto[]" required>
                    <option selected>Selecione um produto</option>
                    @foreach($produtos as $produto)
                        <option value="{{ $produto->id }}">{{ $produto->nome_produto }}</option>
                    @endforeach
                </select>
            </div>
            <div class="m-4">
            <input disabled class="form-control" placeholder="{{ $produto->preco_venda }}">
            </div>
            <div class="m-4">
            <input class="form-control" type="number" name="quantidade[]" id="quantidade" placeholder="Quantidade" required>
            @if($errors->has('quantidade'))
                <div class="error">{{ $errors->first('quantidade') }}</div>
            @endif
            </div>
            <div class="m-4">
            <button type="button" class="btn btn-success" id="add-produto">+ Adicionar Produto</button>    
            </div>
            <div class="m-4">
            <button type="submit" class="btn btn-outline-secondary">Realizar Vender</button>    
            </div>
            </form>
        </div>
    </div>
    <script> 
        var count = 1;
        $( "#add-produto" ).click(function() {
            count++;
            $( "#form" ).append( '<div class="m-4"> <select class="form-select" name="id_produto[]" id="campo'+ count +'" required><option selected>Selecione um produto</option>@foreach($produtos as $produto)<option value="{{ $produto->id }}">{{ $produto->nome_produto }}</option>@endforeach</select>' );
        });
        $( "#add-produto" ).click(function() {
            $( "#form" ).append( '<div class="m-4"> <input class="form-control" type="number" name="quantidade[]" id="campo'+ count +'" placeholder="Quantidade" required> <button type="button"  class="btn-apagar" id="'+ count +'">- Remover Produto</button> ' );
        });
        //botão  para remover não funciona ainda
        // $( "#form" ).on( "click", ".btn-apagar", function() {
        //     button_id = $( this ).attr( "id" );
        //     $( '#campo'+ button_id +'' ).remove();
        // });
    </script>
    
</body>
@endsection
</html>