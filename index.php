<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Base de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Formulario de Registro</h2>
    
    <form id="registroForm" action="insertar.php" method="POST">
        <div class="mb-3">
            <label for="nombres" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese sus nombres" required>
        </div>
        
        <div class="mb-3">
            <label for="Apellido_Paterno" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" id="Apellido_Paterno" name="Apellido_Paterno" placeholder="Ingrese su apellido paterno" required>
        </div>
        
        <div class="mb-3">
            <label for="Apellido_Materno" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" id="Apellido_Materno" name="Apellido_Materno" placeholder="Ingrese su apellido materno">
        </div>
        
        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" min="0" max="120" placeholder="Ingrese su edad" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // A $( document ).ready() block.
    $(document).ready(function() {
        //$('#registroForm').on('submit', function(e) {
            //e.preventDefault(); // Evita el envío tradicional del formulario.
            //alert('Formulario enviado correctamente!');
            // Aquí puedes añadir lógica para enviar los datos a la base de datos.
        
    });
</script>
</body>
</html>