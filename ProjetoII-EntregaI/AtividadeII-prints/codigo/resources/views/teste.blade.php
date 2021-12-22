<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Teste venda</title>

    <style>
        .modal {
            width: 300px;
        }
        .modal-content {
            width: 300px;
        }
        .list-group-item:hover{
            background-color: #BBDEFB;
        }
        #contact-area {
            text-align: center;
        }   
        #about-area {
            background-color: #F9F9F9;
        }
        .main-title {
            color: #444;
            margin: 0 0 65px 0;
            font-size: 40px;
            text-align: center;
        }

    </style>
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
    <div class="btn-group d-flex justify-content-center m-5" role="group" aria-label="Basic checkbox toggle button group">
        <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
        <label class="btn btn-outline-secondary" for="btncheck1">Dashboard</label>

        <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
        <label class="btn btn-outline-secondary" for="btncheck2">Compras</label>

        <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
        <label class="btn btn-outline-secondary" for="btncheck3">Vendas</label>
    </div>
    <!-- sobre -->
    <div id="about-area">
        <div class="container">
            <div class="row">
              <div class="col-12"> 
                <h3 class="main-title">Sobre o sisconve</h3>
              </div>
              <div class="col-md-6">
                <h3 class="about-title">Um projeto da faculdade</h3>
                <p>O projeto foi inicialmente desenvolvido em grupo.</p>
                <p>Mas essa é uma nova versão individual de cada aluno.</p>
              </div>
            </div>
          </div>
      </div>
      <!-- footer -->
    <footer class="footer navbar-fixed-bottom">
        <div id="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h3 class="main-title">Entre em contato conosco</h3>
                </div>
                <div class="col-md-4 contact-box">
                <p><span class="contact-tile">Ligue para:</span> (77)99999-9999</p>
                </div>
                <div class="col-md-4 contact-box">
                <p><span class="contact-tile">Horário de funcionamento:</span> 9:00 - 17:00</p>
                </div>
                <div class="col-md-4 contact-box">
                <p><span class="contact-tile">Envie um email:</span> contato@sisconve.com.br</p>
                </div>
            </div>
        </div>
        </div>
    </footer>

    
</body>
</html>