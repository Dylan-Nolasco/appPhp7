<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Science Technology Engineerig & Mathematics</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script>
        function solucion(){
        var velocidadAngular = 71;
        var radio = 0.8;;
        var velocidadLineal = 71 * 0.8;
        var d=document.getElementById("resultado");
        d.innerHTML='La velocidad lineal o tangencial de la partícula es de : '+ velocidadLineal +' m/s.';
        }
    </script>
</head>
<body>
    <section id="contenedor">
    <header id="gridHeader">
    <h1>Science Technology Engineerig & Mathematics</h1>
    <h2>Resolver problemas de Ciencia e Ingeniería con JS</h2>
    <h2>Nombre: Dylan Elías Nolasco López No. de control: 17091119</h2>
    <img src="fotoSelfie.jpg" alt="su foto">
    </header>
    </section>
    <section id="problema"  class="gridProblema">
      <section id=descripcion>
            <h2>Problema: Cálcular la velocidad lineal de cuerpos.</h2>
            <p>Descripción:</p>
            <p>Dterminar la velocidad lineal o tangencial de una partícula que tiene una velocidad angular cuya magnitud es de 71 rad/s y su radio de giro es de 0.8 mts <br>
      </section>
      <section id="datos">
            <h2>Datos:</h2>
            radio = r = 0.8 mts <br>
            velocidad angular = w = 71 rad/s. 
      </section>
      <section id="formulas">
            <h2>Fórmulas</h2>
            w = θ/t donde w = velocidad angular, θ = desplazamiento angular, t = tiempo <br>
            Vt = velocidad lineal = w * r
      </section>
      <section id="solucion">
            <h2>Solución</h2>
            <p>La velocidad lineal es:<br>
             Vt = w * r entonces sustituyendo los datos (71 rad/s) * (0.8 mts)</p>
             <button onclick="solucion()">Presiona para calcular</button>
      </section>
      
      <section id="resultado"></section>
    </section>
    <footer id="gridPie">
        <p>Solution Science Problems. 2019 Creative Commons 3.0</p>
    </footer>
</body>
</html>
