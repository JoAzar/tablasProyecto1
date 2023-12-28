<?php  require 'manejoDatosTablas.php'; $conexion = Conexion();
   $cotizacion = "c01nC0ntr0ll";
   $gal = "1m4g3n3s";
   $chanel = "ch4n3l_4lph4";
   $unFollow = "n0N4m3";
   $pruebas = "pruebas";
   $chan2 = "c0ffeeCup";
   $random1 = "n0Number";
   $gam1 = "memoria.php";
   $cp1 = "r3d";
   $cp2 = "tr7";
   $cp3 = "l00p";
   $cp4 = "c4sh";
   $cp6 = "juegos";

    
    $query3 = "SELECT * FROM cursos";

    $stmt = mysqli_prepare($conexion, $query3);
    mysqli_stmt_execute($stmt);
    $resultados = mysqli_stmt_get_result($stmt);


    $tablaCursos = '
    <h3 class="tituloInicial">Tabla de Cursos</h3><br>
    <table class="tabla1">
        <tr>
            <th>Asignatura</th>
            <th>Nombre</th>
            <th>Documento</th>
            <th>Nota</th>
        </tr>';

    if($resultados && mysqli_num_rows($resultados) > 0) {
        while ($fila = mysqli_fetch_assoc($resultados)) {
            $Asignatura = $fila['Asignatura'];
            $Nombre = $fila['Nombre'];
            $Documento = $fila['Documento'];
            $Nota = $fila['Nota'];
    
            $tablaCursos .='
            <tr>
                <td>'.$Asignatura.'</td>
                <td>'.$Nombre.'</td>
                <td>'.$Documento.'</td>
                <td>'.$Nota.'</td>
            </tr>';
        }
    }

    $tablaCursos .= '</table>';
    mysqli_stmt_close($stmt);

    define('tablas', $tablaCursos);

//----------------------------------------------------------------------------------------

$query4 = "SELECT * FROM agenda";

    $stmt = mysqli_prepare($conexion, $query4);
    mysqli_stmt_execute($stmt);
    $resultados = mysqli_stmt_get_result($stmt);


    $agenda = '
    <h3 class="tituloInicial">Agenda</h3><br>
    <table class="tabla1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Número</th>
        </tr>';

    if($resultados && mysqli_num_rows($resultados) > 0) {
        while ($fila = mysqli_fetch_assoc($resultados)) {
            $Nombre = $fila['Nombre'];
            $Apellido = $fila['Apellido'];
            $Numero = $fila['Numero'];
    
            $agenda .='
            <tr>
                <td>'.$Nombre.'</td>
                <td>'.$Apellido.'</td>
                <td>'.$Numero.'</td>
            </tr>';
        }
    }

    $agenda .= '</table>';
    mysqli_stmt_close($stmt);

    define('agenda', $agenda);

//----------------------------------------------------------------------------------------
    $query2 = "SELECT * FROM Inscripciones ORDER BY Materia ASC";

    $stmt = mysqli_prepare($conexion, $query2);
    mysqli_stmt_execute($stmt);
    $resultados = mysqli_stmt_get_result($stmt);


    $tablaInscripciones = '
    <h3 class="tituloInicial">Tabla de Inscripciones</h3><br>
    <table class="tabla1">
        <tr>
            <th>Materia</th>
            <th>Asignatura</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Documento</th>
            
        </tr>';

    if($resultados && mysqli_num_rows($resultados) > 0) {
        while ($fila = mysqli_fetch_assoc($resultados)) {
            $Materia = $fila['Materia'];
            $Asignatura = $fila['Asignatura'];
            $Nombre = $fila['Nombre'];
            $Apellido = $fila['Apellido'];
            $Documento = $fila['Documento'];

    
            $tablaInscripciones .='
            <tr>
                <td>'.$Materia.'</td>
                <td>'.$Asignatura.'</td>
                <td>'.$Nombre.'</td>
                <td>'.$Apellido.'</td>
                <td>'.$Documento.'</td>
            </tr>';
        }
    }

    $tablaInscripciones .= '</table>';
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);

    define('tablas2', $tablaInscripciones);
//----------------------------------------------------------------------------------------

    define('bodyTabla','
    <body class="bodyTigre">
        <br><h1 class="bienvPerfil">
            Tablas de datos
        </h1>
        <nav class="navegacion">
        <ul class="menu">
            <li>
                <a class="cajaChicaMenu" href="../'.$cp1.'/'.$unFollow.'">Inicio</a>
                <ul class="submenu">
                    <li class="cajaNegra"><a class="caja" href="../'.$cp2.'/'.$gal.'">Galería</a> </li>
                    <li class="cajaNegra"><a class="caja" href="../'.$cp3.'/'.$chanel.'">Chat</a></li>
                    <li class="cajaNegra"><a class="caja" href="../'.$cp1.'/'.$pruebas.'">Pruebas</a></li>
                    <li class="cajaNegra"><a class="caja" href="../'.$random1.'/'.$chan2.'">Config</a></li>
                </ul>
            </li>
            <li>
                <a class="cajaChicaMenu" href="#">Juegos</a>
                <ul class="submenu">
                    <li class="cajaNegra"><a class="caja" href="../'.$cp6.'/'.$gam1.'">Juego de memoria</a></li>
                    <li class="cajaNegra"><a class="caja" href="#">PigRun</a></li>
                    <li class="cajaNegra"><a class="caja" href="#">Servicio 3</a></li>
                    <li class="cajaNegra"><a class="caja" href="#">Servicio 4</a></li>
                </ul>
            </li>
            <li>
                <a class="cajaChicaMenu" href="#">Servicio 2</a>
                <ul class="submenu">
                    <li class="cajaNegra"><a class="caja" href="../servicios2/cyberMapa.php">Ciber Mapa</a></li>
                    <li class="cajaNegra"><a class="caja" href="../tablas/tabla1.php">Tablas</a></li>
                    <li class="cajaNegra"><a class="caja" href="#">Servicio 4</a></li>
                </ul>
            </li>
            <li>
                <a class="cajaChicaMenu" href="../'.$cp4.'/'.$cotizacion.'">Cotizaciones</a>
                <ul class="submenu">
                    <li class="cajaNegra"><a class="caja" href="../'.$cp4.'/'.$cotizacion.'">Pesos</a></li>
                    <li class="cajaNegra"><a class="caja" href="#">Euros</a></li>
                    <li class="cajaNegra"><a class="caja" href="#">Dolar</a></li>
                    <li class="cajaNegra"><a class="caja" href="#">Yuanes</a></li>
                </ul>
            </li>
            <li>
                <a class="cajaChicaMenu" href="../sys0ut/f0ll0wB4ck">Cerrar Sesión</a>
            </li>
            </ul>
        </nav>
    </body>
    ');

    define('headExt',
    '<head>
        <title>[ Cálculos Métricos]</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="animaciones.js"></script>
        <link href="../r3d/r4inb0w" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Belanosima&display=swap" rel="stylesheet">
    </head>');

?>