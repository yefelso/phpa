<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Experiencias</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2, h3 {
            color: #333;
        }
        .experience {
            margin-bottom: 30px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
        }
        .experience:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .experience h2 {
            margin-top: 0;
            font-size: 1.5em;
            color: #007bff;
        }
        .experience p {
            margin-top: 10px;
            line-height: 1.6;
        }
        .experience p strong {
            font-weight: bold;
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
        <h1>Mis Experiencias</h1>
        
        <div class="experience">
            <h2>Trabajo en Programación</h2>
            <p><strong>Empresa:</strong> XYZ Tech</p>
            <p><strong>Puesto:</strong> Desarrollador Full Stack</p>
            <p><strong>Descripción:</strong> Desarrollo de aplicaciones web utilizando tecnologías como HTML, CSS, JavaScript, Node.js y React.</p>
            <p><strong>Logros:</strong></p>
            <ul>
                <li>Lideré el desarrollo de un sistema de gestión de clientes que aumentó la eficiencia en un 30%.</li>
                <li>Implementé nuevas características en la plataforma de comercio electrónico que aumentaron las ventas en un 20%.</li>
            </ul>
        </div>
        
        <div class="experience">
            <h2>Trabajo en Ventas</h2>
            <p><strong>Empresa:</strong> ABC Sales</p>
            <p><strong>Puesto:</strong> Ejecutivo de ventas</p>
            <p><strong>Descripción:</strong> Ventas consultivas de productos y servicios tecnológicos a empresas de diversos sectores.</p>
            <p><strong>Logros:</strong></p>
            <ul>
                <li>Superé el objetivo de ventas trimestral en un 25% durante tres trimestres consecutivos.</li>
                <li>Establecí relaciones comerciales sólidas con varios clientes clave, generando ingresos recurrentes significativos.</li>
            </ul>
        </div>
        
        <div class="experience">
            <h2>Trabajo en Vigilancia</h2>
            <p><strong>Empresa:</strong> SecureGuard</p>
            <p><strong>Puesto:</strong> Oficial de seguridad</p>
            <p><strong>Descripción:</strong> Vigilancia y protección de instalaciones comerciales y residenciales.</p>
            <p><strong>Logros:</strong></p>
            <ul>
                <li>Implementé procedimientos de seguridad mejorados que redujeron los incidentes en un 40% en el primer año.</li>
                <li>Recibí el premio al empleado del mes en tres ocasiones por mi dedicación y profesionalismo.</li>
            </ul>
        </div>
        
        <!-- Agrega más experiencias aquí según sea necesario -->
        
    </div>
    <footer>

    <nav>

    <a href="{{ route('Inicio') }}">Salir</a>

    </nav>

  </footer>

</body>
</html>
