<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIMS</title>
    <script src="src/JS/paginas_contenido.js" ></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="src/JS/Graficas/General/General.js"></script>
    <script type="text/javascript" src="src/JS/Graficas/Bodegas/Torres.js"></script>
    <script type="text/javascript" src="src/JS/Graficas/Bodegas/Teclados.js"></script>
    <script type="text/javascript" src="src/JS/Graficas/Bodegas/Portatiles.js"></script>
    <!-- <script type="text/javascript" src="src/JS/Graficas/Bodegas/Mouse.js"></script> -->
    <link rel="icon" href="src/img/logos/MasOrange_Logo_Mesa de trabajo 1 7.png" type="image/x-icon">
    <link rel="stylesheet" href="src/CSS/index.css">
</head>
<body>
    <header class="cabecera">
        <div>
            <a href="#"><img src="src/img/logos/MasOrange_Logo_Mesa de trabajo 1 copia 7.png" alt="logo +Orange"></a>
            <a href="#"><h1 class="logo-letra-cabecera" >TIMS</h1></a>
        </div>
        <div>
            <h1>Tech Inventory Management System</h1>
        </div>
        <div>
            <a href="Paginas/logueo.php" target="_blank">
                <button>
                    <img class="icono_acceso" src="src/img/sgv/user.svg" alt="">
                    Acceso
                </button>
            </a>
        </div>
    </header>
    <nav class="navegacion">
        <ul class="menu">
            <li class="li-menu"><img class="img-menu" src="src/img/sgv/general.svg" alt=""><a href="">General</a></li>
            <li class="li-menu"><img class="img-menu" src="src/img/sgv/bodega.svg" alt="">Bodega
                    <ul class="submenu">
                        <li class="li-submenu"><img class="img-submenu" src="src/img/sgv/perifericos.svg" alt="">Perifericos
                            <ul class="submenu2">
                                <li onclick="loadContent('Visuales/Bodegas/Teclados.php','.contenido', teclados_general)"> <img class="img-submenu2" src="src/img/sgv/teclados.svg" alt="">Teclados</li>
                                <li onclick="loadContent('Visuales/Bodegas/Mouse.php','.contenido', mousegeneral)"><img class="img-submenu2" src="src/img/sgv/mouse.svg" alt="">Mouse</li>
                                <li onclick="loadContent('Visuales/Bodegas/Mouse.php','.contenido', mousegeneral)"><img class="img-submenu2" src="src/img/sgv/pantalla.svg" alt="">Pantallas</li>
                                <li onclick="loadContent('Visuales/Bodegas/Mouse.php','.contenido', mousegeneral)"><img class="img-submenu2" src="src/img/sgv/diadema.svg" alt="">Diademas</li>
                            </ul>
                        </li>
                        <li class="li-submenu" onclick="loadContent('Visuales/Bodegas/Torres.php','.contenido', torres_bodega)"><img class="img-submenu" src="src/img/sgv/torre.svg" alt="">Torres</li>
                        <li class="li-submenu" onclick="loadContent('Visuales/Bodegas/Torres.php','.contenido', drawChart)"><img class="img-submenu" src="src/img/sgv/portatil.svg" alt="">Portatiles</li>
                        <li class="li-submenu" onclick="loadContent('Visuales/Bodegas/Torres.php','.contenido', drawChart)"><img class="img-submenu" src="src/img/sgv/otros.svg" alt="">Otros</li>
                    </ul>
            </li>
            <li class="li-menu"><img class="img-menu" src="src/img/sgv/plataforma.svg" alt="">Plataforma
                    <ul class="submenu">
                        <li class="li-submenu"><img class="img-submenu" src="src/img/sgv/perifericos.svg" alt="">Perifericos
                            <ul class="submenu2">
                                <li onclick="loadContent('Visuales/Bodegas/Teclados.php','.contenido', teclados_general)"> <img class="img-submenu2" src="src/img/sgv/teclados.svg" alt="">Teclados</li>
                                <li onclick="loadContent('Visuales/Bodegas/Mouse.php','.contenido', mousegeneral)"><img class="img-submenu2" src="src/img/sgv/mouse.svg" alt="">Mouse</li>
                                <li onclick="loadContent('Visuales/Bodegas/Mouse.php','.contenido', mousegeneral)"><img class="img-submenu2" src="src/img/sgv/pantalla.svg" alt="">Pantallas</li>
                                <li onclick="loadContent('Visuales/Bodegas/Mouse.php','.contenido', mousegeneral)"><img class="img-submenu2" src="src/img/sgv/diadema.svg" alt="">Diademas</li>
                            </ul>
                        </li>
                        <li class="li-submenu" onclick="loadContent('Visuales/Bodegas/Torres.php','.contenido', drawChart)"><img class="img-submenu" src="src/img/sgv/torre.svg" alt="">Torres</li>
                        <li class="li-submenu" onclick="loadContent('Visuales/Bodegas/Torres.php','.contenido', Portatiles_g)"><img class="img-submenu" src="src/img/sgv/portatil.svg" alt="">Portatiles</li>
                        <li class="li-submenu" onclick="loadContent('Visuales/Bodegas/Torres.php','.contenido', drawChart)"><img class="img-submenu" src="src/img/sgv/otros.svg" alt="">Otros</li>
                    </ul>
            </li>
        </ul>
    </nav>
    <section class="contenido" id="contenido">

    </section>
</body>
</html>