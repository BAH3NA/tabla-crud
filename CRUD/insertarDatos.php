<?php
include ("../Config/Conexion.php");

$estudiante = $_POST['nombrecompleto'];
$edad_e = $_POST['edad'];
$correo_e = $_POST['correo'];
$docente = $_POST['docentes'];
$programa = $_POST['asignatura'];



$sql = "INSERT INTO estudiante(nombrecompleto,edad,correo,Id_docente,Id_a) VALUES('$estudiante','$edad_e','$correo_e','$docente','$programa')";


$resultado = mysqli_query($conn,$sql);

if ($resultado === TRUE) {
    header("location:../Index.php");
} else {
    echo "Datos NO insertados";
}
