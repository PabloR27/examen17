<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_REQUEST["login"]) && ($_REQUEST = ["login"] == true)) {

        $name = $_POST["usuario"];
        $password = $_POST["clave"];

        if (strlen($password) > 5 && strlen($password) < 15 && ctype_alnum($password) == true) {
            if ($name == "usuario17" && $password == "password17") {
                echo "$name sus credenciales son correctas";
            } else {
                echo "$name sus credenciales NO son correctas";
            }
        } else {
            header("Location:pagina1.php?validado=false");
        }
    }
} else {
    header("Location:pagina1.php");
}
?>

