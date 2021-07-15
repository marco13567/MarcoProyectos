<?php
    //print_r($_POST);

    if (!isset($_POST['oculto'])) {
        exit();
    }
    include_once '../Login/Bd.php';
    $Nombre = $_POST['txtnombre'];
    $Correo= $_POST['txtcorreo'];
    $Telefono = $_POST['txttelefono'];
    $Mensaje = $_POST['txtmensaje'];

    //CREAMOS LA SENTENCIA
    $sentencia = $bd->prepare('Insert into contacto(nombre, email, telefono,mensaje) values (?,?,?,?)');
    $resultado = $sentencia->execute([$Nombre, $Correo, $Telefono, $Mensaje]);
    //PROBAMOS SI INSERTA A LA BD

    //AHORA MOSTRAMOS LA INFORMACION EN LA TABLA
    if ($resultado == true) {
        //PRIMER PROBAMOS SI NOS MUESTRA EL ECHO Y LUEGO
        echo "Insertado correctamente";
        //PROBAMOS QUE REDIRECCIONE
        header('Location: index.php');
    }else{
        echo 'Error al insertar';   
    }
?>