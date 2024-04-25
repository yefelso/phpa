<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mi Biografía</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
  }
  .container {
    max-width: 1200px;
    margin: 20px auto;
    overflow: hidden;
  }
  .column {
    float: left;
    width: 50%;
    padding: 20px;
  }
  .bio-text {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  .bio-image {
    float: right;
    width: 50%;
  }
  img {
    max-width: 100%;
    height: auto;
    display: block;
  }
  h2{
    font-family: "Times New Roman", Times, serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
    text-align:center;
  }
  footer {

   background-color: #6b5b3e; /* Mostaza oscuro */

   color: #fff;

   text-align: center;

   padding: 10px;

   width: 100%; /* Ocupa todo el ancho */

   position: absolute; /* Permite que el pie de página permanezca abajo */

   bottom: 0; /* Fijado abajo */

  position: fixed; /* Mantiene fijo el encabezado */

}



footer nav {

margin-top: 5px;

}



footer a {

color: #fff;

text-decoration: none;

margin-right: 10px;

}
</style>
</head>
<body>

<div class="container">
  <div class="column">
    <div class="bio-text">
      <h2>Acerca de mí</h2>
      <p>¡Hola! Mi nombre es yefelson y soy Ingeniero de software. Desde temprana edad, me apasiona el internet. A lo largo de los años, he trabajado duro para alcanzar mis metas y contribuir positivamente en mi trabajo.</p>
      <p>Mi vida está marcada por momentos buenos y malos. A través de desafíos y triunfos, he aprendido la importancia de trabajar duro para conseguir mis objetivos .</p>
      <p>Actualmente, estoy enfocado en terminar mi carrera. Mi objetivo es ser una gran persona y un ejemplo a seguir para los demas. Estoy emocionado por lo que el futuro me depara y ansioso por seguir creciendo y aprendiendo en este emocionante viaje llamado vida.</p>
    </div>
  </div>
  <div class="column bio-image">
    <img src="https://i.pinimg.com/564x/41/e1/ca/41e1ca6136968c828e7a9972d6c57c4c.jpg" alt="Imagen de [yefelson]">
  </div>
</div>
<footer>

    <nav>

    <a href="{{ route('Inicio') }}">Salir</a>

    </nav>

  </footer>

</body>
</html>
