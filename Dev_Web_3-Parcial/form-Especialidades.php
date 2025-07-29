<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Especialidades</title>
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
        <h1>Form Especialidades</h1>
        <form>

            <div class="form-group">
                <label for="especialidad">Especialidad</label>
                <input type="text" id="especialidad">
            </div>
            <button type="submit" class="btn-enviar">Enviar</button>
            <head>
                <div>class="logo">
                    <h1>HOSPITAL MILITAR</h1>
                    <NAV>
                        <ul>
                            <li>href="insert_medico.php">medicos</li>
                            <li>href="insert_paciente.php">paciente</li>
                            <li>href="insert_esspecialidad.php">especialidades</li>
                            <li>href="insert_citas.php">cits</li>
                            
                        </ul>
                    </NAV>

                </div>
            </head>
            <main>
                <form action="" method="post">  
                    <h2>Agregar especialidad</h2>
                    <label for="nombre_especialidad">Nombre de la especialidad:</label>
                    input type="text" id="nombre_especialidad" name="nombre_especialidad" required>
                    <button type="submit" name="agregar_especialidad">Agregar Especialidad</button>
                </form>
            </main>
        </form>
    </div>
    <footer>
        <p>&copy; <?php echo date ("Y"); ?> Hospital Militar. Todos los derechos reservados</p>
    </footer>
</body>
</html>