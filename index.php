!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XA</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.php">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href="#">Otros Ejemplos Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
 <h1>Problema: Cálcular la velocidad lineal de cuerpos.</h1>
            <p>Descripción:</p>
            <p>Dterminar la velocidad lineal o tangencial de una partícula que tiene una velocidad angular cuya magnitud es de 71 rad/s y su radio de giro es de 0.8 mts <br>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
    w = θ/t donde w = velocidad angular, θ = desplazamiento angular, t = tiempo <br>
    Vt = velocidad lineal = w * r
</section>
<section class="datos">
<h2>Datos:</h2>
   radio = r = 0.8 mts <br>
    velocidad angular = w = 71 rad/s. 
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>La velocidad lineal es:<br>
    Vt = w * r entonces sustituyendo los datos (71 rad/s) * (0.8 mts)</p>
</section>
<?php
     function calcula_densidad(){
        $velocidadAngular = 71;
        $radio = 0.8;
        $velocidadLineal = 71 * 0.8;       
        return $velocidadLineal;
     }
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> resultado: densidad = ".calcula_densidad(). "m/s</h1>";
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2019
    </footer>
   </section>
</body>
</html>
