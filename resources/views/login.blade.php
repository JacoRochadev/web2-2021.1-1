<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/login.css"> 
    <title>Sisconve - login</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light shadow mb-5">
    <div class="container-fluid">
        <span class="navbar-brand mb-10 h1">Sisconve login</span>
        </button>
    </div>
    </nav>
    <section>
        <div class="container">
            <div class="row content">
                <div class="col-md-6 mb-3">
                    <img src="{{ asset('img/inv.png') }}" class="img-fluid" alt="image">
                </div>
                <div class="col-md-6">
                    <h3 class="signin-text mb-3"> Entrar</h3>
                    <!-- validação para quando não digitar e-mail nem senha -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- validação para e-mail ou senha inválidos -->
                    @if(session('danger'))
                        <div class="alert alert-danger">
                            {{ session('danger') }}
                        </div>
                    @endif
                    <form method="post" action="{{ route('auth.user') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input name="password" type="password" class="form-control" >
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="checkbox">
                            <label class="form-check-label" for="exampleCheck1">Me lembre</label>                        
                        </div>
                        <button type="submit" class="btn btn-success">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>