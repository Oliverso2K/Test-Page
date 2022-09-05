<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Inicio - Práctica de HTML5 y CSS</title> 
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    </head>

    <body>
        @foreach($versiones as $ver)
            <text>{{ $ver }}</text>
        @endforeach

        <div class="nav">
            <a href="landingpage" class="nav-button">- Inicio -</a>
            <a href="contacto" class="nav-button">- Contacto -</a>
        </div>

        <h1>Contacto</h1>
        
        <div class="container">
            <form method="GET" action="contacto">
                <label for="name" class="field-label">Nombre:</label><br>
                <input type="text" id="name" name="name" class="field"><br>

                <label for="email" class="field-label">Correo electrónico:</label><br>
                <input type="email" id="email" name="email" class="field"><br>

                <label for="comment" class="field-label">Comentario:</label><br>
                <textarea id="comment" name="comment" class="field"></textarea><br>
                
                <input type="submit" value="Enviar" class="button">
            </form>
        </div>

        <div class="footer">
            <p>Contáctame en <a href="mailto:oliverisrael.quinterogarcia@gmail.com">oliverisrael.quinterogarcia@gmail.com</a></p>
        </div>
    </body>
</html>