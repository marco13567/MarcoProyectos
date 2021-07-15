<?php
    //print_r($_POST);

    if (!isset($_POST['oculto'])) {
        exit();
    }
    include_once '../Login/Bd.php';
    $nombre = $_POST['txtNombres'];
    $paterno = $_POST['txtPaterno'];
    $materno = $_POST['txtMaterno'];
    $edad = $_POST['txtEdad'];
    $foto = $_POST['txtfoto'];

    $sentencia = $bd->prepare('Insert into crud (nombres,ap_paterno, ap_materno, edad,foto) values (?,?,?,?,?)');
    $resultado = $sentencia->execute([$nombre,$paterno, $materno,  $edad,$foto]);

    if ($resultado == true) {
        echo "Insertado correctamente";
        header('Location: registrados.php');
    }else{
        echo 'Error al insertar';   
    }
?>