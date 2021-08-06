<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cupcakes</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: pink">
    <div class="container-fluid">
            <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyWH03b-FrBdjryEHMb2eJR0s0aXpFV7a_1nSxa4byHnghZoKx&usqp=CAU>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="inicio">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="quienes-somos">QUIENES SOMOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acerca-de">ACERCA DE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto">CONTACTO</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar-->

<div class="container">
    <div class="row">
        <!-- sidebar -->
        <div class="col-md-3" style="background-color: violet">
            <br><br>
            <ul class="list-group">
            <img src="https://reygif.com/media/1/cupcake-rosa-951.gif"/>
            <li class="list-group-item active" aria-current="true">Torta express</li>
                <li class="list-group-item">Torta Tematica</li>
                <li class="list-group-item">Para regalar</li>
                <li class="list-group-item">Paquetes de fiestas</li>
                <li class="list-group-item">Linea Empresarial</li>
            </ul>
            <br><br>
        </div>
        <!--End Sidebar -->
        <!-- Content--->
        <div class="col-md-9" style="">
             @yield('contenido')
        </div>
        <!-- end Content-->
    </div>
</div>
<footer style="background-color: pink">
    Hacemos realidad tus ideas <br>
    Creamos tus torta o cupcakes desde cero. Personalizalo <br>
     que necesites y nosotros nos encargamos de llevarlo a la puerta de tu casa.
</footer>


</body>
</html>
