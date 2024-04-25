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
            max-width: 1200px;
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
    <h2>Comidas</h2>
        <div class="row" id="row">
            <div class="card">
                <img src="https://i.pinimg.com/564x/06/b4/c5/06b4c56e9fc6c1ffba1823257d2acfbc.jpg" alt="Imagen de empleo">
                <div class="overlay">
                    <div class="text">Ceviche</div>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/564x/f1/39/f3/f139f32ca0d01a381f3d85753ffd747d.jpg" alt="Imagen de empleo">
                <div class="overlay">
                    <div class="text">Juanes</div>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/564x/f8/cd/6f/f8cd6fbcd9f89ed802a1e0c253205c92.jpg" alt="Imagen de empleo">
                <div class="overlay">
                    <div class="text">Lomo Saltado</div>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/564x/47/a4/78/47a4786fdf44e6436a3f815e7c5c56b2.jpg" alt="Imagen de empleo">
                <div class="overlay">
                    <div class="text">Aji8 de gallina</div>
                </div>
            </div>
            <!-- Repite las tarjetas aquí -->
        </div>
        <div class="container">
        <h2>Peliculas</h2>
        <div class="row" id="row">
            <div class="card">
                <img src="https://i.pinimg.com/736x/f4/59/03/f4590365f97d7190fe160523df4db899.jpg" alt="Imagen de empleo">
                <div class="overlay">
                    <div class="text">Blade Runner 2049</div>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/564x/75/cb/0c/75cb0c86adaaad47d9377effed40394e.jpg" alt="Imagen de empleo">
                <div class="overlay">
                    <div class="text">La era de hielo</div>
                </div>
            </div>
            <div class="row" id="row">
            <div class="card">
                <img src="https://i.pinimg.com/564x/2b/14/da/2b14da6668dcc8e6456ab0ce9bcf1a5d.jpg" alt="Imagen de empleo">
                <div class="overlay">
                    <div class="text">Harry Potter</div>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/564x/eb/fe/c2/ebfec28e2fb3cfc36ab354cf97a3955a.jpg" alt="Imagen de empleo">
                <div class="overlay">
                    <div class="text">Madagascar</div>
                </div>
            </div>
            <!-- Repite las tarjetas aquí -->
        </div>       
    </div>
    <div class="container">
        <h2>Videojuegos</h2>
        <div class="row" id="row">
            <div class="card">
                <img src="https://i.pinimg.com/564x/b4/31/bd/b431bddfee6275e55c48ebb5f7097bf5.jpg" alt="Imagen de empleo">
                <div class="overlay">
                    <div class="text">Movile legends</div>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/564x/ca/0d/dd/ca0dddb17b1fbfb1214f10f0b61bb5bb.jpg" alt="Imagen de empleo">
                <div class="overlay">
                    <div class="text">Ark survival</div>
                </div>
            </div>
            <div class="row" id="row">
            <div class="card">
                <img src="https://i.pinimg.com/564x/8b/dc/71/8bdc71c5b7e705e6f2c0bb31ec678356.jpg" alt="Imagen de empleo">
                <div class="overlay">
                    <div class="text">Call of Dragons</div>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/564x/bf/cb/2d/bfcb2dee028bac3b96f122dd925328ca.jpg" alt="Imagen de empleo">
                <div class="overlay">
                    <div class="text">Warship battle</div>
                </div>
            </div>
            <footer>

    <nav>

    <a href="{{ route('Inicio') }}">Salir</a>

    </nav>

  </footer>
</body>
</html>
