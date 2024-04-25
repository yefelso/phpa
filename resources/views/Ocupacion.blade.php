<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Ocupación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        h1{
            text-align: center;
            margin-top: 10px;
            color:black;
            font-family: "Times New Roman", Times, serif;
        }
        p{
            text-align: center;
            margin-top: 10px;
            color:black;
            font-family: "Times New Roman", Times, serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
        }

        .col {
            flex-basis: calc(80% - 20px); /* Calculamos el 50% del ancho, con un margen */
            margin-bottom: 20px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            background-color: white;
            display: grid;
            grid-template-columns: 50% 50%; /* Dividir el card en dos columnas */
        }

        .card img {
            max-width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
            grid-column: 1; /* La imagen ocupa la primera columna */
        }

        .card-text {
            padding: 0 20px;
            grid-column: 2; /* El texto ocupa la segunda columna */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h2 {
            text-align: center;
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Mi Ocupación</h1>
        
        <div class="row">
            <div class="col">
                <div class="card">
                    <img src="https://edsi.cl/wp-content/uploads/2020/04/Vigilante-privado-formacion.jpg" alt="Imagen de empleo">
                    <div class="card-text">
                        <h2>Empleo</h2>
                        <p>Descripción del empleo</p>
                        <p>Como profesional dedicado al campo de la vigilancia, tengo el privilegio de desempeñar un papel crucial en la protección y seguridad de la empresa a la que pertenezco. Mi responsabilidad hacia la organización es primordial, ya que mi labor implica la vigilancia constante y la adopción de medidas proactivas para prevenir y abordar cualquier situación que pueda representar un riesgo para el personal, las instalaciones o los activos de la empresa.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://colegionarval.org/wp-content/uploads/2023/10/como-ser-un-buen-estudiante.webp" alt="Imagen de estudios">
                    <div class="card-text">
                        <h2>Estudios</h2>
                        <p>Descripción de los estudios</p>
                        <p>Mi compromiso con el aprendizaje continuo se refleja en mi participación activa en proyectos académicos, grupos de estudio y actividades extracurriculares relacionadas con la ingeniería de software. Busco constantemente oportunidades para expandir mis horizontes y aplicar mis habilidades en entornos del mundo real, ya sea a través de pasantías, proyectos colaborativos o participación en competencias y eventos relacionados con la tecnología.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://definicion.de/wp-content/uploads/2015/04/bar.jpg" alt="Imagen social">
                    <div class="card-text">
                        <h2>Social</h2>
                        <p>Descripción de la vida social</p>
                        <p>En el ámbito social, me caracterizo por ser una persona profundamente leal y comprometida con aquellos que han ganado mi aprecio y confianza. Para mí, la lealtad no es solo una palabra, sino un valor fundamental que guía mis relaciones interpersonales y mi forma de interactuar con los demás.

Cuando establezco vínculos significativos con las personas, ya sean amigos, familiares o colegas, me comprometo sinceramente a estar presente para ellos en todo momento. Esta lealtad se manifiesta en mi disposición para escuchar, apoyar y acompañar a quienes considero importantes en mi vida, incluso en los momentos más difíciles.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
