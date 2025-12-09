<?php
    $nombres = "Rubén Darío";
    $apellidos = "Escamilla Gonzalez";
    $correo = "rescamilla@gmail.com";
    $cargo = "Jefe de Departamento";
    $domicilio = "Iztapalapa, CDMX";

    $nombre_completo = $nombres . " " . $apellidos;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estructura PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .tarjeta {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        width: 300px;
        }
        h2 {
            color: #333;
            border-bottom: 2px solid #FF2D20;
            padding-bottom: 10px;
        }
        .dato {
            margin-bottom: 10px;
        }
        .etiqueta {
            font-weight: bold;
            color: #555;
        }

    </style>
</head>
<body>
    <div class="tarjeta">
        <h2>Datos generales</h2>
 
        <div class="dato">
            <span class="etiqueta">Nombre:</span>
            <?php echo $nombre_completo; ?>
        </div>

        <div class="dato">
            <span class="etiqueta">Profesión:</span>
            <?php echo $cargo; ?>
        </div>

        <div class="dato">
            <span class="etiqueta">Correo:</span>
            <a href="mailto:<?php echo $correo; ?>"><?php echo $correo;
?></a>
        </div>
        <div class="dato">
            <span class="etiqueta">Domicilio:</span>
            <?php echo $domicilio; ?>
        </div>
        
        <br>
        <small style="color: gray;">Frontend + Backend</small>
    </div>
    
</body>
</html>