<?php
echo "llego";
// Conexión a la base de datos
$conexion = new mysqli('localhost', 'root', '', 'escuela');

// Verificar la conexión
if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

// Preparar la sentencia para insertar
$stmt = $conexion->prepare("INSERT INTO alumnos (Nombres, Apellido_Paterno, Apellido_Materno, Edad) 
                            VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssi", $nombres, $Apellido_Paterno, $Apellido_Materno, $edad);

// Obtener los datos del formulario
$nombres = $_POST['nombres'];
$Apellido_Paterno = $_POST['Apellido_Paterno'];
$Apellido_Materno = $_POST['Apellido_Materno'];
$edad = $_POST['edad'];

// Ejecutar la sentencia
if ($stmt->execute()) {
    echo "Registro exitoso! ID del alumno: " . $stmt->insert_id;
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conexion->close();
?>
