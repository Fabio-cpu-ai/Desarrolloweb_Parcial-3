<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Citas - Hospital</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; }
        .form-cita { background: #fff; padding: 20px; margin: 40px auto; width: 350px; border-radius: 8px; box-shadow: 0 0 10px #ccc; }
        .form-cita h2 { text-align: center; }
        .form-cita label { display: block; margin-top: 10px; }
        .form-cita input, .form-cita select { width: 100%; padding: 8px; margin-top: 5px; }
        .form-cita button { margin-top: 15px; width: 100%; padding: 10px; background: #007bff; color: #fff; border: none; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="form-cita">
        <h2>Solicitar Cita</h2>
        <form method="post" action="">
            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>

            <label for="fecha">Fecha de la cita:</label>
            <input type="date" id="fecha" name="fecha" required>

            <label for="hora">Hora:</label>
            <input type="time" id="hora" name="hora" required>

            <label for="especialidad">Especialidad:</label>
            <select id="especialidad" name="especialidad" required>
                <option value="">Seleccione</option>
                <option value="Medicina General">Medicina General</option>
                <option value="Pediatría">Pediatría</option>
                <option value="Ginecología">Ginecología</option>
                <option value="Cardiología">Cardiología</option>
            </select>

            <button type="submit" name="enviar">Solicitar Cita</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = htmlspecialchars($_POST["nombre"]);
            $email = htmlspecialchars($_POST["email"]);
            $telefono = htmlspecialchars($_POST["telefono"]);
            $fecha = htmlspecialchars($_POST["fecha"]);
            $hora = htmlspecialchars($_POST["hora"]);
            $especialidad = htmlspecialchars($_POST["especialidad"]);
            echo "<p style='color:green; margin-top:15px;'>¡Cita solicitada para $nombre el $fecha a las $hora en $especialidad!</p>";
        }
        ?>
    </div>
</body>
</html>
