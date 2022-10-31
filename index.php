<?php
    include("scriptsPHP/manejoSesion.inc");

<<<<<<< HEAD
    if ($_SESSION['rol'] == 2) {
        header('Location:app_modulo_usuario/menu/index.php');
    } else if ($_SESSION['rol'] == 1) {
        header('Location:app_modulo_administrador/index.php');
    }
    exit();
?>
=======
if ($_SESSION['rol'] == 1) {
    header('Location:app_modulo_administrador/index.php');
} else if ($_SESSION['rol'] == 2) {
    header('Location:app_modulo_usuario/menu/index.php');
} else if ($_SESSION['rol'] == 3) {
    header('Location:app_modulo_usuario/menu/index.php');
}
exit();
>>>>>>> 9d1439fa3f7614406819a092258fffcbb43d2160
