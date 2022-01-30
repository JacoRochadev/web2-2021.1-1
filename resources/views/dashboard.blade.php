<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Menu</title>

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
    @extends('parts.menuLateral')
    @section('title','menu')
    @section('content')

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
        
    @endsection
</body>
</html>