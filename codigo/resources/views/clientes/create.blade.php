<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <form action="store" method="post">
        @csrf
        <label for="">Nome cliente</label> 
        <input type="text" name="nome" id="nome">
        <label for="">debito</label>
        <input type="number" name="debito" id="debito">
        <label for="">descricao</label>
        <input type="text" name="endereco" id="endereco">
        <input type="submit" value="cadastrar">
    </form>
    
</body>
</html>