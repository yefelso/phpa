<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favoritos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 1000px;
            overflow-x: hidden;
        }
        .row {
            display: flex;
            justify-content: center;
        }
        .card {
            width: 200px;
            height: 200px;
            margin: 10px;
            border-radius: 2%;
            overflow: hidden;
            perspective: 1000px;
            cursor: pointer;
            transition: transform 0.5s;
            position: relative;
        }
        .card:hover {
            transform: rotateY(180deg);
        }
        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: rotateY(0deg);
            transition: transform 0.5s;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8); /* Blanco semitransparente */
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.5s;
            transform: rotateY(180deg); /* Contrarrestar la rotación de la tarjeta */
            transform-style: preserve-3d; /* Mantener la orientación correcta del texto */
        }
        .card:hover .overlay {
            opacity: 1;
            transform: rotateY(0deg); /* Revertir la rotación del overlay al pasar el mouse */
        }
        .card .text {
            color: black;
            text-align: center;
            transform: rotateY(180deg); /* Contrarrestar la rotación de la tarjeta */
            transform-style: preserve-3d; /* Mantener la orientación correcta del texto */
        }
        h2{
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container">
    <h2>Pasatiempos</h2>
        <div class="row" id="row">
            <div class="card">
                <img src="https://i.pinimg.com/564x/89/74/4d/89744d469d94575430d2d5b9faf0393a.jpg" alt="Imagen de empleo">
                <div class="overlay">
                    <div class="text">Movile Legends</div>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/564x/d1/ec/79/d1ec792dd511af41e68cfff0d3bfd911.jpg" alt="Imagen de empleo">
                <div class="overlay">
                    <div class="text">Ir al gymnacio</div>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/564x/2e/35/a9/2e35a9509310bd962aedb4b05c631bce.jpg" alt="Imagen de empleo">
                <div class="overlay">
                    <div class="text">Escuchar Musica</div>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/564x/be/3e/3b/be3e3b6065e0d03c6ec7039488df3167.jpg" alt="Imagen de empleo">
                <div class="overlay">
                    <div class="text">Correr</div>
                </div>
            </div>
            <!-- Repite las tarjetas aquí -->
        </div>
        
    </div>
    <footer>

    <nav>

    <a href="{{ route('Inicio') }}">Salir</a>

    </nav>

  </footer>
</body>
</html>
