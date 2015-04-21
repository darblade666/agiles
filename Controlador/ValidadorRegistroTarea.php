<?php
    $FechaEntrega = date("Y-m-d",strtotime($_POST['date']));
    $NombreTarea = $_POST['name'];
    $NombreMateria = $_POST['materia'];
    $archivo = $_FILES["archivo_adjunto"];
    $Descripcion = $_POST['descripcion'];
    
?>