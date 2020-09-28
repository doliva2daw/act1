<?php
    //iniciar sesion y mantener sesion
    session_start();
    //eliminar valor de la variable sesion y la mantiene abierta
    session_unset();
    //se destruye variable de sesion y cookie
    session_destroy();

    header('Location:index.php');
?>