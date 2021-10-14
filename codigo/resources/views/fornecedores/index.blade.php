<h1>Pagina de fornecedores</h1>


@foreach ($fornecedores as $fornecedor)
<ul>
    <li> nome do fornecedor: {{$fornecedor->nome}};</li>
    <li> debito do fornecedor: {{$fornecedor->debito}};</li>
    <li> descricao do fornecedor: {{$fornecedor->descricao}};</li>
</ul>
@endforeach
