<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Tu Diario Personal</title>

  <style>

  /* Estilos generales */

  html, body {

    height: 100%;

    margin: 0;

    padding: 0;

  }



  body {

    display: flex;

    flex-direction: column;

    align-items: center; /* Centra verticalmente */

    justify-content: space-between; /* Espacio entre el encabezado y el pie de página */

    position: relative; /* Establece un contexto de posición para los elementos absolutos */

    min-height: 100vh; /* Garantiza que el cuerpo al menos ocupe toda la altura de la ventana */

  }



  /* Estilos para el header */

  header {

    background-color: #6b5b3e; /* Mostaza oscuro */

    color: #fff;

    text-align: right;

    padding: 50px;

    width: 100%; /* Ocupa todo el ancho */

    position: fixed; /* Mantiene fijo el encabezado */

    top: 0; /* Fijado arriba */

  }



  header nav {

    margin-top: 5px;

  }



  header a {

    color: #fff;

    text-decoration: none;

    margin-right: 10px;

  }



  /* Estilos para el contenido */

  main {

    text-align: center;

    padding: 20px;

    margin-top: 150px; /* Ajusta el margen superior para evitar que el contenido se superponga con el encabezado */

  }



  /* Estilos para el pie de página */

  footer {

    background-color: #6b5b3e; /* Mostaza oscuro */

    color: #fff;

    text-align: center;

    padding: 50px;

    width: 100%; /* Ocupa todo el ancho */

    position: absolute; /* Permite que el pie de página permanezca abajo */

    bottom: 0; /* Fijado abajo */

  }



  footer nav {

    margin-top: 5px;

  }



  footer a {

    color: #fff;

    text-decoration: none;

    margin-right: 10px;

  }



  /* Estilos para los títulos */

  h1 {

    color: #ff00ff; /* Fucsia */

  }



  /* Estilos para las tarjetas */

  .card-container {

    display: flex;

    flex-direction: row; /* Cambia a disposición horizontal */

    align-items: center;

    gap: 20px;

    overflow-x: auto; /* Permite desplazamiento horizontal si las tarjetas son demasiado anchas */

  }



  .card {

    width: 300px;

    border-radius: 10px;

    overflow: hidden;

    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

    border: 2px solid fuchsia;

  }



  .card img {

    width: 100%;

    height: auto;

  }



  .card-content {

    padding: 20px;

    text-align: center;

  }

  h3{

    color:fuchsia;

  }

</style>



</head>

<body>

  <header>

    <nav>

      <a href="{{ route('Ocupacion') }}">Ocupacion</a>

      <a href="{{ route('Acercademi') }}">Acerc De Mi</a>

      <a href="{{ route('Experiencia') }}">Experiencia</a>

      <a href="{{ route('Favoritos') }}">Favoritos</a>

      <a href="{{ route('Pasatiempos') }}">Pasatiempos</a>

    </nav>

  </header>



  <main>

    <h1>Bienvenido a Tu Blog Personal</h1>

    <p>Esta página se trata de un Blog donde encontraras cosas sobre ti</p>



    <div class="card-container">

      <div class="card">

        <img src="https://img.freepik.com/fotos-premium/silueta-hombre-deprimido-tristemente-sentado-cama-dormitorio-concepto-depresion_39704-3271.jpg?w=1380" alt="Image 1">

        <div class="card-content">

          <h3>Yo</h3>

          <p>quien soy yo.</p>

        </div>

      </div>



      <div class="card">

        <img src="https://scontent.flim6-2.fna.fbcdn.net/v/t39.30808-6/359812711_768265205301012_3347562102229794927_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_ohc=0xGkYc2rnpUQ7kNvgG9Nwic&_nc_ht=scontent.flim6-2.fna&oh=00_AfA_pwcMhlNpib-O2Pl5oSadrJsOUiuuLGV1yivtv4LDww&oe=662F2304" alt="Image 2">

        <div class="card-content">

          <h3>Gustos</h3>

          <p>que es lo que mas te gusta .</p>

        </div>

      </div>



      <div class="card">

        <img src="https://i.pinimg.com/564x/82/14/5c/82145c51a5adf1c65d91240179a8d8d2.jpg" alt="Image 3">

        <div class="card-content">

          <h3>Pasatiempos</h3>

          <p>Que es loq ue te gusta hacer en tu tirempo libre.</p>

        </div>

      </div>

    </div>

  </main>



  <footer>

    <nav>

    <a href="{{ route('Ocupacion') }}">Ocupacion</a>

<a href="{{ route('Acercademi') }}">Acerca De Mi</a>

<a href="{{ route('Experiencia') }}">Experiencia</a>

<a href="{{ route('Favoritos') }}">Favoritos</a>

<a href="{{ route('Pasatiempos') }}">Pasatiempos</a>

    

    </nav>

  </footer>

</body>

</html>