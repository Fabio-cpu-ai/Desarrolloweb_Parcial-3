<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Historial Médico</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles2.css">
</head>
<nav class="nav-bar"> 
    
    <ul> 
        <li><a href="index.php">Hospital Militar</a></li>
        <li><a href="fomr-pacientes.php">Pacientes</a></li>
        <li><a href="form-Citas.php">Citas</a></li>
        <li><a href="form-Especialidades.php">Especialidades</a></li>
        <li><a href="form-HistorialMedico.php">Historial Médico</a></li>
        <li><a href="form-medicos.php">Médicos</a></li>
    </ul>
</nav>
<body>
    <div class="container">
        <h1>Form Historial Médico</h1>
        <form>
            <div class="form-group">
                <label for="idHistorial">Id Historial</label>
                <input type="text" id="idHistorial">
            </div>
            <div class="form-group">
                <label for="idPaciente">Id Paciente</label>
                <input type="text" id="idPaciente">
            </div>
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">
            </div>
            <div class="form-group">
                <label for="diagnostico">Diagnostico</label>
                <input type="text" id="diagnostico">
            </div>
            <div class="form-group">
                <label for="observaciones">Observaciones</label>
                <input type="text" id="observaciones">
            </div>
            <button type="submit" class="btn-enviar">Enviar</button>
        </form>
    </div>
</body>
</html>