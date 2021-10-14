<h1>Pagina de clientes</h1>


@foreach ($clientes as $cliente)
<ul>
    <li> nome do cliente: {{$cliente->nome}};</li>
    <li> debito do cliente: {{$cliente->debito}};</li>
    <li> descricao do cliente: {{$cliente->descricao}};</li>
</ul>
@endforeach
