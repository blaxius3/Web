<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <link rel="icon" href="img/hospital-clinic-plus-logo.png">
</head>
<body class="py-3">
    <main class="container contenedor">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
        <img src="img/hospital-clinic-plus-logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> Hospital</a>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php"> Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="info.php"> Seguridade</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contacto.php"> Contacto</a>
        </li>
        </ul>
        </div>
        </nav>
    </nav>
        <div class="p-3 rounded">
            <div class="row">
                <div class="col-12">
    <section class="mb-4">
    
    <h2 class="h1-responsive font-weight-bold text-center my-4 text-primary">Contacto</h2>

    <p class="text-center w-responsive mx-auto mb-5"> Enviar unha mensaxe ao doente</p>

    <div class="row">
        
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <div class="row">

                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Nome completo</label>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Enderezo electr??nico</label>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12"><br>
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Asunto</label>
                        </div>
                    </div>
                </div>
                
                <div class="row">

                    <div class="col-md-12"><br>

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">A t??a mensaxe</label>
                        </div>

                    </div>
                </div>

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Enviar</a>
            </div>
            <div class="status"></div>
        </div>
        
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Av. da Residencia, 15405 Ferrol</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+34 981 33 40 00</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>arquitectomarcide@gmail.com</p>
                </li>
            </ul>
        </div>

    </div>

    </section>
                </div>
            </div>
        </div>
    </main>
</body>
</html>