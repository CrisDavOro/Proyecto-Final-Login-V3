<?php
include("manejoSesion.inc");
Session_destroy();
//header('Location:../login/login.html');
header('Location:../login/InicioSesion.php');
exit();
