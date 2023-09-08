<?php

include_once("../Config/Conexion.php");

    $id = $_POST['Id'];
    $Materia= $_POST['Asignatura'];
    $Docente = $_POST['Docente'];
    $Nombre = $_POST['nombre'];
    $Edad = $_POST['edad'];
    $Correo = $_POST['correo'];

    $sql = "UPDATE estudiante SET 
                    Id_a='".$Materia."',
                    Id_docente='".$Docente."',
                    nombrecompleto='".$Nombre."',
                    edad='".$Edad."',
                    correo='".$Correo."'
                     WHERE Id=".$id."";

    if ($resultado = $conn->query($sql)) {
        header("location:../Index.php");
    }
