<?php
      include ("../Config/Conexion.php");

    $Id = $_REQUEST['Id'];
    $sql = "DELETE FROM estudiante WHERE Id ='$Id'";

    $query = mysqli_query($conn,$sql);
    if ($query === TRUE) {
        header("Location: ../Index.php");
    }

?>